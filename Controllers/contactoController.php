<?php
    include_once '../Models/contactoModel.php';
    include_once 'utiles.php';



    if(isset($_POST["btnContacto"]))
    {
        $Nombre = $_POST["txtNombre"];
        $Correo = $_POST["txtCorreo"];
        $Asunto = $_POST["txtAsunto"];
        $Mensaje = $_POST["txtMensaje"];

        $respuesta = RegistrarInformacionM( $Nombre, $Correo, $Asunto, $Mensaje);
        
        if($respuesta == true)
        {
            header("location: ../Views/inicio.php");
        }
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido realizar su solicitud";
        }
    }
    ?>