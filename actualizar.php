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
      
        $codigo = $_GET['codigo'];
        $seccion = $_GET['seccion'];
        $nombre = $_GET['nombre'];
        $precio = $_GET['precio'];
        $cantidad = $_GET['cantidad'];

	//$busqueda = $_POST['buscar'];

	  include("conect.php");//metodo

      //mysqli_close($conect);

     
         //$precio = $_GET['precio'];
         // $cantidad = $_GET['cantidad'];
    
                               
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

    $consult = "UPDATE PRODUCTOS SET  NOMBRE ='$nombre' , SECCION ='$seccion', PRECIO =$precio, cantidad = $cantidad WHERE CODIGO='$codigo'";

    $result = mysqli_query($connect,  $consult );  

         //mysqli_close($connect);


                     
         if($result==false){
             echo "error actualizando registro";
         }
         else
         {
             if(mysqli_affected_rows($connect)==0){ //mysql_affected_rows hace un conteno de los registro afectados

                echo "no se Actualizo registro";
             }else {

                echo "se actualizo: ". " ". mysqli_affected_rows($connect)." "."registros";
             }
         } 
         
        
    ?>
   
    
    

</body>
</html>