<?php
    include_once "../Models/usuarioModel.php";
    include_once 'utiles.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

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
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido registrar su información";
        }
    }
    
    if(isset($_POST["btnInicio"]))
    {
        try{

            $Correo = $_POST["txtCorreo"];
            $Contrasenna = $_POST["txtContrasenna"];
        
            $respuesta = ValidarSesion($Correo, $Contrasenna);
        
            if($respuesta -> num_rows > 0)
            {   
                $datos = mysqli_fetch_array($respuesta);
                $_SESSION["IdUsuario"] = $datos["IDUsuario"];
                $_SESSION["NombreUsuario"] = $datos["Nombre"];
                $_SESSION["RolUsuario"] = $datos["Admin"];
                header("location: ../Views/inicio.php");
            }
            else
            {   
                $_POST["MsjPantalla"] = "No se ha podido validar su información";
            }
            
        }
        catch(Exception $error)
        {
            
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

    function UserOn(){
        if($_SESSION["NombreUsuario"] == null)
        {
           header("location: login.php");
        }
        else 
        {
            header("location: mantUsuario.php?q=" . $_SESSION["IdUsuario"]);
        }
    }

    if(isset($_POST["btnCerrarSesion"]))
    {
        session_destroy();
        header("location: ../Views/inicio.php");
    }
    
    function ConsultarUsuario($idUsuario)
    {
        $respuesta = ConsultarUsuarioM($idUsuario);
        return mysqli_fetch_array($respuesta);
    }

    if(isset($_POST["btnActualizar"]))
    {
        $IdUsuario = $_SESSION["IdUsuario"];
        $Nombre = $_POST["txtNombre"];
        $Correo = $_POST["txtCorreo"];
        $Direccion = $_POST["txtDireccion"];
        $Telefono = $_POST["txtTelefono"];
        $Contrasenna = $_POST["txtContrasenna"];
        
        if ($Contrasenna != "") {
        $respuesta = ActualizarUsuarioM($IdUsuario, $Nombre, $Telefono, $Direccion, $Correo, $Contrasenna);
        $_POST["MsjPantalla"] = "Datos actualizados con éxito";
        echo '<script>alert("'.$_POST["MsjPantalla"].'");</script>';
        } 
        else if($Contrasenna == "")
        {
        $respuesta = ActualizarUsuarioSinPwsM($IdUsuario, $Nombre, $Telefono, $Direccion, $Correo);
        $_POST["MsjPantalla"] = "Datos actualizados con éxito";
        echo '<script>alert("'.$_POST["MsjPantalla"].'");</script>';
        }
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido actualizar la información";
        }
    }   

    
    if(isset($_POST["btnActualizarAdm"]))
    {
        $IdUsuario = $_POST["txtIdUsuario"];
        $Nombre = $_POST["txtNombre"];
        $Correo = $_POST["txtCorreo"];
        $Direccion = $_POST["txtDireccion"];
        $Telefono = $_POST["txtTelefono"];
        
        $respuesta = ActualizarUsuarioSinPwsM($IdUsuario, $Nombre, $Telefono, $Direccion, $Correo);
        $_POST["MsjPantalla"] = "Datos actualizados con éxito";
        echo '<script>alert("'.$_POST["MsjPantalla"].'");</script>';
        header("location: userOn.php");
    }   

    function ConsultarUsuarios()
    {
        $respuesta = ConsultarUsuariosM();

        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {
                echo    '
                        <tr>
                        <td style="text-align:center">'. $fila["Identificacion"] .'</td>
                        <td style="text-align:center">'. $fila["Nombre"] .'</td>
                        <td style="text-align:center">'. $fila["Telefono"] .'</td>
                        <td style="text-align:center">'. $fila["Direccion"] .'</td>
                        <td style="text-align:center">'. $fila["Correo"] .'</td>
                        <td style="text-align:center">'. $fila["Admin"] .'</td>
                        <td style="text-align:center">   <a href="mantUsuariosEditar.php?q='. $fila["IDUsuario"] .'" class="btn"> Actualizar </a></td>
                        </tr>
                        ';
            }
        }
    }
    
?>