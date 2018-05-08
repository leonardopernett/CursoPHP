<?php

 function lorem(){
    //valores 
   return  'Lorem ipsum, dolor sit amet consectetur 
    adipisicing elit. Dicta, qui. Repellendus 
    alias, quo quae earum dolorum libero totam
     impedit distinctio iure, eos consequatur? 
     Nisi optio rerum harum repudiandae aspernatur ratione?';
}


function promedio($num1, $num2){
    return ($num1 + $num2)  / 2;
}

//constante 
// define('nombre','andres');
// echo nombre;
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

<section>
  <p> <?php echo lorem();  ?> </p>
   <h2>El promeido de estudiantes es: <?php  echo promedio(3,10);  ?></h2>
</section>

<footer>
  <h2>Todos Los Derechos Reservados <?php  echo date('Y');?></h2>
</footer>


<?php

define("nombre","Leonardo Pernett, profe",TRUE);
echo nombre. "<BR>";
echo NOMBRE."<BR>";


// define('animales',array(

//     "perro",
//     "gato",
//     "mico"

// ));

// echo animales[1];

define('ANIMALES', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES[1]; // muestra "gato"
?>


</body>
</html>