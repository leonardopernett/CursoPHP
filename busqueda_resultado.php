<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
  <?php
   
   function ejecuta_consulta($labusqueda){ 

	//$busqueda = $_POST['buscar'];

	  include("conect.php");//metodo

      //mysqli_close($conect);
                               
                               //direccion  //usuario   //password   //base datos 
     $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

     $consult = "SELECT * FROM PRODUCTOS WHERE NOMBRE ='$labusqueda'";

     echo "$consult <br><br>";

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

         mysqli_close($connect); 
       }  
    ?>
</head>
<body>
	<?php 

       $mibusqueda = $_POST['buscar'];
       $mipag = $_SERVER['PHP_SELF'];
       
       if($mibusqueda!=null){

       	ejecuta_consulta($mibusqueda);
       }else 
       {
       	echo("<fieldset>
       		   <legend><strong>BUSCANDO DATOS DE LA BASE DE DATOS</strong></legend>
       		     <form action='". $mipag . "' method='post'>
       		       <label> Buscar:
       		       <input type='text' name='buscar'></label>
       		       <input type='submit' name='enviar' value='enviar'>
       	         </form> 
       	    </fieldset>");
       }

	 ?>

	
</body>
</html>