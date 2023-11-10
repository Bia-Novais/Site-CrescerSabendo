<?php
    session_start();//iniciando a sessão
    
    include_once('class/Mensagem.php');
    include_once('class/Boletim.php');
    
    $m = new Mensagem;
    $b = new Boletim;
    
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
                <h1>Boletim</h1>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                    Insira o numero de matricula para acessar boletim
                    </ul>
                </nav>

            <form method="GET" class="form-inline" id="boletins_search">   
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control" name="matricula" id="matricula" placeholder="matrícula"
        <?php
            if(isset($_GET['matricula'])){

                $matricula = $_GET['matricula'];
                echo('value='.$matricula);

            }
        ?>
        >
    </div>
    <button type="submit" id="pesquisar" class="btn btn-primary mb-2">Pesquisar</button>
</form>

          
            <table class="table table-striped" id="table_boletins">
                <tr>
                    <th>Matrícula</th>
                    <th>Aluno</th>
                    <th>Disciplina</th>
                    <th>Nota 1° Bim</th>
                    <th>Nota 2° Bim</th>
                    <th>Nota 3° Bim</th>
                    <th>Nota 4° Bim</th>
                </tr>
                <?php
// Verifica se a pesquisa está sendo feita pelo número de matrícula
if(isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];
    $registros = $b->exibir(0, $matricula, null); // carregando os registros de acordo com o filtro de matrícula
} else {
    $registros = $b->exibir(0, null, null); // carregando todos os registros
}

//imprimindo os registros em uma tabela
while($registro = $registros->fetch()){
    if(isset($_GET['matricula'])) {
    echo('<tr>');
    echo('<td>'.$registro['matricula'].'</td>');
    echo('<td>'.$registro['aluno'].'</td>');
    echo('<td>'.$registro['disciplina'].'</td>');
        echo('<td>'.$registro['nota1'].'</td>');
        echo('<td>'.$registro['nota2'].'</td>');
        echo('<td>'.$registro['nota3'].'</td>');
        echo('<td>'.$registro['nota4'].'</td>');
    } else {
        echo('<td>---</td>');
        echo('<td>---</td>');
        echo('<td>---</td>');
        echo('<td>Notas Ocultas</td>');
        echo('<td>Notas Ocultas</td>');
        echo('<td>Notas Ocultas</td>');
        echo('<td>Notas Ocultas</td>');
    }
    echo('</tr>');
}
?>

            </table>
        </div>
    </body>
</html>

