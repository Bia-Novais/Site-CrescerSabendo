<?php
    session_start();//iniciando a sessão
    
    include_once('class/Mensagem.php');
    include_once('class/Boletim2.php');
    
    $m = new Mensagem;
    $b = new Boletim2;
    
    $m->getMensagem();//exibindo a mensagem somente se existir
    
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Boletins</title>
            
            <!--importando a folha de estilos do bootstrap-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!--importando nossa folha de estilos-->
            <link rel="stylesheet" href="css/boletins.css">

            <!--importando o jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!--importando javascript do bootstrap-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
        </head>
        <body>

            <!--corpo da página-->

            <?php
                //se um boletim foi selecionado para exclusão aparecerá uma janela modal perguntando se deseja mesmo excluir
                if(isset($_POST['remover'])){
                    $id = $_POST['remover'];
                    $b->modalExcluir($id);
                }
            ?>

            <div class="container" id="boletins">
                <nav class="navbar navbar-light">
                    <h1>Boletins</h1>
                    <a class="navbar-brand" href="inserir_boletim2.php">
                        <button class="btn btn-primary">inserir</button>
                    </a>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="alunosb.php">Alunos</a>
                        </li>
                    </ul>
                </nav>

                <form method="GET" class="form-inline" id="boletins_search">   
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="aluno" id="aluno" placeholder="aluno"
                        <?php
                            if(isset($_GET['aluno'])){

                                $nome_aluno = $_GET['aluno'];
                                echo('value='.$nome_aluno);

                            }
                        ?>
                        >
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="disciplina" id="disciplina" placeholder="disciplina"
                        <?php
                            if(isset($_GET['disciplina'])){

                                $nome_disciplina = $_GET['disciplina'];
                                echo('value='.$nome_disciplina);

                            }
                        ?>
                        >
                    </div>
                    <button type="submit" id="pesquisar" class="btn btn-primary mb-2">Pesquisar</button>
                </form>
              
                <table class="table table-striped" id="table_boletins2">
                <tr>
                    <th>Matrícula</th>
                    <th>Aluno</th>
                    <th>Disciplina</th>
                    <th>Nota 1° Bim</th>
                    <th>Nota 2° Bim</th>
                    <th>Nota 3° Bim</th>
                    <th>Nota 4° Bim</th>
                    <th colspan="2">Ações</th>
                </tr>
                <?php
                    
                    if(isset($_GET['aluno']) && isset($_GET['disciplina']) ){//se os filtros de busca foram setados
                        $aluno = $_GET['aluno'];
                        $disciplina = $_GET['disciplina'];


                        $registros = $b->exibir(0, $aluno, $disciplina);//carregando os registros de acordo com os filtros
                    }else{//senão foram setados
                        $registros = $b->exibir(0, null, null);//carregando todos os registros
                    }

                    //imprimindo os registros em uma tabela
                    while($registro = $registros->fetch()){

                        echo('<tr>');
                        echo('<td>'.$registro['matricula'].'</td>');
                        echo('<td>'.$registro['aluno'].'</td>');
                        echo('<td>'.$registro['disciplina'].'</td>');
                        echo('<td>'.$registro['nota1'].'</td>');
                        echo('<td>'.$registro['nota2'].'</td>');
                        echo('<td>'.$registro['nota3'].'</td>');
                        echo('<td>'.$registro['nota4'].'</td>');
                        echo('<td>');
                        echo("<form method='GET' action='editar_boletim2.php'>");
                        echo("<input type='hidden' name='id' value='".$registro['id']."'>");
                        echo("<button type='submit' class='btn btn-primary'>Editar</button>");
                        echo("</form>");
                        echo('</td>');
                        echo('<td>');
                        echo("<form method='POST'>");
                        echo("<input type='hidden' name='remover' value='".$registro['id']."'>");
                        echo("<button type='submit' class='btn btn-danger'>Remover</button>");
                        echo("</form>");
                        echo('</tr>');

                    }
                    
                ?>
                               
                </table>
                </div>

          
    
        </body>
    </html>

