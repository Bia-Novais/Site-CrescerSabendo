<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="naveside.css">
</head>
<style>
        /* Defina estilos CSS personalizados aqui, se necessário. */
        .navbar {
            background-color: transparent; /* Cor de fundo transparente do navbar */
            border: none; /* Remova a borda do navbar */
        }
        .sidebar {
            height: 100%;
            width: 70px; /* Largura reduzida do sidebar */
            position: fixed;
            top: 0px; /* Igual à altura do navbar */
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

<!-- Conteúdo principal aqui -->
<div class="card">
        <h2>TURMAS</h2>
        <div class="buttons-left">
            <button onclick="abrirPagina('aluno')">Berçário 1</button>
            <button onclick="abrirPagina('alunosb')">Berçário 2</button>
        </div>
        <div class="buttons-right">
            
        </div>
    </div>

    <script>
        function abrirPagina(turma) {
            window.open(turma + '.php', '_blank');
        }
    </script>
<div class="sidebar">
<a href="../professor.php"><i class="fas fa-home"></i><span class="tooltip">Home</span></a>
<a href="escolheturma.php"><i class="fas fa-users"></i><span class="tooltip">Turmas</span></a>
    <a href="../QuickTalk/index.html"><i class="fas fa-comments"></i><span class="tooltip">Chat</span></a>
    <a href="../muraldeavisos.php"><i class="fas fa-bullhorn"></i><span class="tooltip">Avisos</span></a>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
</body>
</html>

