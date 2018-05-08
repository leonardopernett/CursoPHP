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

    include_once('../MODEL/Manejo_Objeto.php');


     try {

    $miconexion = new PDO("mysql:host=localhost; dbname=bdblog","root","");

    $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $miconexion->exec('SET CHARACTER SET utf8');

    $manejo_objeto = new Manejo_Objeto($miconexion);


    $tabla_blog = $manejo_objeto->getContenidoPorFecha();

if (empty($tabla_blog)){

   echo "no hay entrada de blog aun ";

} else{

    foreach ($tabla_blog as $elemento) {
              echo "<h3>". $elemento->getTitulo(). "</h3>";
              echo "<h5>". $elemento->getFecha(). "</h5>";
              echo "<p style='400px'>". $elemento->getComentario(). "</p>";

           if($elemento->getImagen()!=""){

              echo "<img src='../Img/". $elemento->getImagen(). "' width='200px' /> <br>";
           }
?>
         <a href="../CONTROLLER/Delete.php">Borrar</a>


<?php

 echo "<hr/>";

     }

}

 }catch(Exception $e){

   echo "Error". $e->getMessage();
   echo "Error". $e->getLine();
 }finally{
  $conexion = null;
 }

   ?>

   <br>
   <a href="formulario.php">Volver Formulario</a>
</body>
</html>