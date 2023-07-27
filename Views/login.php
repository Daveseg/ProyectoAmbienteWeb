<?php 

    include_once "layout.php";
    include_once "../Controllers/usuarioController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php MostrarHead(); ?>
</head>

<body>
    
    

    <!-- LOGIN START-->
    <section class="vh-100" style="background-color: #FFFFFF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div>
          <!--class="card" style="border-radius: 1rem;"-->
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Tech</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">com</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión</h5>

                  <div class="form-outline mb-4">
                    <input id="txtCorreo" name="txtCorreo" type="email" class="form-control form-control-lg" placeholder="Correo Electrónico"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input id="txtContrasenna" name="txtContrasenna" type="password" class="form-control form-control-lg" placeholder="Contraseña" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button id="btnInicio" name="btnInicio" type="submit" class="btn btn-dark btn-lg btn-block">Iniciar Sesión</button>
                  </div>

                  <a class="small text-muted" href="recuperar.php">¿Olvidaste tu contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #3d464d;">¿No tienes una cuenta? <a href="registro.php"
                      style="color: #ffd333;">Registrate aquí</a></p>
                  <a href="#!" class="small text-muted">Condiciones de uso.</a>
                  <a href="#!" class="small text-muted">Políticas de privacidad</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- LOGIN END-->

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