<?php
class Conectar extends PDO
{
    private static $instancia;
    private $query;
    private $host = "127.0.0.1";//ender servidor da etec
    private $usuario = "root";//usuario servidor da etec
    private $senha = "";
    private $db = "escolainfantil";
    
    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->db","$this->usuario","$this->senha");

    }

    public static function getInstance()
    {
        if(!isset (self::$instancia))
        {
            try
            {
                self::$instancia = new Conectar;
                echo 'Conectado com sucesso!!!';

            }
            catch (Exception $e)
            {
                echo 'Erro ao conectar';
                exit();
            }
        }
        return self::$intancia;
    }
    public function sql ($query)
    {
        $this->getInstance();
        $this->query = $query;
        $stmt = $pdo->prepare($this->query);
        $stmt-> execute();
        $pdo = null;
    }
}
?>