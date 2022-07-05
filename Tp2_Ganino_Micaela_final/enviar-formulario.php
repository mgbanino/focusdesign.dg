<?php
    $detino= 'focusdesign.dg@gmail.com';
    $origen_nombre= 'http://127.0.0.1:5502/index.html';
    $origen_email= 'focusdesign.dg@gmail.com';
    $subject= 'Consulta en la página web';
    $adondevoy= 'gracias.html';
    $headers = "from: $origen_nombre <$origen_mail>\r\n";
    $headers .= "reply-to: $origen_mail\r\n";
    $headers .= "return-path: $origen_nombre <$origen_mail\r\n";
    $mensaje= '';
        foreach ($_POST as $k => $v){
            if ($k!= 'submit' && $k!= 'enviar') {
                $mensaje.=ucfirst($k). ":$v\n";
            }
        }
    ini_set (sendmail_form,$origen_mail);
    mail ($detino,$subject,$mensaje,$headers);
    header ("Location:$adondevoy");
    ?>
