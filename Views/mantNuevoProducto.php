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

    <form role="form" class="text-center mx-auto" style="max-width: 25%;" action="" method="post">

    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Agregar Nuevo Producto</h5>

<label>Nombre Producto</label>
<div class="input-group input-group-outline my-2">
    <input id="txtNombre" required name="txtNombre" type="text" class="form-control" placeholder="Nombre del producto">
</div>


<label>Precio Prodcuto</label>
<div class="input-group input-group-outline my-2">
    <input id="txtPrecio" required name="txtPrecio" type="text" class="form-control" placeholder="Precio del producto">
</div>

<label>Descripción Producto</label>
<textarea id="txtDescripcion" required name="txtDescripcion" class="form-control"
    placeholder="Descripción del producto" style="resize: vertical; overflow: auto;"></textarea>

<label>Tipo Prodcuto</label>
<div class="input-group input-group-outline my-2">
    <input id="txtTipo" required name="txtTipo" type="text" class="form-control" placeholder="Tipo del producto">
</div>  

<label>Proveedor Prodcuto</label>
<div class="input-group input-group-outline my-2">
    <input id="txtProveedor" required name="txtProveedor" type="text" class="form-control" placeholder="Proveedor del producto">
</div>

<label>Sucursal Prodcuto</label>
<div class="input-group input-group-outline my-2">
    <input id="txtSucursal" required name="txtSucursal" type="text" class="form-control" placeholder="Sucursal del producto">
</div>

<label>Ruta de imagen del Prodcuto</label>
<div class="input-group input-group-outline my-2">
    <input id="txtRuta" required name="txtRuta" type="text" class="form-control" placeholder="Ruta de la imagen del producto">
</div>


<div class="text-center my-4">
    <button id="btnRegistroProducto" name="btnRegistroProducto" type="submit" class="btn bg-gradient-primary w-100">Agregar Producto</button>
</div>



</form>
<div class="d-flex justify-content-center align-items-center">
            <a href="mantProductos.php" class="btn">Regresar</a>
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