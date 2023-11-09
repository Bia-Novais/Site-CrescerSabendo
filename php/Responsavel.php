
<?php
    include_once 'Administrador/Conectar.php';

    // parte1 - atributos
    class Responsavel
    {
        private $Id_responsavel;
        private $Nome;
        private $RG;
        private $CPF;
        private $DataNasc;
        private $Telefone;
        private $Celular;
        private $email;
        private $CEP;
        private $Endereco;
        private $residencia;
        private $Id_usuario;
        private $conn;

        //parte 2 - os gettes e setter

        public function getId_responsavel()
        {
            return $this->Id_responsavel;
        } 

        public function setId_responsavel($iid)
        {
            $this->Id_responsavel = $iid;
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

        public function getTelefone()
        {
            return $this->Telefone;
        } 

        public function setTelefone($tele)
        {
            $this->Telefone = $tele;
        }

        public function getCelular()
        {
            return $this->Celular;
        } 

        public function setCelular($celu)
        {
            $this->Celular = $celu;
        }

        public function getEmail()
        {
            return $this->Email;
        } 

        public function setEmail($email)
        {
            $this->Email = $email;
        }

        public function getCEP()
        {
            return $this->CEP;
        } 

        public function setCEP($cep)
        {
            $this->CEP = $cep;
        }

        public function getEndereco()
        {
            return $this->Endereco;
        } 

        public function setEndereco($endereco)
        {
            $this->Endereco = $endereco;
        }

        public function getResidencia()
        {
            return $this->Residencia;
        } 

        public function setResidencia($residencia)
        {
            $this->Residencia = $residencia;
        }

        public function getId_usuario()
        {
            return $this->Id_usuario;
        } 

        public function setId_usuario($usuario)
        {
            $this->Id_usuario = $usuario;
        }

        //parte 3 - método 
        function salvar()
        {
            try
            {
                $this-> conn = new Conectar();
                $sql = $this->conn->prepare("insert into responsavel values (null,?,?,?,?,?,?,?,?,?,?,null)");
                @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
                @$sql-> bindParam(2, $this->getRG(), PDO::PARAM_STR);
                @$sql-> bindParam(3, $this->getCPF(), PDO::PARAM_STR);
                @$sql-> bindParam(4, $this->getDataNasc(), PDO::PARAM_STR);
                @$sql-> bindParam(5, $this->getTelefone(), PDO::PARAM_STR);
                @$sql-> bindParam(6, $this->getCelular(), PDO::PARAM_STR);
                @$sql-> bindParam(7, $this->getEmail(), PDO::PARAM_STR);
                @$sql-> bindParam(8, $this->getCEP(), PDO::PARAM_STR);
                @$sql-> bindParam(9, $this->getEndereco(), PDO::PARAM_STR);
                @$sql-> bindParam(10, $this->getResidencia(), PDO::PARAM_STR);
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
                $sql = $this->conn->prepare("select * from responsavel where Id_usuario = ?"); //infoemei o ?(parametro)
                @$sql-> bindParam(1, $this->getId_usuario(), PDO::PARAM_STR);
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
                $sql = $this->conn->prepare("update responsavel set Id_responsavel = ?, Nome = ?, RG = ?, CPF = ?, DataNasc = ?, Telefone = ?, Celular = ?, email = ?, CEP = ?, Endereco = ?, residencia = ? where Id_usuario = ?");
                @$sql-> bindParam(1, $this->getId_responsavel(), PDO::PARAM_STR);
                @$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
                @$sql-> bindParam(3, $this->getRG(), PDO::PARAM_STR);
                @$sql-> bindParam(4, $this->getCPF(), PDO::PARAM_STR);
                @$sql-> bindParam(5, $this->getDataNasc(), PDO::PARAM_STR);
                @$sql-> bindParam(6, $this->getTelefone(), PDO::PARAM_STR);
                @$sql-> bindParam(7, $this->getCelular(), PDO::PARAM_STR);
                @$sql-> bindParam(8, $this->getEmail(), PDO::PARAM_STR);
                @$sql-> bindParam(9, $this->getCEP(), PDO::PARAM_STR);
                @$sql-> bindParam(10, $this->getEndereco(), PDO::PARAM_STR);
                @$sql-> bindParam(11, $this->getResidencia(), PDO::PARAM_STR);
                @$sql-> bindParam(12, $this->getId_usuario(), PDO::PARAM_STR);
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
                $sql = $this->conn->prepare("select * from responsavel where Nome like ?"); //informei o ?
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

