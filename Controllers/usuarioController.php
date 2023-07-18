<?php
    include_once "../Models/usuarioModel.php";
    include_once 'utiles.php';

    if(isset($_POST["btnRegistro"]))
    {
        $Identificacion = $_POST["txtIdentificacion"];
        $Nombre = $_POST["txtNombre"];
        $Correo = $_POST["txtCorreo"];
        $Direccion = $_POST["txtDireccion"];
        $Telefono = $_POST["txtTelefono"];
        $Contrasenna = $_POST["txtContrasenna"];

        $respuesta = RegistrarUsuario($Identificacion, $Nombre, $Correo, $Direccion, $Telefono, $Contrasenna);
        if($respuesta == true)
        {
            header("location: ../Views/login.php");
        }
    }
    
    if(isset($_POST["btnInicio"]))
    {
        $Correo = $_POST["txtCorreo"];
        $Contrasenna = $_POST["txtContrasenna"];

        $respuesta = ValidarSesion($Correo, $Contrasenna);
        if($respuesta -> num_rows > 0)
        {   
            //$datos = mysqli_fetch_array($respuesta);
           // $_SESSION["NombreUsuario"] = $datos["NombreUsuario"];
            header("location: ../Views/inicio.php");
        }
        else
        {   
            header("location: ../Views/login.php");
            alert("Verifique las credenciales e intente nuevamente");
        }
    }

    if(isset($_POST["btnRecuperar"]))
    {
        $Correo = $_POST["txtCorreo"]; 
        $respuesta = ConsultarDatos($Correo);

        if($respuesta -> num_rows > 0)
        {   
            $datos = mysqli_fetch_array($respuesta);
            $claveTemp = randomPassword();

            $mensaje = "Estimado(a) ". $datos["Nombre"];
            $mensaje = $mensaje . " Se ha generado la siguiente contraseña temporal: " . $claveTemp;
            $mensaje = $mensaje . ". Recuerde realizar el cambio de contraseña una vez que ingrese al sistema";
            EnviarCorreo($Correo, 'Recuperar contraseña', $mensaje);
            ActualizarClaveUsuario($datos["IDUsuario"] ,$claveTemp);
            header("location: ../Views/login.php");
        }else{
            echo "USUARIO NO REGISTRADO";
        }

    }
    
?>