<?php 

 require ('config.php');

 class Conexion {

   protected $conexion_db;


   public function Conexion(){
   	    
   	    $this->conexion_db = new Mysqli(DB_HOST, DB_USER , DB_PASS, DB_BASE);
   	    
   	    if ($this->conexion_db->connect_errno){

   	 	 echo "fallo conectar la base ".$this->$conexion_db->connect_errno();
   	 	 exit();
   	 	 return;
   	   }

   	  $this->conexion_db->set_charset(DB_CHARSET);
   }
   
 
 }







 ?>