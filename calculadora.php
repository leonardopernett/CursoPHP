<style>
   
   .mostrar{
       color:red;
       font-size:15px;
   }
</style>

<?php

if (isset($_POST['boton'])){

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    calculadora($operacion);
}


function calculadora($calcular){ 
    global $numero1;
    global $numero2;
    
if(strcmp("suma", $calcular)){
     
     $resultado = ($numero1 + $numero2);
    echo "<p class='mostrar'> el resultado es:" . $resultado . "</p>";

} 
else if(strcmp("resta", $calcular)){
  
    echo " el resultado es: ". ($numero1 - $numero2);

} 
 else if(strcmp("multiplicacion", $calcular)){
   
    echo " el resultado es: ". ($numero1 * $numero2);

} 
else if(strcmp("division", $calcular)){
    
    echo " el resultado es: ". ($numero1 / $numero2);

} 
else if(strcmp("incremento", $calcular)){
    
    $numero1++;
    
    echo " el resultado es: ". $numero1;

} 
else if(strcmp("decremento", $calcular)){
    
    $numero1--;
    echo " el resultado es: ". $numero1;

} 
else if(empty($numero1) && empty($numero2)){
    echo "digite un numero ";
}
}




?>