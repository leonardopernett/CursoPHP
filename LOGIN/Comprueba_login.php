<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php 
      
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
                //en nombre ver es un nombre cualquiera y user es del formulario 
                 $_SESSION['ver'] = $_POST['user'];

            	 header('Location: usuarios_registrado.php');
            }else{
              
            	header('Location: sistema_login.php');

            }

                    
          $resultado->closeCursor();


       }catch(Exception $e){
          
          die("error".$e->getMessage());
       }finally{

       	$base = null;
       }


	 ?>
	
</body>
</html>