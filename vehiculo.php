<?php

class Coche {
    protected $ruedas;
    var $color;
    protected $motor;
  
    function Coche(){
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

  function getRuedas(){

    return $this->ruedas;
  }

  function get_Motor(){
      return $this->motor;
  }

 function arrancar(){
     echo "estoy arrancando mi  coche";
 }

 function girar(){
     echo "estoy girando <br>";
 }



 function frenar(){
    echo "estoy frenando <br>";
 }

 function establecer_color($color_coche){
       $this->color = $color_coche;
       echo "el color de este coche es ".$color_coche;
 }

}

//------------------------------------------------------

class Camion extends Coche {
    
  
    function Camion(){
        $this->ruedas = 8;
        $this->color = "";
        $this->motor = 1600;
    }

 
    function establecer_color($color_camion){
        $this->color = $color_camion;
        echo "el color de este camion es ".$color_camion;
  }

  function arrancar(){

    parent::arrancar();
    echo "arraque mi camion";
  }


}


?>