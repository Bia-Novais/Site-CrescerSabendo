<?php
  //Variáveis
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];
  $assunto = $_POST["assunto"];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $message = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $from = $email;
  $to = "bianovais08@gmail.com";
  $subject = $assunto;
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From: {$from}" . "\r\n";
  $headers .= "To: {$to}" . "\r\n";
  $headers .= "X-Mailer: " . phpversion();

  //Enviar
  if(mail($to, $subject, $message, $headers))
  {
    echo $message;
    echo "Email enviado para $to com sucesso!!!";
  }else{
    echo "Falha no envio do email.";
  }
  
  //echo "<meta http-equiv='refresh' content='10;URL=../obrigado.php'>";
?>