<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

<style>
	
	h2{
		text-align: center;
	}


    

	a  {
		
       text-align: center;
	}

	a img {
		width: 70px;
		height: 50px;
		display: inline-block;
		cursor: pointer;
	}

</style>

</head>
<body>
     <?php 
       

       if(isset($_COOKIE['idioma_selecionado'])){
         
           header('location: ver_cookie.php');

       }
       


      ?>
     <h2>Elegir idioma</h2>
   
     <a href="crear_cookie.php?idioma=es"><img src="esp.png" alt=""></a> 
     <a href="crear_cookie.php?idioma=in"><img src="ing.png" alt=""></a> 
 
     
	
</body>
</html>