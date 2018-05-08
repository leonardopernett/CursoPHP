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
      try{

        $conexion  =  new PDO("mysql:host=localhost; dbname=usuarios","root","");
        $conexion->exec("SET CHARACTER SET utf8");
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql       =  "INSERT INTO LOGIN (USUARIO, PASSWORD) VALUE (:user, :password)";

        $resultado =  $conexion->prepare($sql);

        $user      =  htmlentities(addslashes($_POST['user']));
        $password  =  htmlentities(addslashes($_POST['password']));

        $resultado->bindValue(':user',$user);
        $resultado->bindValue(':password',$password);

        $resultado->execute();
        
        $insertar = $resultado->rowCount();
        
       echo " registro " .$insertar. "<br>";


        // if($insertar > 0){

        // 	echo "usuario agregado";
        // // 	//header("location: sistema_login.php");
        // }else{

        	
        // 	echo "no se agrego ningun usuario ";
        // // 	//header("location: sistema_login.php");
        // }

        
        $resultado->closeCursor();

      }catch(Exception $e){

      	die("error".$e->getMessage);
      }
       

	 ?>
	
</body>
</html>