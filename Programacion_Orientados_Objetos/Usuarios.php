
<?php 

  require('Conexion.php');
   
   class Usuarios extends Conexion {

       
    
      public function Usuarios(){
        
           parent::Conexion();

      }


      public function getConsulta($datos){
       
     $resultado = $this->conexion_db->query("SELECT * FROM PRODUCTOS WHERE 
          NOMBRE ='". $datos ."'");
        $mostrar = $resultado->fetch_all(MYSQL_ASSOC);
        return $mostrar;

      }

   }

 ?>

