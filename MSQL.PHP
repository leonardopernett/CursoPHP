<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
      
     include("conect.php");//metodo

      //mysqli_close($conect);
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

     $consult = "SELECT * FROM PRODUCTOS";

    $result = mysqli_query($connect,  $consult );
    
    // while($mostrar = mysqli_fetch_row( $result)){
    //      echo $mostrar[0];
    //      echo $mostrar[1];
    //      echo $mostrar[2];
    //      echo $mostrar[3];
    //      echo"<br>";
    // }
    echo "COD"." ". "SECCION"." "."NOMBRE ";
     echo "<br>";
     
        while ($mostrar = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            echo $mostrar['CODIGO']."\n";
            echo $mostrar['SECCION']."\n";
            echo $mostrar['NOMBRE']."\n";
            ECHO "<br>";
         }     
       ?>

</body>
</html>