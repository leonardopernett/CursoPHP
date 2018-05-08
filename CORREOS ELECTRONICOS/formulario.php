<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<style type="text/css" media="screen">
		table{
			margin:  auto;
			border: 2px solid red;
			margin-top: 20px;
			padding: 10px;
		}

		table td{
			padding: 10px;

		}
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
   <h2>CONTACTENOS</h2>

	<form action="enviar.php" method="post" accept-charset="utf-8">
		<table>
			<tr>
				<td><label for="">Nombre *</label></td>
				<td><input type="text" name="nombre" required></td>
			</tr>
			<tr>
				<td><label for="">correo *</label></td>
				<td><input type="email" name="correo" required></td>
			</tr>

			<tr>
				<td><label for="">numero de telefono *</label></td>
				<td><input type="tel" name="telefono" required></td>
			</tr>
			<tr>
			<tr>
				<td><label for="">asunto *</label></td>
				<td><input type="text" name="asunto" required></td>
			</tr>
			<tr>
				<td><label for="">comentario *</label></td>
				<td><textarea name="comentario" rows="5" cols="21" required></textarea></td>
			</tr>

			<tr>
				
				<td rowspan="4"><input type="submiT"   value="enviar" name="enviar"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>