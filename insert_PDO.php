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
      $nombre = $_POST['nombre'];
      $codigo = $_POST['codigo'];
       $seccion = $_POST['seccion'];
      $precio = $_POST['precio'];    
       $cantidad = $_POST['cantidad'];  
   
      try{
                 
          $conexion = new PDO("mysql:host=localhost; dbname=usuarios", "root","");
         $conexion->exec("SET CHARACTER SET utf8");
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           $consulta = "INSERT INTO PRODUCTOS (CODIGO, NOMBRE, SECCION, PRECIO, CANTIDAD) VALUE(:codigo, :nombre, :seccion, :precio, :cantidad)";

           $resultado = $conexion->prepare($consulta);

           $resultado->execute(array(':codigo'   => $codigo,
                                     
                                     ':nombre'   => $nombre,
                                     ':seccion'   => $seccion,
                                     
                                     ':precio'   => $precio,
                                     ':cantidad' => $cantidad

                                      ));
                                     
                                     
         
             echo " se insertador ". $resultado->rowCount() ." registro ";


      }catch(Exception $e){
          
          die("error: ". $e->getMessage());

      }finally{
         $conexion = null ;
      }





	 ?>
	
</body>
</html>