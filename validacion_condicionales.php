<?php

//$

if( isset($_POST['enviando']) )
{

    $pass =  $_POST['password'];
    $nombre =  $_POST['nombre_usuario'];
     
      
//     if( $$edad <= 17)
//    {
//        echo "eres menor de edad";

//    }else{
        
//        echo "eres mayor de edad";
//    }




//CONDICION TERNARIO


 //echo $edad <18 ? $nombre."\n"."eres menor de edad, lo siento " : $nombre."\n"."eres mayor de edad, felicitaciones";
  
//   echo $pass == "123" && $nombre == "leo" ? "bienvenido "."\n".$nombre : "error de autentificacion";

//-----------------------------------------------------   

//CONDICION SWITCH

// switch ($nombre) {
         
//         case "juan":
//            ECHO "USUARIO ACTUALIZADO, HOLA JUAN";
//          break;

//          case "maria":
//          ECHO "USUARIO ACTUALIZADO, HOLA MARIA";
//        break;

//        case "pedro":
//            ECHO "USUARIO ACTUALIZADO, HOLA PEDRO";
//          break;
         
//          default:
//          echo "USUARIO NO AUTORIZADO";

//      }

    switch (true) {
         
        case $nombre =="juan" && $pass=="123":
           ECHO "USUARIO ACTUALIZADO, HOLA JUAN";
         break;

         case $nombre =="maria" && $pass=="1234":
         ECHO "USUARIO ACTUALIZADO, HOLA MARIA";
       break;

       case $nombre =="pedro" && $pass=="12345":
           ECHO "USUARIO ACTUALIZADO, HOLA PEDRO";
         break;
         
         default:
         echo "USUARIO NO AUTORIZADO";

     }


}


?>