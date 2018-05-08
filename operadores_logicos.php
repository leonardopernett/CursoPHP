<?php


$var1 = false;
$var2 = true;
$res = $var1  and  $var2 ;

if($res == false){
    echo "correcto"."<br>";
}else{
    echo "incorrecto"."<br>";

}


$e = false || true;

// La constante false es asignada a $f antes de que suceda la operación "or"
// Actúa como: (($f = false) or true)
$f = false and true;

var_dump($e, $f);


?>
?>