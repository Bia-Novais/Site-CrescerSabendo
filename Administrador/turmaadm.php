<?php

include_once 'conectar.php';

//parte 1 - atributos
class turma 
{
    private $Id_turma;
    private $Serie;
    

//parte 2 - os gettes e setter

public function getcod_turma()
{
    return $this->Id_turma;
}

public function setcod_turma($Cod_turmaa)
{
    $this->Id_turma = $Cod_turmaa;
}

public function getserie()
{
    return $this->Serie;
}

public function setserie($sseri)
{
    $this->Serie = $sseri;
}





function listar()
{
    try 
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("select * from turma order by Id_turma");
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
        $sql = $this->conn->prepare("insert into turma values (null,?)");
        @$sql-> bindParam(1, $this->getserie(), PDO:: PARAM_STR);
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
        $sql = $this->conn->prepare("delete from turma where Id_turma = ?");
        @$sql-> bindParam(1, $this->getcod_turma(), PDO :: PARAM_STR);
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