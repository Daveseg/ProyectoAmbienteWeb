<?php
    include_once '../Models/productoModel.php';
    include_once 'utiles.php';
    
    

    function ConsultarPromo() 
    {
        $respuesta = ConsultarPromosM();

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 pb-3">
    <form role="form" class="text-start" action="" method="post">
    <div class="row px-xl-5">';

while ($fila = mysqli_fetch_array($respuesta)) {
    echo '<div class="col pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">'.  $fila["Nombre"] .'</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5> ₡'.  $fila["Precio"] .'</h5>
                </div>
            </div>
        </div>
    </div>';
}

echo '</div>
</form>
</div>';

        }
            
        
    }
    function FiltroProductos(){
        $categoria=@$_POST["txt_price"];

        $respuesta = FiltroProductosM($categoria);

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 pb-3">
    <form role="form" class="text-start" action="" method="post">
    <div class="row px-xl-5">';

while ($fila = mysqli_fetch_array($respuesta)) {
    echo '<div class="col pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">'.  $fila["Nombre"] .'</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5> ₡'.  $fila["Precio"] .'</h5>
                </div>
            </div>
        </div>
    </div>';
}

echo '</div>
</form>
</div>';

        }
            
        
    }

    

?>