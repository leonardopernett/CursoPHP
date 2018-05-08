<?php 

 require_once('MODEL/Conectar.php');
   
   class Productos_model{

      private $db;
      private $productos;



      public function __construct(){
               
         

         $this->db = Conectar::conexion();

          $this->productos = array();

      }

       
       public function getProductos(){
            
            $consulta = $this->db->query("SELECT * FROM PRODUCTOS");

            while ($mostrar =  $consulta->fetch(PDO::FETCH_ASSOC)) {
            	
            	$this->productos [] = $mostrar;
            }

            return $this->productos;


       }

   }

 ?>