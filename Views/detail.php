<?php include_once 'layout.php' ;
include_once '../Controllers/productoController.php';
$valorQ = $_GET["q"];
$datos = ConsultarProductos($valorQ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php MostrarHead(); ?>
</head>

<body>
    <?php MostrarHeader(); ?>
    <input type="hidden" name="txtIdUsuario" value="<?php echo $datos["IDPro"] ?>">
    <div class="container-fluid pb-3">
    <a class="btn btn-secondary" href="javascript:history.go(-1)">
        <i class="fa fa-arrow-left"></i> Volver
    </a>
</div>


    <div class="container-fluid pb-5">
                <div class="row px-xl-5">
                    <div class="col-lg-5 mb-30">
                        <div id="product-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner bg-light">
                                <div class="carousel-item active">
                                    <img class="w-100 h-100" src="<?php echo $datos["rutaImagen"] ?>" alt="Image">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 h-100" src="<?php echo $datos["rutaImagen"] ?>" alt="Image">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 h-100" src="<?php echo $datos["rutaImagen"] ?>" alt="Image">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 h-100" src="<?php echo $datos["rutaImagen"] ?>" alt="Image">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                                <i class="fa fa-2x fa-angle-left text-dark"></i>
                            </a>
                            <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                                <i class="fa fa-2x fa-angle-right text-dark"></i>
                            </a>
                        </div>
                    </div> 
        
        
        
                    <div class="col-lg-7 h-auto mb-30">
                        <div class="h-100 bg-light p-30">
                            <h3><?php echo $datos["Nombre"] ?></h3>
                            
                            <h3 class="font-weight-semi-bold mb-4">₡ <?php echo $datos["Precio"] ?></h3>
                            <p class="mb-4"><?php echo $datos["Descripcion"] ?></p>
                            
                            
                            <div class="d-flex align-items-center mb-4 pt-2">
                                <div class="input-group quantity mr-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                                    Cart</button>
                            </div>
                            <div class="d-flex pt-2">
                                <strong class="text-dark mr-2">Share on:</strong>
                                <div class="d-inline-flex">
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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