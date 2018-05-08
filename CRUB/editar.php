<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<body>

 <?php

      include('conexion.php');
   
   if(!isset($_POST['bot_actualizar']))
   {
       $id = $_GET['id'];
       $nombre = $_GET['nom'];
       $apellido = $_GET['ape'];
       $direccion = $_GET['dir'];
     
   }else{
      
      $id = $_POST['id'];
      $nom = $_POST['nom'];
      $ape = $_POST['ape'];
      $dir = $_POST['dir'];

     

       $resultado = $base->prepare("UPDATE DATOS_USUARIOS SET ID = :id, NOMBRE = :nombre, APELLIDO = :apellido, DIRECCION = :direccion WHERE ID = :id");
        $resultado->execute(array(':id'       =>  $id,
                                  ':nombre'   =>  $nom,
                                  ':apellido' =>  $ape,
                                  ':direccion'=>  $dir ));


        header('location: formulario.php');

          

       
      
   }



   

   ?>





<h1>ACTUALIZAR</h1>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <a href="<?php echo $id; ?>"><input type="hidden" value="<?php echo $id; ?>" name="id" id="id"></a></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" value="<?php echo $nombre; ?>" id="nom"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $apellido; ?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $direccion; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>