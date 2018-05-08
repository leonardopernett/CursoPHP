<?php


 include_once('../MODEL/Objeto_Blog.php');
 include_once('../MODEL/Manejo_Objeto.php');


 try {

 	$miconexion = new PDO("mysql:host=localhost; dbname=bdblog","root","");

    $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $miconexion->exec('SET CHARACTER SET utf8');

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

   	   	   $destino_ruta ="../Img/";

   	   	   move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_ruta.$_FILES['imagen']['name'] );
   	   	   echo " el archivo ".$_FILES['imagen']['name']. " se ha copiado en el directorio <br>";
   	   }else{
   	   	echo " el archivo no se ha podido copiar";
   	   }
   }
// se crea el objeto

   $manejo_objeto = new Manejo_Objeto($miconexion);
   $blog = new Objeto_blog();

   $blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']),ENT_QUOTES));
   $blog->setFecha(Date('Y-m-d h:i:s A'));
   $blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']),ENT_QUOTES));
   $blog->setImagen($_FILES['imagen']['name']);

   $manejo_objeto->InsertContenido($blog);

   echo "archivo exitosmente";



 }catch(Exception $e){

 	 echo "Error". $e->getMessage();
 	 echo "Error". $e->getLine();
 }finally{
 	$conexion = null;
 }




