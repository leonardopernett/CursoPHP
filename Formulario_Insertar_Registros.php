<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>
			table{
				background-color:#FFC;
				border:1px solid #FF0000;
				margin:auto;
				padding:25px;
			}
		h1{
			width:50%;
			margin:25px auto;
			
			text-align:center;
			margin-bottom:50px;
		}
		
		body{
			background-color:#FC9;
		}
		
		#boton{
			padding-top:25px;
			
		}
		
		</style>
    </head>
    
    <body>
    <h1> Alta de artículos nuevos</h1>
    
        <form action="resultados_insertar_registros.php" method="get">
        <table>
        <tr><td>
            <label>Código:</label></td><td> <input type="text" name="codigo"></td></tr>
            <tr><td><label>Sección:</label></td><td><input type="text" name="seccion"></td></tr>
          <tr><td>  <label>Nombre </label> </td><td><input type="text" name="nombre"></td></tr>
          <tr><td>  <label>Precio: </label></td><td><input type="text" name="precio"</td></tr>
           <tr><td> <label>cantidad: </label></td><td><input type="text" name="cantidad"></td></tr>
           
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="¡Dale!"></td></tr>
        </table>
        </form>

                    <h3 style="text-align: center;">Actualizar registro</h3>
        <form action="UPDATE_REGISTRO.php" method="get">
        <table>
        <tr><td>
            <label>Código:</label></td><td> <input type="text" name="codigo"></td></tr>
            <tr><td><label>Sección:</label></td><td><input type="text" name="seccion"></td></tr>
          <tr><td>  <label>Nombre </label> </td><td><input type="text" name="nombre"></td></tr>
          <tr><td>  <label>Precio: </label></td><td><input type="text" name="precio"</td></tr>
           <tr><td> <label>cantidad: </label></td><td><input type="text" name="cantidad"></td></tr>
           
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="¡Dale!"></td></tr></table>
           
           </form>

           <h3 style="text-align: center;">ELIMINAR REGISTRO</h3>
        <form action="delete_registro.php" method="get">
        <table>
        <tr><td>
        <label>Código:</label></td><td> <input type="text" name="codigo"></td></tr>
         <tr><td>  
         <label>Nombre </label> </td><td><input type="text" name="nombre"></td></tr>
         
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="¡Dale!"></td></tr>

        </table>
        </form>
    
    </body>
    
</html>