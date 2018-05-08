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
     
    $nombre = $_GET['nombre'];
    $codigo = $_GET['codigo'];

      try{
      
        $conexion = new PDO("mysql:host=localhost; dbname=usuarios", "root","");
         $conexion->exec("SET CHARACTER SET utf8");
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          

          $sql = "SELECT CODIGO, SECCION, NOMBRE, PRECIO, CANTIDAD FROM PRODUCTOSS WHERE NOMBRE =:name AND CODIGO =:code";

          $resultado = $conexion->prepare($sql);
          $resultado->execute(array(':name'=> $nombre, ':code' => $codigo));
          

          echo "ARTICULOS "." ". $resultado->rowCount(). "<br>";

          while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
             
         	 echo "".$fila['CODIGO']." ". $fila['SECCION']." ".$fila['NOMBRE']." ".$fila['PRECIO']." ".$fila['CODIGO'];
        	 echo "<br>";
          }

           $resultado->closeCursor();

          
      }catch(Exception $e){
          
           die("error: ".$e->GetMessage());

      }finally{
          $conexion =null;
      }
     
      

  // try{
     
   //      $conexion = new PDO("mysql:host=localhost; dbname=usuarios","root","");
   //      //echo "conexion okis";
      
   //      $conexion->exec("SET CHARACTER SET utf8"); 

   //      $sql = "SELECT CODIGO, SECCION, NOMBRE, PRECIO, CANTIDAD FROM PRODUCTOS WHERE NOMBRE =? AND CODIGO =?"; 
      
   //      $resultado = $conexion->prepare($sql);
       
   //      $resultado->execute(array( $nombre, $codigo));

   //      while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){

   //      	echo "ARTICULOS <br>";
   //      	echo "".$fila['CODIGO']." ". $fila['SECCION']." ".$fila['NOMBRE']." ".$fila['PRECIO']." ".$fila['CODIGO'];
   //      	echo "<br>";
   //      }
     
   //   $resultado->closeCursor();

   // }catch(Exception $e){
        
   //      die("error: ". $e->GetMessage());

   // }finally{
   //      $conexion = null;
   // }
      
     


 ?>
</body>
</html>