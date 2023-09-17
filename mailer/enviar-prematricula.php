<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';

if (isset($_POST['enviar'])){
    $mail = new PHPMailer(true);


// Instância da classe
$mail = new PHPMailer(true);
try
{
    // Configurações do servidor
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->Host = 'smtp.email.com';
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'bianovais08@gmail.com';
    $mail->Password   = 'Pepebia02$';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    // Criptografia do envio SSL também é aceito
    $mail->Port = 587;

    $mail->setFrom('bianovais08@gmail.com', 'Crescer Sabendo'); // Define o remetente
    $mail->addAddress('bianovais08@gmail', 'Crescer Sabendo'); // Define o destinatário
    $mail->setLanguage('pt');

    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Teste Envio de Email';

    $body = "Mensagem enviada através do site, segue informações abaixo: <br>
    Nome do responsável: ".$_POST['nomeres']." <br>
    RG: ".$_POST['rg']."<br>
    Email: ".$_POST['email']."<br>
    Nome da criança: ".$_POST['nomecri'];



    $mail->Body    = 'Este é o corpo da mensagem <b>Olá!</b>';
    $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
    // Enviar
    $mail->send();
    echo 'A mensagem foi enviada!';
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>