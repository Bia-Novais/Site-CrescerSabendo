<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgprof/logo_pequena.png">
    <title>Perfil do Usuário</title>
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <title>Professor</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="pgdoaluno.css">
</head>

<body>


    <!--==========================
=            html            =
===========================-->
    <section class="seccion-perfil-usuario">
    <?php
    session_start(); // Certifique-se de iniciar a sessão

    if (isset($_SESSION['user_details']) && isset($_SESSION['user_details']['Id_usuario'])) {
        $user_details = $_SESSION['user_details'];
        $id_usuario = $user_details['Id_usuario'];


        $responsavel_db_host = "localhost";
        $responsavel_db_usuario = "root";
        $responsavel_db_senha = "";
        $responsavel_db_nome = "escolainfantil";

        try {
            $pdo = new PDO("mysql:host=$responsavel_db_host;dbname=$responsavel_db_nome", $responsavel_db_usuario, $responsavel_db_senha);

            $sql = "SELECT * FROM responsavel WHERE Id_usuario = :Id_usuario";            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':Id_usuario', $id_usuario);
            $stmt->execute();
            

            if ($stmt->rowCount() == 1) {
                $responsavel_info = $stmt->fetch(PDO::FETCH_ASSOC);

                // Exiba as informações adicionais do responsável
                
                // Adicione mais informações do responsável aqui, conforme necessário
            } else {
                echo "Dados do responsável não encontrados.";
            }
        } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados do responsável: " . $e->getMessage();
        }
    } else {
        echo "Id_responsavel não encontrado nos detalhes do usuário ou usuário não autenticado.";
    }
    ?>
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="img/Aluna.webp" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="bi bi-camera-fill"></i>
                        <input type="file" id="profile-picture-input" style="display: none;">
                    </button>
                </div>
            </div>
        </div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Select the necessary elements
    const profilePictureInput = document.getElementById("profile-picture-input");
    const profilePicture = document.querySelector(".perfil-usuario-avatar img");

    // Add a click event listener to the avatar button
    document.querySelector(".boton-avatar").addEventListener("click", function () {
        // Trigger the click event on the hidden file input
        profilePictureInput.click();
    });

    // Add a change event listener to the file input
    profilePictureInput.addEventListener("change", function (event) {
        const file = event.target.files[0];

        if (file) {
            // Read the selected file as a data URL
            const reader = new FileReader();
            reader.onload = function (e) {
                // Update the src attribute of the profile picture with the data URL
                profilePicture.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
});
</script>
    
        <br><br>

        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
            <h1 class="titulo">Perfil do Responsável</h1>
            <br>
                
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <?php
                
                echo "<p>Nome do Responsável: " . $responsavel_info['Nome'] . "</p>";
                echo "<p>RG: " . $responsavel_info['RG'] . "</p>";
                echo "<p>CPF: " . $responsavel_info['CPF'] . "</p>";
                echo "<p>Data de Nascimento: " . $responsavel_info['DataNasc'] . "</p>";
           
                ?>
                </ul>
                <ul class="lista-datos">
                <?php
                echo "<p>Telefone: " . $responsavel_info['Telefone'] . "</p>";
                echo "<p>Celular: " . $responsavel_info['Celular'] . "</p>";
                echo "<p>Endereço: " . $responsavel_info['Endereco'] . "</p>";
                echo "<p>CEP: " . $responsavel_info['CEP'] . "</p>";
                ?>
                    
                </ul>
                </div>
                </div>
        
  
    

<?php
$_SESSION['user_details']['Id_responsavel'] = $responsavel_info['Id_responsavel'];

// Check if user details are set and contains Id_responsavel
if (isset($_SESSION['user_details']) && isset($_SESSION['user_details']['Id_responsavel'])) {
    $user_details = $_SESSION['user_details'];
    $id_responsavel = $user_details['Id_responsavel'];
    try {
        // Create a new PDO connection for aluno database
        $pdo_aluno = new PDO("mysql:host=$responsavel_db_host;dbname=$responsavel_db_nome", $responsavel_db_usuario, $responsavel_db_senha);
        $sql_aluno = "SELECT * FROM aluno WHERE Id_responsavel = :Id_responsavel";
        $stmt_aluno = $pdo_aluno->prepare($sql_aluno);
        $stmt_aluno->bindParam(':Id_responsavel', $id_responsavel);
        $stmt_aluno->execute();

        if ($stmt_aluno->rowCount() == 1) {
            // Fetch aluno_info
            $aluno_info = $stmt_aluno->fetch(PDO::FETCH_ASSOC);

            //echo $aluno_info['Nome'];
        } else {
            echo "Dados do aluno não encontrados.";
        }
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados do aluno: " . $e->getMessage();
    }
}?>
<br> 

<div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
            <h1 class="titulo">Perfil do Aluno</h1>
            <br>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <?php
                
                echo "<p>Nome do Responsável: " . $aluno_info['Nome'] . "</p>";
                echo "<p>RG: " . $aluno_info['RG'] . "</p>";
           
                ?>
                </ul>
                <ul class="lista-datos">
                <?php
                echo "<p>Data de Nascimento: " . $aluno_info['DataNasc'] . "</p>";
                ?>
                    
                    </ul>
                </div>
                <br>
                <button class="button-boletim"> <a href="vernotas.php" >Acessar Boletim</a></button>
                <button class="button-mural"><a href="muraldeavisos.php">Acessar Mural</a></button>
                <button class="button-sair "><a href="aluno.php" >Voltar </a></button>

</div>
            
               
  
    </section><hr size="0.4" width="100%" align="center" color="black" noshade>




</body>
</html>
