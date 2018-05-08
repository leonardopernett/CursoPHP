<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
 <body>

  <?php

try{
	
	$contador=0;
	$login = htmlentities(addslashes($_POST["login"]));
	
	$password = htmlentities(addslashes($_POST["password"]));
	
	
	$base = new PDO("mysql:host=localhost; dbname=usuarios" , "root", "");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
	
	
	$sql="SELECT * FROM LOGIN WHERE USUARIO= :login";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":login"=>$login));
		
		while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){			
			
			 //echo "". $registro['USUARIO']. "". $registro['PASSWORD']."<br>";

			 if (password_verify($password, $registro['PASSWORD'])){
              
                 $contador++;
			  }	
			
		    }

		    if ($contador > 0){

		       echo "usuario correcto, Bienvenido";
            } 
           else {

		  	   echo "usuario incorrecto, sorry";
	        }			
			
		     $resultado->closeCursor();

	
} catch(Exception $e){
	
	   die("Error: " . $e->getMessage());
	
	
} finally {
	   
	   $base = null;
}

 ?>
</body>
</html>