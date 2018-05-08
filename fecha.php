<?php 
    
    function fecha(){
         
         $hora = date("H");
       
    if ($hora<12)
    {
      echo "buenas dias";
    }else if($hora>=12){
      echo "buenas tardes";
    }else if($hora>19){
      echo "buenas noche";
    }
}
     fecha();


  ?>