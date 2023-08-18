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
    
    <?php 
        MostrarHeader();
    ?>
<div class="container-fluid pb-3">
    <a class="btn btn-secondary" href="javascript:history.go(-1)">
        <i class="fa fa-arrow-left"></i> Volver
    </a>
</div>
<h1 class=" position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Computadoras</span></h2>
    <?php
                        ConsultarCompu();
                    ?>

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