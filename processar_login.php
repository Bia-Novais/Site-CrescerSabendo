<?php
session_start();

// Conexão com o banco de dados
class Conectar extends PDO
{
    private static $instancia;
    private $query;
    private $host = "127.0.0.1"; // Endereço do servidor MySQL
    private $usuario = "root"; // Nome de usuário do MySQL
    private $senha = ""; // Senha do MySQL
    private $db = "escolainfantil"; // Nome do banco de dados

    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->senha);
    }

    public static function getInstance()
    {
        if (!isset(self::$instancia)) {
            try {
                self::$instancia = new Conectar;
                echo 'Conectado com sucesso!!!';
            } catch (Exception $e) {
                echo 'Erro ao conectar';
                exit();
            }
        }
        return self::$instancia;
    }

    public function sql($query)
    {
        $this->getInstance();
        $this->query = $query;
        $stmt = $pdo->prepare($this->query);
        $stmt->execute();
        $pdo = null;
    }
}

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar as credenciais do usuário
    $conn = new Conectar();
    $sql = "SELECT * FROM usuario WHERE NomeUsuario = '$usuario' AND Senha = '$senha'";
    $stmt = $conn->query($sql);

    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $row['Id_usuario'];
        $_SESSION['user_perfil'] = $row['Perfil'];

        // Redirecionar com base no perfil do usuário
        if ($_SESSION['user_perfil'] == 'professor') {
            header('Location: Professor/professor.php');
        } elseif ($_SESSION['user_perfil'] == 'aluno') {
            header('Location: Aluno/aluno.php');
        } elseif ($_SESSION['user_perfil'] == 'Administrador') {
            header('Location: Administrador/adm.php');
        }
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>
