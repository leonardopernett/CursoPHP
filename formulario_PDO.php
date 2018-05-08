<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">


<style type="text/css" media="screen">
	 
	 table {
	 	margin: auto;
	 	background: #ffc;
	 	width: 350px;
	 	border: 2px solid red;
	 }

	 table td
	 {
	 	padding: 5px;
	 } 
	 table td input[type=submit]{
	 	margin-left: 100%;
	 }

</style>

</head>
<body>
    
    <form action="connect_pdo.php" method="get">
    	<table>
    		<tr>
    			<td><label for="buscar"> Nombre Articulo: </label></td> 
                <td><input type="text" name="nombre" required></td>
    		</tr>

    		<tr>
    			<td><label for="buscar"> Codigo Articulo: </label></td> 
                <td><input type="text" name="codigo" required></td>
    		</tr>
    	     
    	     <tr>
    	     	<td><input type="submit" name="enviar" value="DALE"></td>
    	     </tr>

    	</table>

    </form>

</body>
</html>