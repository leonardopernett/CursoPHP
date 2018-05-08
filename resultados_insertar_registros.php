<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- inicia el php -->
	<?php 

	$codigo   = $_GET['codigo'];
  $seccion  = $_GET['seccion'];
  $nombre   = $_GET['nombre'];
  $precio   = $_GET['precio'];
  $cantidad = $_GET['cantidad'];
      
      include("conect.php");
      
       $conexion = mysqli_connect($db_host,  $db_user, $db_pass);
       
       mysqli_select_db($conexion, $db_base) or die ("ERROR CONECTANDO LA BASE");
       mysqli_set_charset($conexion, 'utf8');

      
       $consulta = "INSERT INTO PRODUCTOS (CODIGO, SECCION, NOMBRE, PRECIO, CANTIDAD) VALUE (?,?,?,?,?)";

       $resultado = mysqli_prepare($conexion, $consulta);

       $ok = mysqli_stmt_bind_param($resultado, "sssss", $codigo, $seccion, $nombre, $precio, $cantidad);

       $ok = mysqli_stmt_execute($resultado);



       if ($ok==false) {
       	echo "error al ejecutar consulta";

       } else
            {
          
         // $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $nombre, $precio, $cantidad);
          echo "ARTICULOS INSERTADO <br> <br>" ;
          
          // while(mysqli_stmt_fetch($resultado)){
          //    echo $codigo ." ".$seccion ." ".$nombre ." ".$precio ." ".$cantidad."<br>";
          // }
          mysqli_stmt_close($resultado);
        }

	 ?>
     <!-- fin del php  -->
</body>
</html>