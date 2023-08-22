<?php    
    include_once "../Controllers/usuarioController.php";
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

    <?php
    $Datos =  ConsultarUsuario($_SESSION["IdUsuario"]);
    

if($_SESSION["RolUsuario"] == 1)
{
    echo'
    
    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; text-align: center;">Datos de Usuarios</h5>


                    <table class="table table-hover table-bordered" id="tablaDetalle">
                        <thead>
                            <tr style="text-align:center; background-color:#DEDEDE">
                                <th>Identificación</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Correo</th>   
                                <th>Tipo de usuario</th>   
                                <th>Acciones</th>                          
                            </tr>
                        </thead>
                        <tbody>
                        ';

                        ConsultarUsuarios();
                    
                        echo '
                            </tbody>
                        </table>   
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="mantProductos.php" class="btn">Modificar Inventario de productos</a>
                            </div>

                        <form action="" method="post">
                                <button id="btnCerrarSesion" name="btnCerrarSesion" type="submit" class="btn btn-dark btn-lg btn-block">Cerrar Sesión</button>
                            </div>
                            </form>
                        ';
}
else
{
    echo
    '<section class="vh-100" style="background-color: #FFFFFF;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div>
                    <!--class="card" style="border-radius: 1rem;"-->
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                            alt="login form" class="img-fluid" style="border-radius: 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
            
                            <form action="" method="post">
            
                            <a href="inicio.php" class="text-decoration-none">
                            <div class="d-flex align-items-center mb-3 pb-1" href="inicio.php">
                                <span class="h1 text-uppercase text-primary bg-dark px-2">Tech</span>
                                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">com</span>
                            </div>
                            </a>
            
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Actualizar Datos</h5>
                            <label>Nombre</label>
                            <div class="form-outline mb-4">
                                <input id="txtNombre" name="txtNombre" type="text" class="form-control form-control-lg" value="'. $Datos["Nombre"] .'" 
                                />
                            </div>

                            <label>Identificación</label>
                            <div class="form-outline mb-4">
                                <input disabled="disabled" id="txtIdentificacion" name="txtIdentificacion" type="text" class="form-control form-control-lg" value="'. $Datos["Identificacion"] .'"  
                                />
                            </div>
            
                            <label>Correo</label>
                            <div class="form-outline mb-4">
                                <input id="txtCorreo" name="txtCorreo" type="email" class="form-control form-control-lg" value="'. $Datos["Correo"].'"  />
                            </div>
            
                            <label>Dirección</label>
                            <div class="form-outline mb-4">
                                <input id="txtDireccion" name="txtDireccion" type="text" class="form-control form-control-lg" value="'. $Datos["Direccion"].'"  />
                            </div>
            
                            <label>Teléfono</label>
                            <div class="form-outline mb-4">
                                <input id="txtTelefono" name="txtTelefono" type="text" class="form-control form-control-lg" value="'. $Datos["Telefono"].'"  />
                            </div>
            
                            <label>Contraseña</label>
                            <div class="form-outline mb-4">
                                <input id="txtContrasenna" name="txtContrasenna" type="password"  class="form-control form-control-lg" placeholder="Contraseña"/>
                            </div>
            
                            <div class="pt-1 mb-4">
                                <button id="btnActualizar" name="btnActualizar" type="submit" class="btn btn-dark btn-lg btn-block">Actualizar Datos</button>
            
                                </div>
                            </form>
            
                            <form action="" method="post">
                                <button id="btnCerrarSesion" name="btnCerrarSesion" type="submit" class="btn btn-dark btn-lg btn-block">Cerrar Sesión</button>
                            </div>
                            </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     ';
}

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