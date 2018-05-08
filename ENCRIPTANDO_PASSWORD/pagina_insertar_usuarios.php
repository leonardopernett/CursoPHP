<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario = $_POST["usu"];
    $contrasenia = $_POST["contra"];

    $opciones = ['cost' => 12];
	
	$password_cifrado = password_hash($contrasenia, PASSWORD_BCRYPT, $opciones);
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=usuarios', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO LOGIN (USUARIO, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		//$usuario =  htmlentities(addslashes($_POST["usu"]));
		//$contrasenia = htmlentities(addslashes($_POST["contra"]));

        //$contra = password_hash($contrasenia,PASSWORD_DEFAULT);
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$password_cifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>