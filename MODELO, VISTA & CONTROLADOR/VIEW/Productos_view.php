<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<style type="text/css">
		td{
			border:  1px dotted #ff0000;
		}
	</style>
</head>
<body>

    <table>
    	<tr>
    		<td>Nombre del Articulo</td>
    		
    	</tr>

    	<tr>
    		<td>
    			<?php 
  
  foreach ($matriz_producto  as $registro) {
  	echo $registro['NOMBRE']."<br>";
  }




   ?>	
    		</td>
    	</tr>
    </table>

  
</body>
</html>