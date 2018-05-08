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

	$nombre = $_GET['nombre'];
      
      include("conect.php");
      
       $conexion = mysqli_connect($db_host,  $db_user, $db_pass);
       
       mysqli_select_db($conexion, $db_base) or die ("ERROR CONECTANDO LA BASE");
       mysqli_set_charset($conexion, 'utf8');

      
       $consulta = " SELECT CODIGO, SECCION, NOMBRE FROM PRODUCTOS WHERE NOMBRE = ? ";

       $resultado = mysqli_prepare($conexion, $consulta);

       $ok = mysqli_stmt_bind_param($resultado, "s", $nombre);

       $ok = mysqli_stmt_execute($resultado);



       if ($ok==false) {
       	echo "error al ejecutar consulta";
       }else{
          
          $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio);
          echo "ARTICULOS ENCONTRADOS <br> <br>" ;
          
          while(mysqli_stmt_fetch($resultado)){
             echo $codigo ." ".$seccion ." ".$nombre ."<br>";
          }
          mysqli_stmt_close($resultado);
        }

	 ?>
     <!-- fin del php  -->
</body>
</html>