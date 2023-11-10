<?php

    include_once('conexao.php');//importando a conexão com o banco de dados
    include_once('Mensagem.php');//importando a classe Mensagem

    Class Disciplina{

        //função para exibir os dados das disciplinas de acordo com os parâmetros de filtragem
        public function exibir($codigo, $nome, $disciplina, $status_codigo){

            global $sistema;

            $pdo = $sistema->getPdo();

            $query = "SELECT * FROM vw_disciplinas";

            $clausula = array();
            $i = 0;

            if($nome != null){
                $clausula[$i] = "disciplina LIKE '%".$nome."%'";
                $i++;
            }

            if($codigo != "0"){
                $codigo = (int) $codigo;
                $status_codigo = (int) $status_codigo;
                if($status_codigo > 0){
                    $clausula[$i] = "codigo = ".$codigo;
                }else{
                    $clausula[$i] = "codigo != ".$codigo;
                }
                $i++;
            }

            if($disciplina != null){
                $clausula[$i] = "disciplina = '".$disciplina."'";
                $i++;
            }

            for($cont = 0; $cont < $i; $cont++){
                if($cont == 0){
                    $query .= " WHERE ".$clausula[$cont];
                }else{
                    $query .= " AND ".$clausula[$cont];
                }
            }

            $query .= " ORDER BY disciplina";

            $sql = $pdo->prepare($query);

            $sql->execute();

            return $sql;
        }

        //função para inserir uma nova disciplina no banco de dados
        public function inserir($nome){

            global $sistema;

            $pdo = $sistema->getPdo();

            $sql = $pdo->prepare("CALL insert_disciplina(:nome)");
            $sql->bindValue(":nome", $nome);
            $sql->execute();
        }
        
        //função que verifica se essa disciplina pode ser cadastrada
        public function valida_disciplina($nome){
            
            $registros = $this->exibir(0, null, $nome, 0);
            
            $linhas = $registros->rowCount();
            
            if($linhas > 0){
                
                $msg = ("Erro, essa disciplina já está registrada!");
                
            }else{
                
                $msg = ("Pode inserir a disciplina!");
                
            }
            
            return $msg;
        }
        
        //função que verifica a disponibilidade de uso do novo nome de uma disciplina a ser atualizada
        public function verificar_disponibilidade($codigo, $nome){
            
            $registros = $this->exibir($codigo, null, $nome, 0, 0);
            
            $linhas = $registros->rowCount();
            
            if($linhas > 0){
                
                $msg = "Erro, esse nome já está em uso!";
                
            }else{
                
                $msg = "Pode atualizar a disciplina!";
                
            }
            
            return $msg;
        }

        //função que atualiza os dados das disciplinas
        public function editar($codigo, $nome){

            global $sistema;

            $pdo = $sistema->getPdo();

            $sql = $pdo->prepare("CALL update_disciplina(:codigo, :nome)");
            $sql->bindValue(":codigo", (int) $codigo);
            $sql->bindValue(":nome", $nome);

            $sql->execute();
        }

        //função que exclui uma disciplina do banco
        public function excluir($codigo){

            global $sistema;

            $pdo = $sistema->getPdo();

            $sql = $pdo->prepare("CALL delete_disciplina(:codigo)");
            $sql->bindValue(":codigo", (int) $codigo);

            $sql->execute();
        }

        //função que retorna somente as disciplinas que o aluno faz ou somente as disciplinas que o aluno não faz
        public function aluno_disciplinas($matricula, $status, $codigo){

            global $sistema;

            $pdo = $sistema->getPdo();

            if($codigo != "0"){
                $sql = $pdo->prepare("SELECT * FROM disciplinas WHERE faz_disciplina(codigo, :matricula) = :s OR codigo = :codigo");
                $sql->bindValue(":matricula", (int) $matricula);
                $sql->bindValue(":s", (int) $status);
                $sql->bindValue(":codigo", (int) $codigo);
            }else{

                $sql = $pdo->prepare("SELECT * FROM disciplinas WHERE faz_disciplina(codigo, :matricula) = :s");
                $sql->bindValue(":matricula", (int) $matricula);
                $sql->bindValue(":s", (int) $status);
            }
            $sql->execute();

            return $sql;
        }
        
        //função que retorna os dados de uma determinada disciplina
        public function get($codigo){
            
            global $sistema;
            
            $pdo = $sistema->getPdo();
            
            $sql = $pdo->prepare("SELECT * FROM disciplinas WHERE codigo = :codigo");
            $sql->bindValue(":codigo", (int) $codigo);
            
            $sql->execute();
            
            $disciplina = $sql->fetch();
            
            return $disciplina;
        }
        
        //função que exibe uma janela modal para exclusão de uma determinada disciplina
        public function modalExcluir($codigo){
            
            $msg = new Mensagem;
            
            $disciplina = $this->get($codigo);
            
            $conteudo = "Tem certeza de que deseja excluir a disciplina ".$disciplina['nome']."?";
            
            $msg->modalExcluir("Excluir disciplina", $conteudo, "disciplinas", $codigo);
        }

    }

?>
