<?php
  //Variáveis
  $nome = $_POST['nomecri'];
  $dtnasc = $_POST['asc'];
  $nomer = $_POST['nomeres'];
  $teleone = $_POST['telefone'];
  $email = $_POST['email'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Campo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>Data de Nascimento: </b>$dtnasc</p>
      <p><b>Nome do Responsável que nos contatou: </b>$nomer</p>
      <p><b>Nome de um Segundo Responsável: </b>$nomedois</p>
      <p><b>Telefone para contato: </b>$telefone</p>
      <p><b>E-mail: </b>$email</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "bianovais08@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../Home.html'>";
?>
