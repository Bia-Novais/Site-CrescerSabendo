<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil do Usuário</title>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
<?php
// Receber informações do perfil
$nome = "John Doe";
$idade = 30;
$email = "john.doe@example.com";
$professores = 5;
$horario = "8:00 - 12:00";
?>
  <div class="profile-container">
    <img class="profile-image" src="https://via.placeholder.com/150" alt="Perfil">
    <div class="profile-name"><?php echo $nome; ?></div>
    <div class="profile-info">
      <p><strong>Idade:</strong> <?php echo $idade; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Professores:</strong> <?php echo $professores; ?></p>
      <p><strong>Horário de Aula:</strong> <?php echo $horario; ?></p>
    </div>
    <div class="profile-buttons">
      <button class="profile-button chat-button">Acessar Chat</button>
      <button class="profile-button reports-button">Acessar Relatórios</button>
      <button class="profile-button noticeboard-button">Acessar Mural</button>
    </div>
  </div>
</body>
</html>
