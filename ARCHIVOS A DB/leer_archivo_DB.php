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
        
        $id="";
        $contenido="";
        $tipo="";
       include('conect.php');
    
      
       $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

     $consult = "SELECT ID, TIPO  FROM arhivos WHERE ID=19 ";
     $result = mysqli_query($connect,  $consult );

          while($fila = mysqli_fetch_array($result)){

             $id= $fila['ID'];
             $tipo= $fila['TIPO'];
             //$contenido= $fila['CONTENIDO'];
          }

          //echo "id: ".$id;
	 ?>

<div>
	<img src="/image/<?php echo $id ; ?>" alt="" width="25%">
</div>


</body>
</html>