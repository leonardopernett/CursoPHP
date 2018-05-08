
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
   <!-- inicio del php -->
<?php 
 
   include("conect.php");
   
     $codigo   = $_GET['codigo'];
     $seccion  = $_GET['seccion'];
     $nombre   = $_GET['nombre'];
     $precio   = $_GET['precio'];
     $cantidad = $_GET['cantidad'];
     
      $conexion = mysqli_connect($db_host, $db_user, $db_pass);
      mysqli_select_db($conexion, $db_base) or die ("NO SE PUDO CONECTAR A LA BASE");
      mysqli_set_charset($conexion, "utf8");
 
     $query = "UPDATE PRODUCTOS SET SECCION = ?, NOMBRE=?, PRECIO=?, CANTIDAD=? WHERE CODIGO = ?";
      
      // PREPARAMOS LA CONEXION 
     $resultado = mysqli_prepare($conexion , $query);
     
     // INSERTAMOS PARAMETROS 
     $ok = mysqli_stmt_bind_param($resultado, 'ssiis', $seccion, $nombre, $precio, $cantidad, $codigo);
     
     //ejecutamos 
     $ok = mysqli_stmt_execute($resultado);

      if ($ok==false) {
       	echo "error al ejecutar consulta";

       } else
            {
          
          echo "ARTICULOS ACTUALIZAMOS <br> <br>" ;
         
          mysqli_stmt_close($resultado);
        }





	 ?>
	
</body>
</html>