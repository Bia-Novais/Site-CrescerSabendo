
<?php
    include_once 'Administrador/Conectar.php';

    // parte1 - atributos
    class Aluno
    {
        private $Id_aluno;
        private $Nome;
        private $RG;
        private $CPF;
        private $DataNasc;
        private $Sexo;
        private $arquivo;
        private $Id_responsavel;
        private $Id_turma;
        private $conn;

        //parte 2 - os gettes e setter

        public function getId_aluno()
        {
            return $this->Id_aluno;
        } 

        public function setId_aluno($iid)
        {
            $this->Id_aluno = $iid;
        }

        public function getNome()
        {
            return $this->Nome;
        } 

        public function setNome($name)
        {
            $this->Nome = $name;
        }

        public function getRG()
        {
            return $this->RG;
        } 

        public function setRG($rg)
        {
            $this->RG = $rg;
        }

        public function getCPF()
        {
            return $this->CPF;
        } 

        public function setCPF($cpf)
        {
            $this->CPF = $cpf;
        }

        public function getDataNasc()
        {
            return $this->DataNasc;
        } 

        public function setDataNasc($datanasc)
        {
            $this->DataNasc = $datanasc;
        }

        public function getSexo()
        {
            return $this->Sexo;
        } 

        public function setSexo($sexo)
        {
            $this->Sexo = $sexo;
        }

        public function getArquivo()
        {
            return $this->Arquivo;
        } 

        public function setArquivo($arquivo)
        {
            $this->Arquivo = $arquivo;
        }

        public function getId_responsavel()
        {
            return $this->Id_responsavel;
        } 

        public function setId_responsavel($idres)
        {
            $this->Id_responsavel = $idres;
        }

        public function getId_turma()
        {
            return $this->Id_turma;
        } 

        public function setId_turma($idtur)
        {
            $this->Id_turma = $idtur;
        }

        //parte 3 - método 
        function salvar()
        {
            try
            {
                $this-> conn = new Conectar();
                $sql = $this->conn->prepare("insert into aluno values (null,?,?,?,?,?,?,null,null)");
                @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
                @$sql-> bindParam(2, $this->getRG(), PDO::PARAM_STR);
                @$sql-> bindParam(3, $this->getCPF(), PDO::PARAM_STR);
                @$sql-> bindParam(4, $this->getDataNasc(), PDO::PARAM_STR);
                @$sql-> bindParam(5, $this->getSexo(), PDO::PARAM_STR);
                @$sql-> bindParam(6, $this->getArquivo(), PDO::PARAM_STR);
                if($sql->execute() == 1)
                {
                    return "Registro salvo com sucesso!!!";
                }
                $this->conn = null;
            }
                catch(PDOException $exc)
                {
                    echo "Erro ao salvar o registro. ".$exc->getMessage();
                }
            
        }

        function alterar()
        {
            try
            {
                $this->conn =new Conectar();
                $sql = $this->conn->prepare("select * from aluno where Id_aluno = ? and Id_responsavel = ?"); //infoemei o ?(parametro)
                @$sql-> bindParam(1, $this->getId_aluno(), PDO::PARAM_STR); //incluir esta linha para definar o parametro
                @$sql-> bindParam(2, $this->getId_responsavel(), PDO::PARAM_STR);
                $sql->execute();
                return $sql->fetchAll();
                $this->conn = null;
            }
            catch(PDOException $exc)
            {
                echo "Erro ao alterar. ".$exc->getMessage();
            }
        }

        function alterar2()
        {
            try
            {
                $this-> conn = new Conectar();
                $sql = $this->conn->prepare("update aluno set Nome = ?, RG = ?, CPF = ?, DataNasc = ?, Sexo = ?, arquivo = ?, Id_turma = ? where Id_aluno = ? and Id_responsavel = ?");
                @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
                @$sql-> bindParam(2, $this->getRG(), PDO::PARAM_STR);
                @$sql-> bindParam(3, $this->getCPF(), PDO::PARAM_STR);
                @$sql-> bindParam(4, $this->getDataNasc(), PDO::PARAM_STR);
                @$sql-> bindParam(5, $this->getSexo(), PDO::PARAM_STR);
                @$sql-> bindParam(6, $this->getArquivo(), PDO::PARAM_STR);
                @$sql-> bindParam(7, $this->getId_turma(), PDO::PARAM_STR);
                @$sql-> bindParam(8, $this->getId_aluno(), PDO::PARAM_STR);
                @$sql-> bindParam(9, $this->getId_responsavel(), PDO::PARAM_STR);
                if($sql->execute() == 1)
                {
                    return "";
                }
                $this->conn = null;
            }
            catch(PDOException $exc)
            {
                echo "Erro ao salvar o registro. ".$exc->getMessage();
            }
        }

        function consultar()
        {
            try
            {
                $this-> conn = new Conectar();
                $sql = $this->conn->prepare("select * from aluno where Nome like ?"); //informei o ?
                @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);/* inclui esta linha para definir o parametro */
                $sql->execute();
                return $sql->fetchAll();
                $this->conn = null;
            }
            catch(PDOException $exc)
            {
                echo "Erro ao execultar consulta. ". $exc->getMessage();
            }
        }

       


    }//encerramente da classe produto
?>

