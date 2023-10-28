<?php

include_once 'conectar.php';

//parte 1 - atributos
class aluno 
{
    private $Id_aluno;
    private $Nome;
    private $RG;
    private $CPF;
    private $DataNasc;
    private $Id_responsavel;
    private $Id_turma;
    
//parte 2 - os gettes e setter

public function getcod_aluno()
{
    return $this->Id_aluno;
}

public function setcod_aluno($Cod_alunoo)
{
    $this->Id_aluno = $Cod_alunoo;
}

public function getnome()
{
    return $this->Nome;
}

public function setnome($name)
{
    $this->Nome = $name;
}

public function getRg()
{
    return $this->RG;
}

public function setRg($rgg)
{
    $this->RG = $rgg;
}

public function getCpf()
{
    return $this->CPF;
}

public function setCpf($cpff)
{
    $this->CPF = $cpff;
}

public function getdatNac()
{
    return $this->DataNasc;
}

public function setdatNasc($dtnasc)
{
    $this->DataNasc = $dtnasc;
}

public function getcod_respon()
{
    return $this->Id_responsavel;
}

public function setcod_respon($codresponn)
{
    $this->Id_responsavel = $codresponn;
}

public function getcod_turma()
{
    return $this->Id_turma;
}

public function setcod_turma($codturmaa)
{
    $this->Id_turma = $codturmaa;
}

function listar()
{
    try 
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("select * from aluno order by Id_aluno");
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch (PDOException $exc)
    {
      echo "Erro ao execultar consulta. " . $exc->getMessage();
    }
}

function salvar()
{
    try
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("insert into aluno values (null,?,?,?,?,?,?)");
        //@$sql-> bindParam(1, $this->getiid_aluno(), PDO :: PARAM_STR);
        @$sql-> bindParam(1, $this->getnome(), PDO:: PARAM_STR);
        @$sql-> bindParam(2, $this->getRg(), PDO:: PARAM_STR);
        @$sql-> bindParam(3, $this->getCpf(), PDO:: PARAM_STR);
        @$sql-> bindParam(4, $this->getdatNasc(), PDO:: PARAM_STR);
        @$sql-> bindParam(5, $this->getcod_respon(), PDO:: PARAM_STR);
        @$sql-> bindParam(6, $this->getcod_turma(), PDO:: PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Registro salvo com sucesso!" ;
        }
        $this-> conn = null;
    }
    catch (PDOExeception $exc)
    {
        echo "Erro ao salvar o registro. " . $exc->getMessage();
    }
}



}