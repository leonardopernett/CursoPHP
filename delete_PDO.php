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
      
      $codigo = $_POST['codigo'];
    
   
      try{
                 
          $conexion = new PDO("mysql:host=localhost; dbname=usuarios", "root","");
         $conexion->exec("SET CHARACTER SET utf8");
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           $consulta = " DELETE FROM PRODUCTOS WHERE CODIGO = :codigo";

           $resultado = $conexion->prepare($consulta);

           $resultado->execute(array(':codigo' => $codigo ));
                                     
                                     
         
             echo " se eliminarion ". $resultado->rowCount() ." registros ";


      }catch(Exception $e){
          
          die("error: ". $e->getMessage());

      }finally{
         $conexion = null ;
      }





	 ?>
	
</body>
</html>