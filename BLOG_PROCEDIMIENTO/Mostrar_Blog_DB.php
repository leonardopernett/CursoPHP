<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mi Blog</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2 style="text-align: center;">Blog </h2>

	<?php 

     $miconexion = mysqli_connect('localhost','root',''); 
     mysqli_select_db($miconexion,'bdblog')or die('no se pudo conectar la base de datos');
      mysqli_set_charset($miconexion,'utf8');
     
     if(!$miconexion){

   	  echo "no se pudo conectar ". mysqli_errno();
   	  exit();
   }


    $sql = "SELECT * FROM CONTENIDO ORDER BY FECHA" ;

    $consulta = mysqli_query($miconexion,$sql);

    if($consulta){   
         
         while($file = mysqli_fetch_assoc($consulta)){
         
           echo "<h3> ". $file['TITULO']." </h3>"; 
           echo "<h5> ". $file['FECHA']." </h5>"; 
           echo "<p style='width:400px'> ". $file['COMENTARIO']." </p>";  
          
            
           if(!empty($file['IMAGEN'])){

           	  echo "<img src='img/".$file['IMAGEN']."' width='300px' /><br>";
           }

             echo "<hr/>";
           

         }
       }

	 ?>
</body>
</html>