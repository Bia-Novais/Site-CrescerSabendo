<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgaluno/logo_pequena.png">
    <title>Aluno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="naveside.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Defina estilos CSS personalizados aqui, se necessário. */
        body {
            background-image: url('imgaluno/areaaluno.png');
            background-size: cover; /* Torna o fundo responsivo e não repetitivo */
            background-repeat: no-repeat;
            background-attachment: fixed; /* Fixa o fundo na posição */
            margin: 0;
            
            padding: 0;
        }
        .navbar {
            background-color: transparent; /* Cor de fundo transparente do navbar */
            border: none; /* Remova a borda do navbar */
        }
        .sidebar {
            height: 100%;
            width: 70px; /* Largura reduzida do sidebar */
            position: fixed;
            top: 70px; /* Igual à altura do navbar */
            left: 0;
            background-color: #b6dbed;
            overflow-y: auto;
            padding-top: 20px; /* Espaço superior para acomodar o navbar */
        }
        .sidebar a {
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar a i {
            margin-bottom: 5px;
            color: #304c68;
            font-size: 20px;
        }
        .sidebar a:hover {
            background-color: #a0a0a0;
        }
        .profile-dropdown {
            position: relative;
            cursor: pointer;
        }
        .profile-dropdown .dropdown-menu {
            position: absolute;
            right: 0;
        }
  
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="Home.html">
            <img src="imgaluno/log.png" alt="Logo" width="98" height="58">
        </a>
        <div class="profile-dropdown ml-auto">
            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> <?php 
session_start(); echo $_SESSION['user_details']['NomeUsuario']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="Perfil.php">Ir ao Perfil</a>
                <a class="dropdown-item" href="logout.php">Sair</a>
            </div>
        </div>
    </div>
</nav>
<div class="sidebar">
<div class="sidebar">
    <a href="aluno.php"i><i class="fas fa-home"></i><span class="tooltip">Home</span></a>
<a href="boletiim/boletins.php"><i class="fas fa-users"></i><span class="tooltip">Boletim</span></a>
    <a href="../QuickTalk/index.html"><i class="fas fa-comments"></i><span class="tooltip">Chat</span></a>
    <a href="muraldeavisos.php"><i class="fas fa-bullhorn"></i><span class="tooltip">Avisos</span></a>

</div>
</div>

<!-- Conteúdo principal aqui -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
</body>
</html>
