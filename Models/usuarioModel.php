<?php
    include_once "connection.php";
    
    function RegistrarUsuario($Identificacion, $Nombre, $Correo, $Direccion, $Telefono, $Contrasenna)
    {
        try
        {
        $enlace = OpenBD();
        $sentencia = "CALL RegistrarUsuario('$Identificacion', '$Nombre', '$Telefono','$Direccion', '$Correo',  '$Contrasenna')";
        $respuesta = $enlace -> query($sentencia);
        CloseBD($enlace);

        return $respuesta;
    }
    catch(Exception $e){
        return false; 
    }
    }

    function ValidarSesion($Correo, $Contrasenna)
    {
        $enlace = OpenBD();
        $sentencia = "CALL ValidarSesion('$Correo', '$Contrasenna')";
        $respuesta = $enlace -> query($sentencia);
        CloseBD($enlace);

        return $respuesta;
    }

    function ConsultarDatos($Correo)    
    {
        $enlace = OpenBD();
        $sentencia = "CALL ConsultarDatos('$Correo')";
        $respuesta = $enlace -> query($sentencia);
        CloseBD($enlace);

        return $respuesta;
    }

    function ActualizarClaveUsuario($IDUsuario, $claveTemp)
    {
        $enlace = OpenBD();
        $sentencia = "CALL ActualizarClaveUsuario('$IDUsuario', '$claveTemp')";
        $enlace -> query($sentencia);
        CloseBD($enlace);
    }

    function ConsultarUsuarioM($idUsuario)
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarUsuario('$idUsuario')";
        $respuesta = $enlace -> query($sentecia);
        CloseBD($enlace);

        return $respuesta;
    }

    function ActualizarUsuarioM($IdUsuario, $Nombre, $Telefono,$Direccion,$Correo,$Contrasenna )
    {
        try
        {
            $enlace = OpenBD();
            $sentecia = "CALL ActualizarUsuario('$IdUsuario','$Nombre','$Telefono','$Direccion','$Correo','$Contrasenna')";
            $respuesta = $enlace -> query($sentecia);
            CloseBD($enlace);


            return $respuesta;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    function ActualizarUsuarioSinPwsM($IdUsuario, $Nombre, $Telefono,$Direccion,$Correo )
    {
        try
        {
            $enlace = OpenBD();
            $sentecia = "CALL ActualizarUsuarioSinPWD('$IdUsuario','$Nombre','$Telefono','$Direccion','$Correo')";
            $respuesta = $enlace -> query($sentecia);
            CloseBD($enlace);


            return $respuesta;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    function ConsultarUsuariosM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarUsuarios()";
        $respuesta = $enlace -> query($sentecia);
        CloseBD($enlace);

        return $respuesta;
    }

?>