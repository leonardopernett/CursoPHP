
<?php 
   require_once('MODEL/Productos_model.php');


    $producto = new Productos_model();
    $matriz_producto = $producto->getProductos();



   require_once('VIEW/Productos_view.php');

    



   

 ?>