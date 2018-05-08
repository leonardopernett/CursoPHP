<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

  <style>

     table tr td {
       border: 2px solid #000;
     }


  </style>
  
</head>
<body>
	<?php 
   

	//$busqueda = $_POST['buscar'];

	  include("conect.php");//metodo

      //mysqli_close($conect);

      $codigo = $_GET['codigo'];
      $seccion = $_GET['seccion'];
      $nombre = $_GET['nombre'];
      $precio = $_GET['precio'];
      $cantidad = $_GET['cantidad'];

      
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

  $consult = "INSERT INTO PRODUCTOS (CODIGO, SECCION, NOMBRE, PRECIO, CANTIDAD) VALUE('$codigo','$seccion','$nombre','$precio','$cantidad')";

    $result = mysqli_query($connect,  $consult );  

         mysqli_close($connect); 


         if($result== FALSE){
          echo "error gusradando datos";
         }else{
          echo "registro exitoso good look <br>";
          echo "<table><tr><td>CODIGO</td><td>SECCION</td><td>NOMBRE</td><td>PRECIO</td><td>CANTIDAD</td></tr>";
          echo "<tr><td>$codigo</td><td>$seccion</td><td>$nombre</td><td>$precio</td><td>$cantidad</td></tr></table>";

         // header('Location: formulario_registrar.php');// redirreciona la pagina 
         }
        
    ?>
   
    
    

</body>
</html>