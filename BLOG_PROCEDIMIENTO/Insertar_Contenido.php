<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php 
   
  $miconexion = mysqli_connect('localhost','root',''); 
  mysqli_select_db($miconexion,'bdblog')or die('no se pudo conectar la base de datos');
  mysqli_set_charset($miconexion,'utf8');
   if(!$miconexion){

   	  echo "no se pudo conectar ". mysqli_errno();
   	  exit();
   }

   if($_FILES['imagen']['error']){

       
       switch ($_FILES['imagen']['error']) {
       	
       	case 1: //error excedo de tamaño de archivo
       		echo "el tamaño del archivo excede";
       		break;
       	
       	case 2: //error tamaño archivomarcado 
       		echo "el tamaño del archivo excede 2 megas";
       		break;

       	case 3: //el envio de archivo se interrumpio
       		echo "el envio de archivo se interrumpio";
       		break;

       	case 4: //no hay fichero
       		echo "no se ha envidado  ningun archivo ";
       		break;
           	
       }

   }else{

   	 echo "subida exitoxamente <br>";

   	   if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']== UPLOAD_ERR_OK))){

   	   	   $destino_ruta ="img/";

   	   	   move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_ruta.$_FILES['imagen']['name'] );
   	   	   echo " el archivo ".$_FILES['imagen']['name']. " se ha copiado en el directorio <br>";
   	   }else{
   	   	echo " el archivo no se ha podido copiar";
   	   }
   }
    
    $titulo = $_POST['campo_titulo'];
    $comentario = $_POST['area_comentarios'];
    $fecha = date('Y-m-d h:i:s A');
    $imagen = $_FILES['imagen']['name'];

    $sql ="INSERT INTO CONTENIDO (TITULO, FECHA, COMENTARIO, IMAGEN)VALUES ('".$titulo."', '".$fecha."', '".$comentario."','".$imagen."')";


    $consulta = mysqli_query($miconexion, $sql);

    mysqli_close($miconexion);
    
    echo "Enhorabuena <br>";

       
      

 ?>
  
<a href="formulario.php ">Agregar mas entradas</a><br>
<a href="mostrar_Blog_DB.php ">Ir A Galeria</a><br>

</body>
</html>