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
       

    if(isset($_COOKIE["pruebas"])){
     
      echo $_COOKIE["pruebas"];
    
    }else 
    {
    	echo "no se ha creado la cookie";
    }

   


  


	 ?>

</body>
</html>