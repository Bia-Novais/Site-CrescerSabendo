
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <title>Professor</title>
    <!-- CSS only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="pgprofessor.css">

</head>

<body>
    <!--==========================
=            html            =
===========================-->
    <section class="seccion-perfil-usuario">
    <?php
session_start(); // Certifique-se de iniciar a sessão

if (isset($_SESSION['user_details'])) {
    $user_details = $_SESSION['user_details'];

    // Conexão com o banco de dados do professor (substitua com suas próprias informações de conexão)
    $professor_db_host = "localhost";
    $professor_db_usuario = "root";
    $professor_db_senha = "";
    $professor_db_nome = "escolainfantil";

    try {
        $pdo = new PDO("mysql:host=$professor_db_host;dbname=$professor_db_nome", $professor_db_usuario, $professor_db_senha);

        // Consulta para obter dados adicionais do professor
        $id_usuario = $user_details['Id_usuario'];
        $sql = "SELECT * FROM professor WHERE Id_usuario = :Id_usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Id_usuario', $id_usuario);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $professor_info = $stmt->fetch(PDO::FETCH_ASSOC);
            // Exiba as informações adicionais do professor
            // Adicione mais informações do professor aqui, conforme necessário
        } else {
            echo "Dados do professor não encontrados.";
        }
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados do professor: " . $e->getMessage();
    }
} else {
    header('Location: login.php'); // Redirecionar para a página de login se o usuário não estiver logado
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

        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo "<p>Nome do Professor: " . $professor_info['Nome'] . "</p>";?>
</h3>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                   <li><b>RG: </b><?php echo "" . $professor_info['RG'] . "";?></li>
                   <li><b>CPF: </b><?php echo "" . $professor_info['CPF'] . "";?></li>
                   <li><b>Data de Nascimento: </b><?php echo "" . $professor_info['DataNasc'] . "";?></li>
                   <li><b>Telefone: </b> <?php echo "" . $professor_info['Telefone'] . "";?></li>
                </ul>
                <ul class="lista-datos">
                    <li><b>Celular: </b> <?php echo "" . $professor_info['Celular'] . "";?></li>
                    <li><b>Endereço: </b> <?php echo "" . $professor_info['Endereco'] . "";?></li>
                    <li><b>CEP: </b><?php echo "" . $professor_info['CEP'] . "";?></li>
                </ul>
                <button class="button-boletim"> <a href="boletiim/escolheturma.php" >Acessar Boletim</a></button>
                <button class="button-mural"><a href="muraldeavisos.php">Acessar Mural</a></button>
                <button class="button-sair "><a href="professor.php" >Voltar </a></button>

            </div>
            <br>
        </div>

        <div class="card">
  
    </section><hr size="0.4" width="100%" align="center" color="black" noshade>

<!---FIm de introdução----->

        </body>
    </html>
</body>
</html>

