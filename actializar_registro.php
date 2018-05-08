<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>actualizar registro nombre</h1>
<form name="form1" method="get" action="UPDATE.php">
  <table border="0" align="center">
    <tr>
      <td>Nombre anterior</td>
      <td><label for="c_art"></label>
      <input type="text" name="nombre_old" id="c_art"></td>
    </tr>
   
    <tr>
      <td>Nombre nuevo</td>
      <td><label for="n_art"></label>
      <input type="text" name="nombre_new" id="n_art"></td>
    </tr>

    <tr>
      <td>repetir Nombre</td>
      <td><label for="n_art"></label>
      <input type="text" name="nombre_new" id="n_art"></td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="eliminar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>