<?php
    include_once 'connection.php';

    function ConsultarPromosM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarProductosPromocion()";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }

    

?>