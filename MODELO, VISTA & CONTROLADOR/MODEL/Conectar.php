<?php 
  
  class Conectar{
      
   
   
   public static function conexion(){
     
     try {
     	
     	$conexion = new PDO('mysql:host=localhost; dbname=usuarios',"root","");
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conexion->exec("SET CHARACTER SET utf8");

     } catch (Exception $e) {
     	 
     	 die("error". $e->getMessage());
       echo "error en la linea: ". $e->getLine(); 
     } 

         return $conexion;
   }

  }

 ?>