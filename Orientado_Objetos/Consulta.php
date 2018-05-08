<?php
   
   require('Productos.php');
   
   $nombre=$_POST['nombre'];


   $producto = new Productos();

   $array_producto = $producto->get_consulta($nombre);
   
 ?> 

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

       foreach($array_producto as $elemento) {
           
           echo "listado de productos <br>";
           echo "".$elemento['CODIGO']."<br>";
           echo "".$elemento['SECCION']."<br>";
           echo "".$elemento['NOMBRE']."<br>";
           echo "".$elemento['PRECIO']."<br>";
           echo "".$elemento['CANTIDAD']."<br>";
       

       }

 	 ?>
 </body>
 </html>