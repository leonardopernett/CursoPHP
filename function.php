<?php

  function  frase_mayuscula($frase, $convertir=true){
 
    $frase = strtolower($frase);


     if($convertir == true){

         $resultado = ucwords($frase);
     }else{

        $resultado = strtoupper($frase);
     }

     return $resultado;

  }


echo frase_mayuscula("esto es una frase")."<br>";



// funcion por referencia 

function  incremento(&$valor){
    $valor++;
    return $valor ;
}

$num = 5;

echo incremento($num)."<br>";
echo $num."<br>";


//___________________________________________


function  cambiar(&$palabra){
    $palabra = strtolower($palabra);
    $palabra = ucwords($palabra);
    return $palabra;
    
}

$cadena = "hOlA mUnDo";


echo cambiar($cadena)."<br>";
echo $cadena;
?>