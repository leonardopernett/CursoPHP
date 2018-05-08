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
     
    setcookie("idioma_selecionado",$_GET['idioma'],time()+86400);  
       header('location: ver_cookie.php');
   
	 ?>
</body>
</html>