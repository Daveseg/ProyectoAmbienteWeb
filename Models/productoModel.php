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
    function ConsultarComM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarProductosComputadoras()";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }
    function ConsultarCelM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarProductosCelulares()";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }
    function ConsultarPerM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarProductosPerifericos()";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }
    function ConsultarMonM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarProductosMonitores()";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }

    function FiltroProductosM($categoria)
    {
        $enlace = OpenBD();
        $sentecia = "CALL FiltrarPrecio('$categoria')";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }

    function ConsultarProductosM($idPro)
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarProductos('$idPro')";
        $respuesta = $enlace -> query($sentecia);
        CloseBD($enlace);

        return $respuesta;
    }

    function ListarProductosM()
    {
        $enlace = OpenBD();
        $sentecia = "CALL ConsultarListaProductos()";
        $respuesta = $enlace -> query($sentecia);
        CloseBD($enlace);

        return $respuesta;
    }


    /*function FiltroProductosM($categoria)
    {
        $enlace = OpenBD();
        $sentecia = "CALL FiltrarPrecio('$categoria')";
        $respuesta = $enlace -> query($sentecia);
        
        CloseBD($enlace);

        return $respuesta;
    }*/

    

?>