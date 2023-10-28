<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao seu banco de dados (substitua com suas credenciais)
    $servername = "seu_servidor";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Coleta os dados do formulário
    $nome_turma = $_POST["nome_turma"];
    $ano_semestre = $_POST["ano_semestre"];

    // SQL para inserir a turma no banco de dados
    $sql = "INSERT INTO Turmas (nome_turma, ano_semestre) VALUES ('$nome_turma', '$ano_semestre')";

    if ($conn->query($sql) === TRUE) {
        echo "Turma criada com sucesso!";
    } else {
        echo "Erro ao criar a turma: " . $conn->error;
    }

    $conn->close();
}
?>
