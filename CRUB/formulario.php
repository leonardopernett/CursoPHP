<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<body>


<?php 
  
  include("conexion.php");

 //----------------- PAGINACION --------------------------------

       $tam_pagina = 5;

          if(isset($_GET['pagina'])){
              
              if ($_GET['pagina']==1){
                 
                 header('location: formulario.php');

              }else {
 
                   $pagina = $_GET['pagina'];
               }
                 
                 
          }else {

             $pagina= 1;
          }


          $empezar_desde = ($pagina - 1) * $tam_pagina ;
          
          $sql_limit= "SELECT * FROM DATOS_USUARIOS";
          
          $resultado = $base->prepare($sql_limit);
          $resultado->execute();
          $num_fila = $resultado->rowCount();

          $total_pagina =  ceil($num_fila / $tam_pagina);

//----------------- WND PAGINACION-------------------------------------

// 

// ------------------ SELECT------------------------------------------
  $resultado = $base->prepare("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde,  $tam_pagina");
  $resultado->execute();
  $registro = $resultado->fetchAll(PDO::FETCH_OBJ);

    

    if (isset($_POST['cr'])) {
        
        $nombre = $_POST['Nom'];
        $apellido = $_POST['Ape'];
        $direccion = $_POST['Dir'];

// ------------------ END SELECT------------------------------------------

//

// ------------------ INSERT------------------------------------------        
        $resultado = $base->prepare("INSERT INTO DATOS_USUARIOS (NOMBRE, APELLIDO, DIRECCION) VALUE (:nom, :ape, :dir)");

         $resultado->execute(array(':nom'=>$nombre,
          'ape'=>$apellido,':dir'=>$direccion));
         header('location: formulario.php');
        
    }

// ------------------ END INSERT ------------------------------------------

 ?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
<?php foreach ($registro as $persona){ ?>
    <tr>
      <td><?php echo $persona->ID ?> </td>
      <td><?php echo $persona->NOMBRE; ?></td>
      <td><?php echo $persona->APELLIDO; ?></td>
      <td><?php echo $persona->DIRECCION; ?></td>
 
      <td class="bot"><a href="delete.php?id=<?php echo $persona->ID; ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $persona->ID; ?> & nom=<?php echo $persona->NOMBRE;  ?> & ape=<?php echo $persona->APELLIDO; ?> & dir=<?php echo $persona->DIRECCION; ?>"><input type='button' name='up' id='up' value='Editar'></a></td>
    </tr>

<?php } ?>


<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado' required></td>
      <td><input type='text' name='Ape' size='10' class='centrado' required></td>
      <td><input type='text' name=' Dir' size='10' class='centrado' required></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
</tr>  
<tr>
  <td disabled></td>
  <td></td>
   <td>
      <?php 
          for ($i=1; $i <= $total_pagina ; $i++) { 
           
           echo "<a href='?pagina=".$i. "'>". $i." </a> "; 
          
          } 
       ?>
   </td>
   <td></td>
</tr>
  </table>
  </form>
</body>
</html>