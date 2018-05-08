<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="calculadora.php" method="POST">
<p>

<label for="num1"></label>
<input type="text" name="num1" id="num1">

<label for="num2"></label>
<input type="text" name="num2" id="nu2">

<!-- <label for="operacion">operacion</label> -->

<select name="operacion" id="operacion">
<option value="">suma </option>
<option value="">resta </option>
<option value="">multiplicacion </option>
<option value="">division </option>
<option value="">incremento </option>
<option value="">decremento </option>
</select>

</p>
<p>
    <input type="submit" name="boton" id="boto" value="enviar" >
</p>
</form>


<?php
//$a = array(1, 2, array("a", "b", "c"));
//echo $a[2];
//echo implode(";",$a)."<br>";
//echo pow(2, 3);
//$num1 = 1.253664546;
//echo round($num1,2);
$var = "";

var_dump (isset ($var));



?>

    
</body>
</html>