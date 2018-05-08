<?php 


  $destino = "pernettleonardo@gmail.com";
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono =$_POST['telefono'];
  $mensaje = $_POST['comentario'];
  $asunto = $_POST['asunto'];

$contenido = "nombre: ". $nombre. "\nCorreo: ". $correo. "\ntelefono ". $telefono. "\nmensaje ".$mensaje ;

mail($destino, $asunto, $contenido);
 

 ?>

 <?= "mensaje enviado" ?>