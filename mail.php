<?php
    header("Content-Type: text/html; charset=utf-8");
    $_name = $_GET['name'];
    $_mail = $_GET['mail'];
    $_tel = $_GET['tel'];
    $_comment = $_GET['comment'];
    $_subject = "Comentarios website Mendel";
    $_to = "mktbribiesca@gmail.com";
    $_body;
    
    $_body = utf8_decode("Buen día\n\n");
    $_body = utf8_decode($_body . $_name . " ha hecho un comentario en el sitio web de Mendel\n ");
    $_body = utf8_decode($_body . "\nCuenta de correo: " . $_mail);
    $_body = utf8_decode($_body . "\nTel: " . $_tel);
    $_body = utf8_decode($_body . "\nComentario: " . $_comment);

	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "ti@mendel.mx";
    $to = $_to;
    $subject = $_subject;
    $message = $_body;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
 ?>