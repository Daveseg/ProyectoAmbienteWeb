<?php
    include_once "connection.php";
    
    function RegistrarUsuario($Identificacion, $Nombre, $Correo, $Direccion, $Telefono, $Contrasenna)
    {
        try
        {
        $enlace = OpenBD();
        $sentencia = "CALL RegistrarUsuario('$Identificacion', '$Nombre', '$Correo','$Direccion', '$Telefono',  '$Contrasenna')";
        $respuesta = $enlace -> query($sentencia);
        CloseBD($enlace);

        return $respeusta;
    }
    catch(Exception $e){
        return false; 
    }
    }

    function ValidarSesion($Correo, $Contrasenna)
    {
        $enlace = OpenBD();
        $sentencia = "CALL RegistrarUsuario('$Correo', '$Contrasenna')";
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
?>