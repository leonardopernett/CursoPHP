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
       
       try {
       	
          $conexion = new PDO('mysql:host=localhost; dbname=usuarios','root','');

          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conexion->exec("SET CHARACTER SET utf8");

             $tam_pagina = 3;

          if(isset($_GET['pagina'])){
              
              if ($_GET['pagina']==1){
                 
                 header('location: paginacion.php');

              }else {
 
                   $pagina = $_GET['pagina'];
               }
                 
                 
          }else {

          	 $pagina= 1;
          }


          $empezar_desde = ($pagina - 1) * $tam_pagina ;
          
          $sql= "SELECT CODIGO, SECCION, NOMBRE FROM PRODUCTOS WHERE SECCION='PELUQUERIA'";
          
          $resultado = $conexion->prepare($sql);
          $resultado->execute();
          $num_fila = $resultado->rowCount();

          $total_pagina =  ceil($num_fila / $tam_pagina);



          echo "numero de registro de la consulta ". $num_fila."<br>";
          echo "mostramos ".   $tam_pagina." registro por cada pagina <br>";
          echo "mostrando la pagina ". $pagina ." de ".    $total_pagina."<br>";


          // while ($registro =  $resultado->fetch(PDO::FETCH_ASSOC) ) {
          	
          // 	echo "codigo: "." ".$registro['CODIGO']."seccion: "." ".$registro['SECCION'].""."Nnombre: "."".$registro['NOMBRE']."<br>";

          // }

          $resultado->closeCursor();

           $sql_limite= "SELECT CODIGO, SECCION, NOMBRE FROM PRODUCTOS WHERE SECCION='PELUQUERIA' LIMIT $empezar_desde,  $tam_pagina  ";

          $resultado = $conexion->prepare($sql_limite);
          $resultado->execute(array());

          while ($registro =  $resultado->fetch(PDO::FETCH_ASSOC) ) {
          	
          	echo "<strong>COD: </strong> "." ".$registro['CODIGO']." <strong>SECCION: </strong> "." ".$registro['SECCION'].""."<strong>NOMBRE: </strong> "."".$registro['NOMBRE']."<br>";

          }

       } catch (Exception $e) {
       	   
       	  die("error". $e->getMessage());

       }finally{
       	$conexion = null;
       }


       // -------------------------------- PAGINACION -----------------------------------//

       for ($i=1; $i <= $total_pagina ; $i++) { 
       	  
       	  echo "<a href='?pagina=".$i. "'>". $i." </a> ";

       	 
       }

	 ?>
</body>
</html>