<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="css/logcss.css"> 
</head>
<body>
    <div class="page">
        <form method="POST" action="processar_login.php" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" placeholder="Digite seu usuário" autofocus="true" />
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" name="login" value="Acessar" class="btn" />
        </form>
    </div>
</body>
</html>
