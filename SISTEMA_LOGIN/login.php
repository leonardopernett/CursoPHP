<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		 
		 fieldset {
		 	
		 }

		 table {
		 	margin: auto;
		 	width: 500px;
		 	background: #FDC40A;
		 	border: 2px solid red;

		 }

		 table td {
		 	padding:  10px;
		 }
         



		 h1 {
		 	text-align: center;
		 }

		 table td input[type=submit]{
		 	padding: 5px;
		 	border-radius: 5px;
		 	cursor: pointer;
		 	font-size: 12px;
		 	font-family:  Arial, Helvetica, sans-serif;
		 }

		 strong {
		 	color: red;
		 	position: absolute;
		 	top:75px ;
		 	display: inline-block;
		 	left: 400px;
		 }



	</style>
</head>
<body>

<?php 
// SI PULSAMOS EL BOTON DE ENVIAR EJECUTE 
     if(isset($_POST['enviar'])){ 
       try {

          $base = new PDO('mysql:host=localhost; dbname=usuarios','root','');
          $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          //$base->set_charset();
          $base->exec("SET CHARACTER SET utf8");
           

           $sql ="SELECT * FROM LOGIN WHERE USUARIO = :user AND PASSWORD = :password";

           //$resultado = $base->query($sql);
           $resultado = $base->prepare($sql);

           $user = htmlentities(addslashes($_POST['user']));
           $password =htmlentities(addslashes( $_POST['password']));
            

            $resultado->bindValue(':user',$user);
            $resultado->bindValue(':password',$password);

            $resultado->execute();

            $numero_registro = $resultado->rowCount();


            if ($numero_registro != 0){
                
                  //abrimmos la session
                 session_start();
                //en nombre usuario es un nombre cualquiera y user es del formulario 
                 $_SESSION['usuario'] = $_POST['user'];

            	//header('Location: login.php');
            }else{
              
               //header('Location: sistema_login.php');
                echo "<strong>usuario o contraseña incorrectas  </strong>";
            }

                    
          $resultado->closeCursor();


       }catch(Exception $e){
          
          die("error".$e->getMessage());
       }finally{

       	$base = null;
       }

}
    
	 ?>	
<!-- FIN DE LA CONEXION  -->
  

  <?php 
    

    if(!isset($_SESSION['usuario'])){
     
       include('formulario.html');

    }else{

    	echo "usuario: ".$_POST['user']."\n";
    	echo "<a href='cierre_session.php'>Cerrar Seccion</a>";

    }
    


   ?>



<h1>CONTENIDO DE LA PAGINA </h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
</body>
</html>