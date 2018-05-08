
<?php 
   

	//$busqueda = $_POST['buscar'];

	  include("conect.php");//metodo

      //mysqli_close($conect);
      
         $codigo = $_POST['codigo'];

      $seccion = $_POST['seccion'];

      $nombre = $_POST['nombre'];

     // $pagi = $_SERVER['PHP_SELF'];
     
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

     $consult = "INSERT INTO PRODUCTOS (CODIGO, SECCION, NOMBRE) VALUE('$codigo','$seccion','$nombre')";

    $result = mysqli_query($connect,  $consult );  

         mysqli_close($connect); 
        
    ?>
   
     <?php  
  

      ?>