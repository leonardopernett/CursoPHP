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

     require('Usuarios.php');

     $nombre = $_POST['nombre'];
      
     $user = new Usuarios();

      $array = $user->getConsulta($nombre);


       foreach ($array as $elemento) {
       	   echo "listado de productos <br>";
           echo "".$elemento['CODIGO']."<br>";
           echo "".$elemento['SECCION']."<br>";
           echo "".$elemento['NOMBRE']."<br>";
           echo "".$elemento['PRECIO']."<br>";
           echo "".$elemento['CANTIDAD']."<br>";

       }

  ?>	
</body>
</html>