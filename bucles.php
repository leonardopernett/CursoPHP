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
       $var1 = 1;
       
    //    while($var1<6){
    //        echo "estamos utilizando el codigo <br>";
    //        $var1++;
    //    }

    //    echo "hemos salido del bucle";

    //------------------------------------------------
    // do{
    //     echo "estamos utilizando el codigo <br>";
    //     $var1++;

    // }while($var1 < 6);

   //------------------------------------

   for($i=1;$i<=10;$i++){
       
     echo "9 x $i" ." =". 9*$i."<br>";
   
     //    if($i==6){

    //     echo "<p>Hemos salido del bucle</p>";
    //     break;
    //    }
   }
    
   echo "<br>";


   //break termina el bucle 
   //continue salta el bucle 

   for ($i=0; $i <11; $i++) { 
      
    if($i==7){
        echo "eliminamos 5 x 7 del bucle con cotinue <br>";
        continue;
    }

    echo "5 x $i =". 5*$i."<br>";

   
   }


   
   

?>
    
</body>
</html>