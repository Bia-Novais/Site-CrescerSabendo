<?php

include_once 'conectar.php';

//parte 1 - atributos
class professor 
{
    private $Id_professor;
    private $Nome;
    private $RG;
    private $CPF;
    private $DataNasc;
    private $Telefone;
    private $Celular;
    private $Endereco;
    private $CEP;
    private $Id_usuario;
    private $Id_turma;

//parte 2 - os gettes e setter

public function getcod_professor()
{
    return $this->Id_professor;
}

public function setcod_professor($Cod_professoor)
{
    $this->Id_professor = $Cod_professoor;
}

public function getnome()
{
    return $this->Nome;
}

public function setnome($name)
{
    $this->Nome = $name;
}

public function getrg()
{
    return $this->RG;
}

public function setrg($rgg)
{
    $this->RG = $rgg;
}

public function getcpff()
{
    return $this->CPF;
}

public function setcpff($CPDD)
{
    $this->CPF = $CPDD;
}
public function getDAT()
{
    return $this->DataNasc;
}

public function setDAT($datt)
{
    $this->DataNasc = $datt;
}

public function gettelefone()
{
    return $this->Telefone;
}

public function settelefone($tel)
{
    $this->Telefone = $tel;
}

public function getcelu()
{
    return $this->Celular;
}

public function setcelu($celii)
{
    $this->Celular = $celii;
}

public function getede()
{
    return $this->Endereco;
}

public function setede($edere)
{
    $this->Endereco = $edere;
}

public function getcepp()
{
    return $this->CEP;
}

public function setcepp($ceepp)
{
    $this->CEP = $ceepp;
}

public function getIDUSU()
{
    return $this->Id_usuario;
}

public function setIDUSU($usus)
{
    $this->Id_usuario = $usus;
}

public function getIDTUR()
{
    return $this->Id_turma;
}

public function setIDTUR($iddtt)
{
    $this->Id_turma = $iddtt;
}


function listar()
{
    try 
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("select * from professor order by Id_professor");
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
        $sql = $this->conn->prepare("insert into professor values (NULL,?,?,?,?,?,?,?,?,?,?)");
        //@$sql-> bindParam(1, $this->getcod_professor(), PDO :: PARAM_STR);
        @$sql-> bindParam(1, $this->getnome(), PDO:: PARAM_STR);
        @$sql-> bindParam(2, $this->getrg(), PDO:: PARAM_STR);
        @$sql-> bindParam(3, $this->getcpff(), PDO:: PARAM_STR);
        @$sql-> bindParam(4, $this->getDAT(), PDO:: PARAM_STR);
        @$sql-> bindParam(5, $this->gettelefone(), PDO:: PARAM_STR);
        @$sql-> bindParam(6, $this->getcelu(), PDO:: PARAM_STR);
        @$sql-> bindParam(7, $this->getede(), PDO:: PARAM_STR);
        @$sql-> bindParam(8, $this->getcepp(), PDO:: PARAM_STR);
        @$sql-> bindParam(9, $this->getIDUSU(), PDO:: PARAM_STR);
        @$sql-> bindParam(10, $this->getIDTUR(), PDO:: PARAM_STR);
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

function exclusao()
{
    try
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("delete from professor where Id_professor = ?");
        @$sql-> bindParam(1, $this->getcod_professor(), PDO :: PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Excluido com sucesso!";
        }
        else
        {
            return "Erro na Exclusão!";
        }
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao excluir. " , $exc->getMessage();
    }
}

}