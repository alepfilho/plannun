<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_POST && (array_key_exists("post", $_POST) && $_POST['post'] == '1')) {

    require_once 'init.php';
    $pdo = db_connect();
    envia_banco($pdo, $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['mensagem']);

    require 'phpMailer/src/PHPMailer.php';

    $email2 = $_POST['email'];

    //envio de e-mail para EMAIL
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setFrom("alexandre@6tres.tech", $_POST['nome']); //remetente
    $mail->addReplyTo($email2, $_POST['nome']); //responder o e-mail para
    $mail->addAddress("alexandre@6tres.tech", "Alexandre"); //destinatário

    //Assunto do e-mail
    $mail->Subject = "Novo contato de " . $_POST['nome'];
    $mail->isHTML(true);
    $mail->Body = "O Cliente: " . $_POST['nome']. ", do telefone ".$_POST['telefone']. "<br/> enviou a mensagem".$_POST['mensagem'];

    //Verifica se houve algum erro no envio de e-mails
    if (!$mail->send()) {
        echo "0";
    } else {
        echo "1";
    }
    exit;
}
?>