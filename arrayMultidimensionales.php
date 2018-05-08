
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
       $alimentos = array("frutas" => array( "tropical"  =>   "kiwi",
                                             "citrico"   =>   "mandarina",
                                             "otros"     =>   "manzana"),

                           "leche" => array( "animal"    =>   "vaca",
                                             "vegetal"   =>   "coco"),

                           "carne" => array( "vacuno"    =>   "lomo",
                                             "porcino"   =>   "pata"));

        //echo $alimentos["carne"]["vacuno"];                                   

        foreach ($alimentos as $clave_alimento=>$alimen){
            
            echo $clave_alimento. ": <br>";

            while(list($clave,$valor)=each($alimen)){
                 
                echo $clave.  " : " .$valor. "<br>";
               
            }

            // foreach($alimen as $clave_alimento2=>$alimen2){
            //     echo $clave_alimento2.  " : " .$alimen2. "<br>";
            // }
            echo "<br>";
                
        }

    ?>
    
</body>
</html>


