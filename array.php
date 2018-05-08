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
  #array asociativo 
  $datos = array
    (   "nombre" => "juan",
      "apellido" =>"pernett",
      "edad" => 15
    
    
   );

   foreach($datos as $clave => $valor){
       echo "a $clave le corresponde $valor <br>";
   }
  
   $datos['edad']=16;
   echo "<br>";




   //---------------------------------------
   //array indexado
 
    $semana = array('lunes','martes','miercoles');

    //   foreach($semana as $valor){
    //      echo "los dias de descanzo son $valor <br>";
    //   }
      
      for ($i=0; $i < count($semana) ; $i++) { 
        echo "los dias de descanzo son " . $semana[$i]. "<br>";
      }

    // $semana[] ="jueves"; agregar un solo array al final 
     
    array_push($semana,"jueves","viernes","sabado","domingo");// agregra multiple datos 

    echo "<br>";

     for ($i=0; $i < count($semana) ; $i++) { 
        echo "los dias de descanzo son " . $semana[$i]. "<br>";
      }
     
     
      


 
    // if (is_array($semana)){
    //     echo "es un array ";
    // }else{
    //     echo " no es un array";
    // }

?>
    
</body>
</html>