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
    <?php
    if(isset($_POST["MsjPantalla"]))
    {
        echo '<div style="text-align:center" class="alert alert-light" role="alert">' . $_POST["MsjPantalla"] . '</div>';
    }
    ?>
    <form role="form" class="text-center mx-auto" style="max-width: 25%;" action="" method="post">

        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Agregar Nuevo Producto</h5>

        <label>Nombre</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtNombre" required name="txtNombre" type="text" class="form-control"
                placeholder="Nombre del producto">
        </div>


        <label>Precio</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtPrecio" required name="txtPrecio" type="number" class="form-control"
                placeholder="Precio del producto">
        </div>

        <label>Descripción</label>
        <textarea id="txtDescripcion" required name="txtDescripcion" class="form-control"
            placeholder="Descripción del producto" style="resize: vertical; overflow: auto;"></textarea>

        <label>Tipo de Producto</label>
        <div class="input-group input-group-outline my-2">
            <select id="txtTipo" required name="txtTipo" class="form-control">
                <?php
        ConsultarTipoProductos();
    ?>
            </select>
        </div>

        <label>Proveedor</label>
        <div class="input-group input-group-outline my-2">
            <select id="txtProveedor" required name="txtProveedor" class="form-control">
                <?php
        ConsultarProveedores()
    ?>
            </select>

        </div>

        <label>Sucursal</label>
        <div class="input-group input-group-outline my-2">
            <select id="txtSucursal" required name="txtSucursal" class="form-control">
                <?php
        ConsultarSucursales()
    ?>
            </select>
        </div>

        <label>Ruta de imagen del Producto</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtRuta" required name="txtRuta" type="file" class="form-control"
                placeholder="Ruta de la imagen del producto">
        </div>


        <div class="text-center my-4">
            <button id="btnRegistroProducto" name="btnRegistroProducto" type="submit" class="btn btn-primary">Agregar
                Producto</button>
        </div>



    </form>
    <div class="d-flex justify-content-center align-items-center">
        <a href="mantProductos.php" class="btn btn-dark">Regresar</a>
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