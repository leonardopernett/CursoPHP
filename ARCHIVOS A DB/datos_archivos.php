<?php 

 //RECIBIMOS LOS DATS IMAGEN

$archivos           =   $_FILES['archivo']['name'];   // nimagen cargada
$tipo_archivos       =   $_FILES['archivo']['type']; // tpo de la imagen 
$tam_archivos       =   $_FILES['archivo']['size'];// tamaño de la imagen 
$temporal_archivos  =   $_FILES['archivo']['tmp_name']; // archivo temporal donde se almacena image
$carpeta_destino  =   $_SERVER['DOCUMENT_ROOT'].'/image/';//ruta de la carpeta de destino servidor 

 if ($tam_archivos <= 1000000){
          
        $db_host = "localhost";
        $db_base ="usuarios";
        $db_user ="root";
        $db_pass = "";

        $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");
          
          move_uploaded_file($temporal_archivos, $carpeta_destino.$archivos );


          // $archivo_objeto = fopen($carpeta_destino.$archivos , "r");
          // $contenido      = fread($archivo_objeto, $tam_archivos );
          // $contenido      = addslashes($contenido); 
        

          // fclose($archivo_objeto);

          $sql = "INSERT INTO archivos (ID , NOMBRE , TIPO) 
                  VALUES('0', '$archivos', '$tipo_archivos'  )";

          $resultado = mysqli_query($connect, $sql);
  
          
} else{

	echo "error archivo demasiado grande";
}

   
 ?>