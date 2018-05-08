<?php
// crearemos a clase
  include_once('Objeto_Blog.php');

   class Manejo_Objeto {

     private $conexion;


     public function __construct($conexion){
         $this->conexion = $conexion;
       // $this->setConexion($conexion);
     }


    // public function setConexion(PDO $conexion){
    //     	$this->conexion = $conexion;
    // }

    public function getContenidoPorFecha(){

           $matriz = array();
           $contador = 0 ;

           $resultado = $this->conexion->query("SELECT * FROM CONTENIDO ORDER BY FECHA ASC");

           while ($registro = $resultado->fetch(PDO:: FETCH_ASSOC)){

             $blog = new Objeto_Blog();

             $blog->setID($registro['ID']);
             $blog->setTitulo($registro['TITULO']);
             $blog->setFecha($registro['FECHA']);
             $blog->setComentario($registro['COMENTARIO']);
             $blog->setImagen($registro['IMAGEN']);

             $matriz[$contador] = $blog;

             $contador ++;

           }
           return  $matriz;
        }

       public function InsertContenido(Objeto_Blog $blog){

            $sql = "INSERT INTO CONTENIDO (TITULO, FECHA, COMENTARIO, IMAGEN) VALUES('". $blog->getTitulo()."','". $blog->getFecha()."','".$blog->getComentario()."','".$blog->getImagen()."')";
            $resultado = $this->conexion->prepare($sql);
            $resultado->execute();
       }


       public function getBorrar(Objeto_Blog $blog){

            $sql ="DELETE FROM DATOS_USUARIOS WHERE ID = '". $blog->getID()."'";
            $resultado = $this->conexion->prepare($sql);
            $resultado->execute();

       }
  }

  ?>