<?php

include_once('conexao.php');
include_once('Mensagem.php');

class Boletim {

    public function exibir($id, $matricula){

        global $sistema;

        $pdo = $sistema->getPdo();

        $query = "SELECT * FROM vw_boletins";

        $clausula = array();
        $i = 0;

        if($matricula != null){
            $clausula[$i] = "matricula = ".$matricula;
            $i++;
        }

        $id = (int) $id;
        if($id != 0){
            $clausula[$i] = "id = ".$id;
            $i++;
        }
        
        for($cont = 0; $cont < $i; $cont++){
            if($cont == 0){
                $query .= " WHERE ".$clausula[$cont];
            }else{
                $query .= " AND ".$clausula[$cont];
            }
        }

        $query .= " ORDER BY aluno";

        $sql = $pdo->prepare($query);

        $sql->execute();

        return $sql;
    }
}

       

?>
