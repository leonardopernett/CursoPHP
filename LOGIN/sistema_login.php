<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		 
		 fieldset {
		 	
		 }

		 table {
		 	margin: auto;
		 	width: 500px;
		 	background: #FDC40A;
		 	border: 2px solid red;

		 }

		 table td {
		 	padding:  10px;
		 }



		 h1 {
		 	text-align: center;
		 }

		 table td input[type=submit]{
		 	padding: 5px;
		 	border-radius: 5px;
		 	cursor: pointer;
		 	font-size: 12px;
		 	font-family:  Arial, Helvetica, sans-serif;
		 }



	</style>
</head>
<body>
	
<h1>Ingresar</h1>

	<form action="Comprueba_login.php" method="post" >
	<table>
	   <tr>
		  <td><label>Usuario<input type="text" name="user" value=""></label></td>
	  </tr>
	   <tr>
		  <td><label>Password<input type="password" name="password" value=""></label></td>
	  </tr>
	   <tr>
		  <td><input type="submit" name="enviar" value="Ingresar"></td>
	  </tr>
	<table>			
		
	</form>
	
	<h1>registrarse gratis</h1>
		<form action="Registro_login.php" method="post" >
	<table>
	   <tr>
		  <td><label>Usuario<input type="text" name="user" value=""></label></td>
	  </tr>
	   <tr>
		  <td><label>Password<input type="password" name="password" value=""></label></td>
	  </tr>
	   <tr>
		  <td><input type="submit" name="enviar" value="registrar"></td>
	  </tr>
	<table>			
		
	</form>










</body>
</html>