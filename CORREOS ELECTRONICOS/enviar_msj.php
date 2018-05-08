<?php 
  
  if($_POST['nombre'] || $_POST['apellido'] || $_POST['correo'] || $_POST['comentario']==""){
  	echo "ha habido un error. revisa los campos";
  	die();
  }

  $destinatario = $_POST['correo'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['comentario'];
    
    $headers= "MIME-Version: 1.0\r\n";
    $headers.="Content-type: text/html: charset=iso-8859-1\r\n";
    //$headers = $header."Content-type: text/html: charset=iso-8859-1\r\n";
    $headers.="From: Prueba juan < pernettleonardo@gmail.com > \r\n";

     
     $exito = mail( $destinatario, $asunto, $comentario,  $headers );
     
     if($exito ==true){
       echo "mensaje enviado con exito";
     }else{
     	echo "ha habido un error";
     }














 ?>