

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

    include_once('../MODEL/Objeto_Blog.php');
    include_once('../MODEL/Manejo_Objeto.php');

   try {

 	$miconexion = new PDO("mysql:host=localhost; dbname=bdblog","root","");

    $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $miconexion->exec('SET CHARACTER SET utf8');

   $manejo_objeto = new Manejo_Objeto($miconexion);
   $blog = new Objeto_blog();
   $manejo_objeto->getBorrar($blog);

   echo "borrado exitoso";

  }catch(Exception $e){

 	 echo "Error". $e->getMessage();
 	 echo "Error". $e->getLine();
 }finally{
 	$conexion = null;
 }
	 ?>

</body>
</html>