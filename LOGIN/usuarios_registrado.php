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
  
  <h1>BIENVENIDOS USUARIOS</h1>
  <p> <?php echo "hola: ". $_SESSION['usuario']." "."<a href='cierre_session.php'>Salir </a>"; ?> </p>
  <P>Esto es informacin solo para usuarios registrados </P>

   <table>
     
       <tr>
         <td><h3>Zona de Usuarios</h3></td>
       </tr>
     
       <tr>
         <td><a href="usuarios_registrado1.php">Pagina 1</a></td><td><a href="usuarios_registrado2.php">Pagina 2</a></td>
       </tr>
     
   </table>
	
</body>
</html>