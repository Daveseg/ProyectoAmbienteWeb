<?php    
    include_once "../Controllers/usuarioController.php";
    include_once "layout.php";

    $valorQ = $_GET["q"];
    $datos = ConsultarUsuario($valorQ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php MostrarHead(); ?>
</head>

<body>

<?php MostrarHeaderModified();?>

 
    <form role="form" class="text-center mx-auto" style="max-width: 25%;" action="" method="post">

<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Actualizar Datos Usuario</h5>

<input type="hidden" name="txtIdUsuario" value="<?php echo $datos["IDUsuario"] ?>">

<div class="input-group input-group-outline my-2">
    <input id="txtIdentificacion" required name="txtIdentificacion" disabled="disabled"
    type="text" class="form-control" placeholder="Identificación" style="background-color:#DEDEDE"
    value="<?php echo $datos["Identificacion"] ?>">
</div>

<div class="input-group input-group-outline my-2">
    <input id="txtNombre" required name="txtNombre" 
    type="text" class="form-control" placeholder="Nombre" style="background-color:#DEDEDE"
    value="<?php echo $datos["Nombre"] ?>">
</div>

<div class="input-group input-group-outline my-2">
    <input id="txtTelefono" required name="txtTelefono" type="text" class="form-control" placeholder="Teléfono"
    value="<?php echo $datos["Telefono"] ?>">
</div>

<div class="input-group input-group-outline my-2">
    <input id="txtDireccion" required name="txtDireccion" type="text" class="form-control" placeholder="Dirección"
    value="<?php echo $datos["Direccion"] ?>">
</div>

<div class="input-group input-group-outline my-2">
    <input id="txtCorreo" required name="txtCorreo" type="email" class="form-control" placeholder="Correo"
    value="<?php echo $datos["Correo"] ?>">
</div>

<div class="text-center my-4">
    <button id="btnActualizarAdm" name="btnActualizarAdm" type="submit" class="btn bg-gradient-primary w-100">Actualizar</button>
</div>

</form>
<div class="d-flex justify-content-center align-items-center">
            <a href="userOn.php" class="btn">Regresar</a>
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