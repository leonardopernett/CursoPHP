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
<h1>Registro de Artículos</h1>
<form name="form1" method="post" action="insert_PDO.php">
  <table border="0" align="center">
    <tr>
      <td>Código Artículo</td>
      <td><label for="c_art"></label>
      <input type="text" name="codigo" id="c_art"></td>
    </tr>
    <tr>
      <td>Sección</td>
      <td><label for="seccion"></label>
      <input type="text" name="seccion" id="seccion"></td>
    </tr>
    <tr>
      <td>Nombre artículo</td>
      <td><label for="n_art"></label>
      <input type="text" name="nombre" id="n_art"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio"></td>
    </tr>
    <tr>
      <td>cantidad</td>
      <td><label for="cantidad"></label>
      <input type="text" name="cantidad" id="precio"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>

<h1>BORRAR REGISTRO</h1>
<form name="form1" method="post" action="delete_PDO.php">
  <table border="0" align="center">
    <tr>
      <td>Código Artículo</td>
      <td><label for="c_art"></label>
      <input type="text" name="codigo" id="c_art"></td>
    </tr>
    <tr>
     
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>




</body>
</html>