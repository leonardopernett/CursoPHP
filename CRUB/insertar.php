<?php 

   
   include("conexion.php");

  $id = $_GET['ids'];

  $resultado = $base->prepare("INSERT INTO  DATOS_USUARIOS (NOMBRE, APELLIDO, DIRECCION) VALUE (':')");
  $resultado->execute();
  header('location: formulario.php');
   









 ?>