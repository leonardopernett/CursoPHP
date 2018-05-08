<?php 
    
    require('Conexion.php');

  class Usuarios extends Conexion{



      public function Usuarios(){
        
      
     parent::Conexion();
          
      }

      public function getConsulta($datos){
         
       $sql = "SELECT * FROM PRODUCTOS WHERE NOMBRE =:nombre";
       
       $sentencia = $this->conexion_db->prepare($sql);

       $sentencia->execute(array(':nombre'=>$datos));

       $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

       $sentencia->closeCursor();
        return $resultado;

        $this->conexion_db= null;

      }
  }

















 ?>