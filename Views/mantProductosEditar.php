<?php    
    include_once "../Controllers/productoController.php";
    include_once "layout.php";
    $valorQ = $_GET["q"];
    $datos = ConsultarProductos($valorQ);
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

        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Actualizar Producto</h5>

        <input type="hidden" name="txtIdUsuario" value="<?php echo $datos["IDPro"] ?>">

        <label>ID Producto</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtIDProducto" required name="txtIDProducto" type="text" class="form-control"
                placeholder="ID Producto" style="background-color:#DEDEDE" value="<?php echo $datos["IDPro"] ?>">
        </div>


        <label>Nombre Producto</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtNombre" required name="txtNombre" type="text" class="form-control" placeholder="Nombre"
                value="<?php echo $datos["Nombre"] ?>">
        </div>


        <label>Precio Prodcuto</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtPrecio" required name="txtPrecio" type="text" class="form-control" placeholder="Precio"
                value="<?php echo $datos["Precio"] ?>">
        </div>

        <label>Descripción Producto</label>
        <textarea id="txtDescripcion" required name="txtDescripcion" class="form-control" placeholder="Descripcion"
            style="resize: vertical; overflow: auto;"> <?php echo $datos["Descripcion"] ?></textarea>

        <label>Tipo de Producto</label>
        <div class="input-group input-group-outline my-2">
            <select id="txtTipo" required name="txtTipo" class="form-control" value="<?php echo $datos["IDTipoP"] ?>">
                <?php
                    ConsultarTipoProductosEdit($datos["IDTipoP"]);
                ?>
            </select>
        </div>

        <label>Proveedor</label>
        <div class="input-group input-group-outline my-2">
            <select id="txtProveedor" required name="txtProveedor" class="form-control"
                value="<?php echo $datos["IDProveedor"] ?>">
                <?php
                    ConsultarProveedoresEdit($datos["IDProveedor"])
                ?>
            </select>

        </div>

        <label>Sucursal</label>
        <div class="input-group input-group-outline my-2">
            <select id="txtSucursal" required name="txtSucursal" class="form-control"
                value="<?php echo $datos["IDSucursales"] ?>">
                <?php
                    ConsultarSucursalesEdit($datos["IDSucursales"])
                ?>
            </select>
        </div>

        <label>Ruta de imagen del Producto</label>
        <div class="input-group input-group-outline my-2">
            <input id="txtRuta" required name="txtRuta" type="file" class="form-control"
                placeholder="Ruta de la imagen del producto" value="<?php echo $datos["rutaImagen"] ?>">
        </div>



        <div class="text-center my-4">
            <button id="btnActualizarProducto" name="btnActualizarProducto" type="submit"
                class="btn btn-primary">Actualizar</button>
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