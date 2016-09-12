<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '/home/bitcodeweb/public_html/briefRRSS/phpmailer/PHPMailerAutoload.php';

if (isset($_POST['p0'])) {
    if (empty($_POST['p0'])) {
        $data = array('success' => false, 'message' => 'Por favor, llene el formulario.');
        echo json_encode($data);
        exit;
    }
    
    $p0='';
    $p1='';
    $p2='';
    $p3='';
    $p4='';
    $p5='';
    $p6='';
    $p7='';
    $p8='';
    $p9='';
    $p10='';


    if (isset($_POST['p0'])) {
        if (!empty($_POST['p0'])) {
            $p0=$_POST['p0'];
        }
    }
    if (isset($_POST['p1'])) {
        if (!empty($_POST['p1'])) {
            $p1=$_POST['p1'];
        }
    }
    if (isset($_POST['p2'])) {
        if (!empty($_POST['p2'])) {
            $p2=$_POST['p2'];
        }
    }
    if (isset($_POST['p3'])) {
        if (!empty($_POST['p3'])) {
            $p3=$_POST['p3'];
        }
    }
    if (isset($_POST['p4'])) {
        if (!empty($_POST['p4'])) {
            $p4=$_POST['p4'];
        }
    }
    if (isset($_POST['p5'])) {
        if (!empty($_POST['p5'])) {
            $p5=$_POST['p5'];
        }
    }
    if (isset($_POST['p6'])) {
        if (!empty($_POST['p6'])) {
            $p6=$_POST['p6'];
        }
    }
    if (isset($_POST['p7'])) {
        if (!empty($_POST['p7'])) {
            $p7=$_POST['p7'];
        }
    }
    if (isset($_POST['p8'])) {
        if (!empty($_POST['p8'])) {
            $p8=$_POST['p8'];
        }
    }
    if (isset($_POST['p9'])) {
        if (!empty($_POST['p9'])) {
            $p9=$_POST['p9'];
        }
    }
    if (isset($_POST['p10'])) {
        if (!empty($_POST['p10'])) {
            $p10=$_POST['p10'];
        }
    }

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';                      
    $mail->From = 'bitcodemail@gmail.com';
    $mail->FromName = 'Brief para RRSS';
    $mail->AddAddress('bitcodemail@gmail.com');
    $mail->Subject = 'Respuesta de Brief para RRSS';

    $mail->Body = 'Nombre 
        ' .$p0 . "\r\n\r\n" .'
   ¿Cuál es el propósito general de su marca?  
        ' .$p1 . "\r\n\r\n" .'
    ¿Qué es lo que usted o su empresa quiere lograr con las redes sociales? 
        ' .$p2 . "\r\n\r\n" .'
    ¿Quién es su público objetivo? 
        ' .$p3. "\r\n\r\n" .'
    ¿Qué temas y fuentes de información son más importantes para ellos?  
        ' .$p4 . "\r\n\r\n" .'
    ¿Qué redes sociales están utilizando? 
        ' .$p5 . "\r\n\r\n" .'
    ¿Cuáles son sus principales competidores en línea?
        ' .$p6 . "\r\n\r\n" .'
    ¿Qué emociones es lo que esperan transmitir a través de imágenes y mensajería de la marca? 
        ' .$p7 . "\r\n\r\n" .'
    ¿Qué tipo de contenido se debe escribir en las redes sociales? 
        ' .$p8 . "\r\n\r\n" .'
    ¿Cuáles son los principales temas, categorías o mensajes que apoyan su marca? 
        ' .$p9 . "\r\n\r\n" .'
    Otros datos que puedan ser importantes para su empresa.
        ' . $p10;


    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'No se pudo enviar. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => '¡Cuestionario enviado!');
    echo json_encode($data);

} else {
    $data = array('success' => false, 'message' => 'Por favor, termine de llenar el formulario.');
    echo json_encode($data);
}
?>