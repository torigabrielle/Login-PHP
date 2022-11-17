<?php
include('config.php');

if(isset($_POST['email'])){ 

    $emailPostado = $_POST['email'];

    $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$emailPostado}'") or print $mysql_error();


    if(mysqli_num_rows($sql)>0){
            $novasenha = substr(md5(time()),0,6); //gerando uma nova senha aleatoriamente
            $nscriptografada = md5(md5($novasenha)); //criptografando ela

            $from = "arypassosj@gmail.com"; //remetente

            $to = $_POST['email'];//destinatario

            $subject =  "Recuperação de Senha";

            $message =  "Foi solicitado a recuperação de senha para esse conta.  Sua nova senha: ".$novasenha;
            
            $header = 'MINE-Version: 1.0';
            $header .= 'Content-type: text/html; charset=iso-8859-1';
            $header .= 'From: ' . $from . "\r\n" .
                        'Reply-To: ' . $from . "\r\n" .
                        'X-Mailer : PHP/' . phpversion();

            $status = mail( $to, $subject, $header, $message);

            if($status==true){
                $sql = "UPDATE user SET senha = 'md5($novasenha)' WHERE email = '$emailPostado' ";
			    $res = $conn->query($sql);
                
                print "<script>alert('Nova senha enviada para o e-mail cadastrado');</script>";
                print "<script>location.href='index.php';</script>";
            }else{
                print "<script>alert('Não foi possível concluir a recuperação de senha');</script>";
                print "<script>location.href=index.php';</script>";
            }
    }else{
        print "<script>alert('E-mail não cadastrado no banco de dados');</script>";
        print "<script>location.href='?page=esqueci_senha';</script>";
    }
}    
?>