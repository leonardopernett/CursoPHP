<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$var = strtolower ( "LEONARDO" );
echo $var."\n";

$var2 = "andres";
echo (strtoupper($var2));


function suma($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;

}

echo suma(5,5);







?>
    
</body>
</html>