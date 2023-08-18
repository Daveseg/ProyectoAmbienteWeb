<?php
    include_once '../Models/productoModel.php';
    include_once 'utiles.php';
    
    

    function ConsultarPromo() 
    {
        $respuesta = ConsultarPromosM();

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 ">
            <form role="form" class="text-start" action="" method="post">
            <div class="row justify-content-center">';
        
        while ($fila = mysqli_fetch_array($respuesta)) {
            echo '<div class="col-md-4 col-lg-3 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i></a>
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
<<<<<<< Updated upstream
=======
    function ConsultarCompu() 
    {
        $respuesta = ConsultarComM();

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 ">
            <form role="form" class="text-start" action="" method="post">
            <div class="row justify-content-center">';
        
        while ($fila = mysqli_fetch_array($respuesta)) {
            echo '<div class="col-md-4 col-lg-3 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i></a>
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
    function ConsultarCel() 
    {
        $respuesta = ConsultarCelM();

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 ">
            <form role="form" class="text-start" action="" method="post">
            <div class="row justify-content-center">';
        
        while ($fila = mysqli_fetch_array($respuesta)) {
            echo '<div class="col-md-4 col-lg-3 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i></a>
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
    function ConsultarPer() 
    {
        $respuesta = ConsultarPerM();

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 ">
            <form role="form" class="text-start" action="" method="post">
            <div class="row justify-content-center">';
        
        while ($fila = mysqli_fetch_array($respuesta)) {
            echo '<div class="col-md-4 col-lg-3 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i></a>
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
    function ConsultarMon() 
    {
        $respuesta = ConsultarMonM();

        if (!$respuesta) {
            echo 'Error';
        }else {
            
            echo '<div class="container-fluid pt-5 ">
    <form role="form" class="text-start" action="" method="post">
    <div class="row justify-content-center">';

while ($fila = mysqli_fetch_array($respuesta)) {
    echo '<div class="col-md-4 col-lg-3 pb-1">
    <div class="product-item bg-light mb-4">
        <div class="product-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="'. $fila["rutaImagen"] .'" alt="" />
            <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i></a>
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

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    echo '<div class="col-md-3 mb-4">
    <div class="product-item bg-light">
        <div class="product-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="'.$fila["rutaImagen"].'" alt=" '.$fila["Nombre"].'" />
            <div class="product-action" >
                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                
<<<<<<< Updated upstream
                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i> </a>
=======
                <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i> </a>
>>>>>>> Stashed changes

            </div>
        </div>
        <div class="text-center py-3">
            <a class="h6 text-decoration-none text-truncate" href="">'.$fila["Nombre"].'</a>
            <h5 class="mt-2">₡ '. $fila["Precio"] .'</h5>
        </div>
    </div>
</div>';
<<<<<<< Updated upstream

=======
}
>>>>>>> Stashed changes

echo '</div>
</form>
</div>';

        }
            
        
    }

<<<<<<< Updated upstream
=======
    function ConsultarProductos($idPro)
    {
        $respuesta = ConsultarProductosM($idPro);
        return mysqli_fetch_array($respuesta);

    }

>>>>>>> Stashed changes
    

?>