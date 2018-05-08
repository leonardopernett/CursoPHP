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
       
       include('conect.php');

      
       $connect = mysqli_connect($db_host,  $db_user, $db_pass);
        mysqli_set_charset($connect, "utf8");
        mysqli_select_db(  $connect, $db_base) or die("no se pudo conecta la DDBB");

     $consult = "SELECT FOTO FROM PRODUCTOS WHERE CODIGO='AR06' ";
     $result = mysqli_query($connect,  $consult );

          while($file = mysqli_fetch_array($result)){

              $ruta = $file['FOTO'];
          }
	 ?>

<div>
	<img src="/image/<?= $ruta ; ?>" alt="" width="25%">
</div>


</body>
</html>