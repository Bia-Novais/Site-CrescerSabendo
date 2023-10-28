<?php

include_once 'conectar.php';

//parte 1 - atributos
class paginas 
{
    private $Id_usuario;
    private $NomeUsuario;
    private $Senha;
    private $Perfil;
    

//parte 2 - os gettes e setter

public function getcod_usuario()
{
    return $this->Id_usuario;
}

public function setcod_usuario($Cod_usuarioo)
{
    $this->Id_usuario = $Cod_usuarioo;
}

public function getnoeusu()
{
    return $this->NomeUsuario;
}

public function setnoeusu($nomeu)
{
    $this->NomeUsuario = $nomeu;
}

public function getsenhaa()
{
    return $this->Senha;
}

public function setsenhaa($senhha)
{
    $this->Senha = $senhha;
}

public function getperfill()
{
    return $this->Perfil;
}

public function setperfill($perfii)
{
    $this->Perfil = $perfii;
}




function listar()
{
    try 
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("select * from usuario order by Id_usuario");
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
        $sql = $this->conn->prepare("insert into usuario values (null,?,?,?)");
        @$sql-> bindParam(1, $this->getnoeusu(), PDO:: PARAM_STR);
        @$sql-> bindParam(2, $this->getsenhaa(), PDO:: PARAM_STR);
        @$sql-> bindParam(3, $this->getperfill(), PDO:: PARAM_STR);
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
        $sql = $this->conn->prepare("delete from usuario where Id_usuario = ?");
        @$sql-> bindParam(1, $this->getcod_usuario(), PDO :: PARAM_STR);
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