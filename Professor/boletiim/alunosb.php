<?php

    session_start();//iniciando a sessão
    
    include_once('class/Mensagem.php');
    include_once('class/Alunosb2.php');
    
    $a = new Alunob2;
    $m = new Mensagem;
    
    $m->getMensagem();//será exibida somente se existir alguma mensagem
    
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Alunos</title>
            
            <!--importando a folha de estilos do bootstrap-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <!--importando nossa folha de estilos-->
            <link rel="stylesheet" href="css/index.css">

        </head>
        <body>

            <!--corpo da página-->
            
            <!--importando o jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            
            <!--importando javascript do bootstrap-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
            <?php
                //se foi clicado para remover uma aluno uma janela modal de confirmação será exibida
                if(isset($_POST['remover'])){
                    $matricula = $_POST['remover'];
                    $a->modalExcluir($matricula);
                }
            ?>
            
                    
            <!-- Barra de links -->
            <div class="container" id="alunos">
                <nav class="navbar navbar-light">
                    <h1>Alunos</h1>

                </nav>
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="boletim2.php">Boletins</a>
                        </li>
                    </ul>
                </nav>

                <!-- Formulário de busca -->
                <form method="GET" class="form-inline" id="alunos_search">   
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="aluno" id="aluno" placeholder="aluno"
                        <?php

                            if(isset($_GET['aluno'])){
                                $nome = $_GET['aluno'];
                                echo('value='.$nome);
                            }

                        ?>
                        >
                    </div>
                    <button type="submit" id="pesquisar" class="btn btn-primary mb-2">Pesquisar</button>
                </form>
                
                <!-- Tabela de registros -->
                <table class="table table-striped" id="table_alunos">
                <tr>
                    <th>Matrícula</th>
                    <th>Aluno</th>
                    <th>Disciplinas</th>
                </tr>
                    <?php
                        
                        if(isset($_GET['aluno'])){//se o filtro de busca foi setado os registros serão filtrados

                            $nome = $_GET['aluno'];
                            $registros = $a->exibir(0, $nome, null, 1);

                        }else{//senão irão aparecer todos os registros

                            $registros = $a->exibir(0, null, null, 1);

                        }

                        //imprimindo os registros do banco
                        while($registro = $registros->fetch()){

                            echo('<tr>');
                            echo('<td>'.$registro['matricula'].'</td>');
                            echo('<td>'.$registro['aluno'].'</td>');
                            echo('<td>'.$registro['disciplinas'].'</td>');
                            echo('</tr>');

                        }

                    ?>
                    
                </table>
                
                </div>
                
          
    
        </body>
    </html>

