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

	$busqueda = $_POST['buscar'];

	  include("conect.php");//metodo

      //mysqli_close($conect);
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

     $consult = "SELECT * FROM PRODUCTOS WHERE NOMBRE='$busqueda'";
     //echo "$consult <br><br>";


    $result = mysqli_query($connect,  $consult );
    
    // while($mostrar = mysqli_fetch_row( $result)){
    //      echo $mostrar[0];
    //      echo $mostrar[1];
    //      echo $mostrar[2];
    //      echo $mostrar[3];
    //      echo"<br>";
    // }
    echo "<strong>DATOS DEL PRODUCTO</strong>";
     echo "<br><br>";
     
        while ($mostrar = mysqli_fetch_array($result, MYSQL_ASSOC)) {
        echo "<form action='actualizar.php' method='get'>";
        echo "<input type='text' name='codigo' value='". $mostrar['CODIGO']."' >" . "<br>";
        echo "<input type='text' name='seccion' value='". $mostrar['SECCION']."'>" . "<br>";
        echo "<input type='text' name='nombre' value='". $mostrar['NOMBRE']."'>" . "<br>";
        echo "<input type='text' name='precio' value='". $mostrar['PRECIO']."'>" . "<br>";
        echo "<input type='text' name='cantidad' value='". $mostrar['cantidad']."'>" . "<br>";
          echo "<input type='submit' name='act' value='actualizar'>";
        echo "</form>";
        ECHO "<br>";
            
         }     
     ?>

</body>
</html>