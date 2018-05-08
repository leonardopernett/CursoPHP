<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		table{
			margin: auto;
			width: 400px;
			border: 2px dotted red;
		}
		td{
			padding: 15px;
		}
	</style>
</head>
<body>
	<form action="datos_archivos.php" method="post" enctype="multipart/form-data">
	<table>
      <tr>
      	  <td><label for="">Archivos</label></td>
      	  <td><input type="file" name="archivo" size="20"></td>
      </tr>

      <tr>
      	  <td colspan="2" style="text-align: center"><input type="submit" name="imagen" value="enviar Archivos" size="20"></td>
      </tr>

		</table>
		
	</form>
</body>
</html>