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

      if (!($_COOKIE['idioma_selecionado'])){

      	   header('location: crear_cookie.php');

      }else if($_COOKIE['idioma_selecionado']=="es"){

      	   header('location: spanish.php');

      }else if($_COOKIE['idioma_selecionado']=="in") {
      	    
      	    header('location: english.php');
      }

       



	 ?>
</body>
</html>