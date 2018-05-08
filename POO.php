
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
        
        include("vehiculo.php");
 

      $renault = new Coche();
      $pegasu  = new Camion();
      //$mazda  = new Coche();
      //$chevrolet = new Coche();
      
  // $renault->girar();

   // echo $renault->ruedas."<br>";
    //$renault->establecer_color("rojo");
    
    echo "el renault tiene " . $renault->getRuedas()." ruedas <br>";
    echo "el pegasu tiene " . $pegasu->getRuedas()." ruedas <br>";

   // $pegasu->frenar()."<br>";
    //$pegasu->arrancar();
    
   echo  $renault->get_motor();
          $pegasu->arrancar();

    ?>
</body>
</html>
