<?php
    //$animales = ['perro','gato','mico'];
    //$animales =  array('perro','gato','mico');
    
    echo date('D','Y');
    
    $ciudad[0] = 
    [
        'nombre' => 'bogota',
        'poblacion'=> 100
        
    ];
    
    $ciudad[1] = 
    [
        'nombre' => 'cartagena',
        'poblacion'=> 1000
        
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Ciudades de Colombia</h1>
    <?php 
 
    // for($i=0;$i<=1;$i++)
    // {
    //     echo "<h2> el nombre es: ".$ciudad[$i]['nombre']."</h2>";
    //     echo "<h2> la poblacion es: ".$ciudad[$i]['poblacion']."</h2>"; 
    //     echo "<hr>";
    // }

    foreach($ciudad as $valor) {
        echo "<h2> el nombre es: ".$valor['nombre']."</h2>";
            echo "<h2> la poblacion es: ".$valor['poblacion']."</h2>"; 
            echo "<hr>";
    }
   
    ?> 
    </h1>

</body>
</html>