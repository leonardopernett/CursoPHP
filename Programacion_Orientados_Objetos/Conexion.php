<?php 

require('config.php');
   //creamos la clase conexion 
    class Conexion {
     
     protected $conexion_db;


    public function Conexion(){

        $this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_BASE);
        
        $this->conexion_db->set_charset(DB_SET_CHARSET);

        if($this->conexion_db->connect_errno){

           echo "erro con la conexion ". " ".$this->conexion_db->connect_errno;
           exit();
           return;

        }


     }

    }


 ?>