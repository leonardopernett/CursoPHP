<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
   

	//$busqueda = $_POST['buscar'];

	  include("conect.php");//metodo

      //mysqli_close($conect);

      $codigo = $_GET['codigo'];
      $nombre = $_GET['nombre'];
      
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

    $consult = "DELETE FROM PRODUCTOS WHERE CODIGO='$codigo' AND NOMBRE='$nombre'";

    $result = mysqli_query($connect,  $consult );  

         //mysqli_close($connect);


                     
         if($result==false){
             echo "error eliminando registro";
         }
         else
         {
             if(mysqli_affected_rows($connect)==0){ //mysql_affected_rows hace un conteno de los registro afectados

                echo "no se eliminaron registro";
             }else {

                echo "se eliminaron: ". " ". mysqli_affected_rows($connect)." "."registros";
             }
         } 


         
        
    ?>
   
    
    

</body>
</html>