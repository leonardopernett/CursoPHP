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

        $conexion = new mysqli("localhost","root","","usuarios");
       
        $conexion->set_charset("utf8");

        	if($conexion->connect_errno){
        		echo "Lo siento, no se pudo coentar a la base"."".$conexion->conect_errno;
        	}
          
        $consulta = "SELECT * FROM PRODUCTOS";
        $resultado = $conexion->query($consulta);
            
           if ($conexion->errno){
           	   die($conexion->errno);
           }

           
           while($fila = $resultado->fetch_assoc()){
                echo "". $fila['CODIGO']." \n". $fila['SECCION']." \n". $fila['NOMBRE'].
        	         " \n". $fila['PRECIO']." \n". $fila['CANTIDAD']."<br>";
           }

          $conexion->close();


























        // $conexion = new mysqli("localhost","root","","usuarios");
        // $conexion->set_charset("utf8");

        // if($conexion->connect_errno)
        // {
        // 	ECHO "ERRO CONNECTANDO LA BASE DE DATOS ". $conexion->connect_errno;
        // }

        
        // $sql = "SELECT * FROM PRODUCTOS";

        // $resultado = $conexion->query($sql);

        //  if( $conexion->errno){
        //  	die($conexion->errno);
        //  }


        //  while ($fila = $resultado->fetch_assoc())
        //  {

        //  	 echo "". $fila['CODIGO']."". $fila['SECCION']."". $fila['NOMBRE'].
        //  	       "". $fila['PRECIO']."". $fila['CANTIDAD']."<br>";
        //  }

        //     $conexion->close();
	  ?>
	
</body>
</html>