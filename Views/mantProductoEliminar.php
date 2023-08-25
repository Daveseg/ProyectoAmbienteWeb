<?php    
    include_once "../Controllers/productoController.php";
    include_once "layout.php";
    $valorQ = $_GET["q"];
    EliminarProducto($valorQ);
?>
