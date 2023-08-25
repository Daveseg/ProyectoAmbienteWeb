<?php    
    include_once "../Controllers/productoController.php";
    include_once "layout.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php MostrarHead(); ?>
</head>

<body>

<?php MostrarHeaderModified();?>


    
    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; text-align: center;">Datos de Inventario</h5>


<table class="table table-hover table-bordered" id="tablaDetalle">
<thead>
        <tr style="text-align:center; background-color:#DEDEDE">
            <th>ID Producto</th>
            <th>Nombre Producto</th>
            <th>Precio Producto</th>
            <th>Descripción</th> 
            <th>Editar</th>                          
            <th>Eliminar</th>                          
        </tr>
    </thead>
    <tbody>
        <?php
            ListarProductos();
        ?>
    </tbody>
    </table>
        <div class="d-flex justify-content-center align-items-center">
            <a href="mantNuevoProducto.php" class="btn btn-primary">Agregar Nuevo Producto</a>
        </div>
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <a href="userOn.php" class="btn btn-dark">Regresar</a>
        </div>



    <?php
    MostrarFooter();

    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>