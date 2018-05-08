<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
		

	//Compra_vehiculo::$ayuda = 10000;

	Compra_vehiculo::descuento();

	$compra_antonio = new Compra_vehiculo("compacto");
	$compra_antonio->climatizador()."<br>";
	$compra_antonio->tapiceria_cuero("blanco");
	echo  $compra_antonio->precio_final()."<br>";
	

	$compra_ana = new Compra_vehiculo("compacto");
    $compra_ana->climatizador()."<br>";
	$compra_ana->tapiceria_cuero("beige");
	echo  $compra_ana->precio_final();
?>
</body>
</html>