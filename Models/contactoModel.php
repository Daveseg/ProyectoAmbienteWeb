<?php
    include_once 'connection.php';

    function RegistrarInformacionM( $Nombre, $Correo, $Asunto, $Mensaje)
    {
        try
        {
            $enlace = OpenBD();
            $sentecia = "CALL RegistrarInformacion ('$Nombre','$Correo','$Asunto','$Mensaje')";
            $respuesta = $enlace -> query($sentecia);
            CloseBD($enlace);
            

            return $respuesta;
        }
        catch(Exception $e){
            return false;
        }
    }
    
    ?>