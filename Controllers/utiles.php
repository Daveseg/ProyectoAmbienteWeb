<?php

    function randomPassword(){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet)-1;
        for($i = 0; $i<8; $i++){
            $n = rand(0, alphaLength);
            $pass[] = alphabet[$n];
        }
        return implode($pass);
    }

    function EnviarCorreo($destinatario, $asunto, $cuerpo)
    {
        require_once '../PHPMailer/src/PHPMailer.php';
        require '../PHPMailer/src/SMTP.php';
        require '../PHPMailer/src/Exception.php';
        
        $correoSalida = "techcomstore@hotmail.com";
        $contrasennaSalida = "PrograWebViernesN";

        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';

        $mail -> IsSMTP();
        $mail -> Host = 'smtp.office365.com'; //smtp.gmail.com
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = 587; // 465 // 25
        $mail -> SMTPAuth = true;
        $mail -> Username = $correoSalida;
        $mail -> Password = $contrasennaSalida;

        $mail -> SetFrom($correoSalida);
        $mail -> Subject = $asunto;
        $mail -> MsgHTML($cuerpo);
        $mail -> AddAddress($destinatario);

        $mail -> send();
    }
?>