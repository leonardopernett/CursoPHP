<?php 
  // CONEXION BASE DE DATOS MYSQL
   try {
        
      $base = new PDO("mysql:host=localhost; dbname=usuarios","root","");
     
      $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");



   } catch (Exception $e){
        
        die("error".$e->getMessage());

   } finally {
       $conexion = null;
  }
  
 ?>