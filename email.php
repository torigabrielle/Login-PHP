<?php
    $from = $_POST['email']; //remetente

    $to = "arypassosj@gmail.com";//destinatario

    $subject =  $_POST['assunto'];

    $message =  $_POST['msg'];
    
    $header = 'MINE-Version: 1.0';
    $header .= 'Content-type: text/html; charset=iso-8859-1';
    $header .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer : PHP/' . phpversion();

    $status = mail($to,$subject,$message,$header);

    if($status==true){
        print "<script>alert('Enviadoa com sucesso');</script>";
        print "<script>location.href='?page=formulario';</script>";
    }else{
        print "<script>alert('Não foi possível enviar');</script>";
        print "<script>location.href='?page=formulario';</script>";
    }