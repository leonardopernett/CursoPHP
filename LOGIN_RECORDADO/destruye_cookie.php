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
           
        setcookie('nombre_user','leonardo',time()-1);
        echo "la cookie ha sido destruida";
        header('location: login.php');

	 ?>
</body>
</html>