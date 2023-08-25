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
    echo '<div class="col-md-3 mb-4">
    <div class="product-item bg-light">
        <div class="product-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="'.$fila["rutaImagen"].'" alt=" '.$fila["Nombre"].'" />
            <div class="product-action" >
                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                
                <a class="btn btn-outline-dark btn-square" href="detail.php?q='. $fila["IDPro"] .'"><i class="fa fa-search"></i> </a>

            </div>
        </div>
        <div class="text-center py-3">
            <a class="h6 text-decoration-none text-truncate" href="">'.$fila["Nombre"].'</a>
            <h5 class="mt-2">₡ '. $fila["Precio"] .'</h5>
        </div>
    </div>
</div>';
}

echo '</div>
</form>
</div>';

        }
            
        
    }

    function ConsultarProductos($idPro)
    {
        $respuesta = ConsultarProductosM($idPro);
        return mysqli_fetch_array($respuesta);

    }

    function ConsultarTipoProductos()
    {
        $respuesta = ListarTiposProductosM();
        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {

                echo "<option value=" . $fila["IDTipoP"] . ">" . $fila["Tipo"] . "</option>";
                
            }
        }

    }

    function ConsultarProveedores()
    {
        $respuesta = ListarProveedoresM();
        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {

                echo "<option value=" . $fila["IDProveedor"] . ">" . $fila["Nombre"] . "</option>";
                
            }
        }

    }

    function ConsultarSucursales()
    {
        $respuesta = ListarSucursalesM();
        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {

                echo "<option value=" . $fila["IDSucursales"] . ">" . $fila["Nombre"] . "</option>";
                
            }
        }

    }

    function ConsultarTipoProductosEdit($val)
    {
        $respuesta = ListarTiposProductosM();
        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {
                if($fila["IDTipoP"]==$val)
                {
                    echo "<option value=" . $fila["IDTipoP"] . " selected>" . $fila["Tipo"] . "</option>";
                }
                else{
                    echo "<option value=" . $fila["IDTipoP"] . ">" . $fila["Tipo"] . "</option>";
                }                
            }
        }

    }

    function ConsultarProveedoresEdit($val)
    {
        $respuesta = ListarProveedoresM();
        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {
                if($fila["IDProveedor"]==$val)
                {
                    echo "<option value=" . $fila["IDProveedor"] . " selected>" . $fila["Nombre"] . "</option>";
                }
                else{
                    echo "<option value=" . $fila["IDProveedor"] . ">" . $fila["Nombre"] . "</option>";
                }                 
                
            }
        }

    }

    function ConsultarSucursalesEdit($val)
    {
        $respuesta = ListarSucursalesM();
        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {

                if($fila["IDSucursales"]==$val)
                {
                    echo "<option value=" . $fila["IDSucursales"]  . " selected>" . $fila["Nombre"] . "</option>";
                }
                else{
                    echo "<option value=" . $fila["IDSucursales"] . ">" . $fila["Nombre"] . "</option>";
                } 
            }
        }

    }

    function ListarProductos()
    {
        $respuesta = ListarProductosM();

        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {
                echo    '
                        <tr>
                        <td style="text-align:center">'. $fila["IDPro"] .'</td>
                        <td style="text-align:center">'. $fila["Nombre"] .'</td>
                        <td style="text-align:center">'. $fila["Precio"] .'</td>
                        <td style="text-align:center">'. $fila["Descripcion"] .'</td>
                        <td style="text-align:center">   <a href="mantProductosEditar.php?q='. $fila["IDPro"] .'" class="btn btn-dark"> Actualizar </a></td>
                        <td style="text-align:center">   <a href="mantProductoEliminar.php?q='. $fila["IDPro"] .'" class="btn btn-danger"> Eliminar </a></td>
                        </tr>
                        ';
            }
        }
    }


    if(isset($_POST["btnActualizarProducto"]))
    {
        $IdProducto = $_POST["txtIDProducto"];
        $Nombre = $_POST["txtNombre"];
        $Precio = $_POST["txtPrecio"];
        $Descripcion = $_POST["txtDescripcion"];
        $Tipo = $_POST["txtTipo"];
        $Proveedor = $_POST["txtProveedor"];
        $Sucursal = $_POST["txtSucursal"];
        $RutaImagen = $_POST["txtRuta"];

        
        $respuesta = ActualizarProductoM($IdProducto, $Nombre, $Precio, $Descripcion,$Tipo,$Proveedor,$Sucursal,$RutaImagen);

        if($respuesta)
        {
            header("location: mantProductos.php");
        }
        else{
            $_POST["MsjPantalla"] = "Datos actualizados con éxito";
        }        
    }   

    if(isset($_POST["btnRegistroProducto"]))
    {
        $Nombre = $_POST["txtNombre"];
        $Precio = $_POST["txtPrecio"];
        $Descripcion = $_POST["txtDescripcion"];
        $Tipo = $_POST["txtTipo"];
        $Proveedor = $_POST["txtProveedor"];
        $Sucursal = $_POST["txtSucursal"];
        $RutaImagen = $_POST["txtRuta"];

        $respuesta = RegistrarProductoM($Nombre, $Precio, $Descripcion, $Tipo, $Proveedor, $Sucursal, $RutaImagen);
        
        if($respuesta == true)
        {
            header("location: ../Views/mantProductos.php");
        }
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido registrar su información";
        }
    } 

    function EliminarProducto($IdProducto){

        EliminarProductoM($IdProducto);
        header("location: mantProductos.php");
        
    }

?>