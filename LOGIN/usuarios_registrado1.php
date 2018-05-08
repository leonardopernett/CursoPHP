<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
     
      session_start();

      if(!isset($_SESSION['usuario'])){

         header('location: sistema_login.php');

      }





	 ?>
  
  <h1>PAGINA 1</h1>
  <p> <?php echo "Usuario: ". $_SESSION['usuario']; ?> </p>
  
 <P><a href="usuarios_registrado.php">Volver</a></P>
	
</body>
</html>