 <?php 

   //require('config.php');
   //creamos la clase conexion 
    class Conexion {
     
     protected $conexion_db;


    public function Conexion(){

        try{ 
        
        $this->conexion_db = new PDO("mysql:host=localhost; dbname=usuarios", "root","");
        $this->conexion_db->exec("SET CHARACTER SET utf8");
        $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->conexion_db;

       }catch(Exception $e){
          echo "error". $e->getMessage();
       }
        


     }

    }


 ?>
  