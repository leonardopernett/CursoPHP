<?php 

 //RECIBIMOS LOS DATS IMAGEN

$imagen           =   $_FILES['imagen']['name'];   // nimagen cargada
$tipo_image       =   $_FILES['imagen']['type']; // tpo de la imagen 
$tam_imagen       =   $_FILES['imagen']['size'];// tamaño de la imagen 
$temporal_imagen  =   $_FILES['imagen']['tmp_name']; // archivo temporal donde se almacena image
$carpeta_destino  =   $_SERVER['DOCUMENT_ROOT'].'/image/';//ruta de la carpeta de destino servidor 


 if ($tam_imagen <= 1000000){
 	if($tipo_image == 'image/jpeg'  || $tipo_image == 'image/png' ){ 
   //movemos la imagen directorio temporal al directorio
    move_uploaded_file($temporal_imagen, $carpeta_destino.$imagen);
    echo "archivo guardado ";
    
     try{

         $id= $_POST['id'];
      
         $conexion = new PDO("mysql:host=localhost; dbname=usuarios", "root","");
         $conexion->exec("SET CHARACTER SET utf8");
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          

          $sql = "UPDATE PRODUCTOS SET FOTO = '$imagen' WHERE CODIGO ='$id' ";

          $resultado = $conexion->prepare($sql);
          $resultado->execute();
          

          //echo "ARTICULOS "." ". $resultado->rowCount(). "<br>";

           $resultado->closeCursor();

          
      }catch(Exception $e){
          
           die("error: ".$e->GetMessage());

      }finally{
          $conexion =null;
      }



  }else {

  	echo "Archivo no es formato imagen ";
  }
} else{

	echo "error archivo demasiado grande";
}

   















 ?>