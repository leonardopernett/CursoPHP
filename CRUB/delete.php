<?php 
  
  include("conexion.php");

  $id = $_GET['id'];

  $resultado = $base->prepare("DELETE FROM DATOS_USUARIOS WHERE ID = '$id'");
  $resultado->execute();
  header('location: formulario.php');

 ?>