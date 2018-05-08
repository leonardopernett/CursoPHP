<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>


    <!-- inicio del php  -->
	<?php 
  
    

	include ('conect.php');
    
     $conexion = mysqli_connect( $db_host, $db_user, $db_pass);
       
       // esta funcion evita los caracteres y solo deja numericos y string
       $user = mysqli_real_escape_string( $conexion, $_GET['user'] ); 
       $pass = mysqli_real_escape_string( $conexion, $_GET['pass'] );

      // $user = $_GET['user'];
      // $pass = $_GET['pass'];


     mysqli_select_db($conexion, $db_base) or die('no se pudo conectar a la base');
     mysqli_set_charset($conexion, 'utf8');

     $consultar = "SELECT * FROM USERS WHERE NOMBRE='$user' AND PASSWORD='$pass'";

     echo $consultar . "<br><br>";

     $resultado = mysqli_query($conexion, $consultar );
      
     
           if(mysqli_affected_rows($conexion)>0 )  {
               
                while($fila = mysqli_fetch_array($resultado ,MYSQL_ASSOC)){ 
                 echo "<strong>NOMBRE: </strong>" ."\n";
            	 echo $fila['NOMBRE']." "."<br>";
            	 echo "<strong>CONTRASEÑA: </strong>"."\n";
            	 echo $fila['PASSWORD']." "."<br>";
            	 echo "<strong>TELEFONO: </strong>"."\n";
            	 echo $fila['TELEFONO']." "."<br>";
                 echo "<strong>DIRECCION: </strong>"."\n";
            	 echo $fila['DIRECCION']." "."<br>";
                          echo "<br>";
                }
              }
              else{
              	echo "ERROR, DATOS NO ENCONTRADO EN LA BASE";
              }
              
                
            
	 ?>
	<!-- fin del php  -->


</body>
</html>