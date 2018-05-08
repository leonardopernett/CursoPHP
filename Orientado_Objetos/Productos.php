<?php 

 require ('conexion.php');

class Productos extends Conexion {

   //protected $sql;

    
    public function Productos(){ 

     parent::__construct();

  }
  

   
   public function get_consulta($datos){
      
    $resultado = $this->conexion_db->query("SELECT * FROM PRODUCTOS WHERE NOMBRE ='".$datos."'");
    
      $mostrar = $resultado->fetch_all(MYSQL_ASSOC);

      return $mostrar;

   }

}


 ?>