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

    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-6">
                <a href="inicio.php" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Tech</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">com</span>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-right">
                <p class="m-0">Servicio al ciente</p>
                <h5 class="m-0">2057-4890</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">

            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="inicio.php" class="nav-item nav-link active">Inicio</a>
                            <a href="shop.php" class="nav-item nav-link">Productos</a>

                            <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                            <a href="cart.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="userOn.php" class="btn px-0 ml-3">
                                <i class="fas fa-user text-primary"></i>
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    
    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; text-align: center;">Datos de Inventario</h5>


<table class="table table-hover table-bordered" id="tablaDetalle">
<thead>
        <tr style="text-align:center; background-color:#DEDEDE">
            <th>ID Producto</th>
            <th>Nombre Producto</th>
            <th>Precio Producto</th>
            <th>Descripción</th> 
            <th>Acciones</th>                          
        </tr>
    </thead>
    <tbody>
        <?php
            ListarProductos();
        ?>
    </tbody>
    </table>
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
