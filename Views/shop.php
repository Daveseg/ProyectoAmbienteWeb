<?php 
    include_once 'layout.php';
    include_once "../Controllers/productoController.php";
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
    

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class=" position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">FILTRAR POR PRECIO</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form id="filter-form" name='filter-form' method='post'>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" class="custom-control-input price-filter" id="all_price"  name="txt_price" value="Todos">
                            <label class="custom-control-label" for='all_price'>Todos los precios</label>
                            
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" class="custom-control-input price-filter" id="txt_price-1" name="txt_price"  value="₡0 - ₡50000">
                            <label class="custom-control-label" for="txt_price-1">₡0 - ₡50000</label>
                            
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" class="custom-control-input price-filter" id="txt_price-2" name="txt_price"  value="₡50000 - ₡100000">
                            <label class="custom-control-label" for="txt_price-2">₡50000 - ₡100000</label>
                            
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" class="custom-control-input price-filter" id="txt_price-3" name="txt_price" value="₡100000 - ₡150000">
                            <label class="custom-control-label" for="txt_price-3">₡100000 - ₡150000</label>
                            
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" class="custom-control-input price-filter" id="txt_price-4" name="txt_price"  value="₡150000 - ₡200000">
                            <label class="custom-control-label" for="txt_price-4">₡150000 - 200000</label>
                            
                        </div>
                        
                    </form>
                </div>
                <!-- Price End -->
                
                
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            
                            
                        </div>
                    </div>
                    <?php


                        FiltroProductos();
                    ?>
                    
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


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

<script>

const radioButtons = document.querySelectorAll('input[name="txt_price"]');

radioButtons.forEach(radio => {
  radio.addEventListener("change", () => {
    document.getElementById("filter-form").submit();
  });
});
</script>