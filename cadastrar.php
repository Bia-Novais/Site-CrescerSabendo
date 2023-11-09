
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/img_Home/logo_pequena.png">
    <title>Home - Crescer Sabendo</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/cadacss.css"> 

</head>
<body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <!--Começo do navbar, configurações de responsividade-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
         
          <a class="navbar-brand" href="index.php" >
            <img src="img/img_Home/log.png" alt="Logo" width="110" height="70"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
       

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
                <ul class="nav" >
                <li class="nav-item">
                    <a class="nav-link"  href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sobre Nós
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="QuemSomos.php">Quem Somos</a></li>
                      <li><a class="dropdown-item" href="FALE.php">Fale Conosco</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="Doacao.php">Doações</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Parcerias.php">Parcerias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="voluntarios.php">Voluntariados</a>
              </li>
                </ul>
            </div>
            
        

        <div>
              <!-- Chamada ao modal 1- Acessar-->
             <button type="button" class="btn btn-quarto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Acessar
              </button>
                <!--Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Acessar página do:</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                      <a href="Login.php"><button type="button" class="btn btn-primary" >Aluno</button></a>
                      <a href="Login.php"><button type="button" class="btn btn-secondary" >Professor</button></a>
                      <a href="Login.php"><button type="button" class="btn btn-quarto" >Administrador</button></a>
                    </div>
                  </div>
                </div>
              </div>

                        <!-- Chamada ao modal 2 - registrar-->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              Cadastrar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body two">
                    <a href="PreMatricula.php"><button type="button" class="btn btn-terceiro" >Pré-Matrícula</button></a>
                    <a href="cadastrar.php"><button type="button" class="btn btn-secondary" >Matrícula</button></a>
                    <a href="voluntarios.php"><button type="button" class="btn btn-primary" >Enviar Curriculo</button></a>
                    <a href="Parcerias.php"><button type="button" class="btn btn-quarto" >Criar Parceria</button></a>

                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </nav>
    <!--Fim do navbar-->

        
    <!-- -->
    <?php
      if( isset($_FILES["arquivo"])  && !empty($_FILES["arquivo"]))
      {
        $arquivo =  "./imgbanco/".$_FILES["arquivo"]["name"];
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo);
      }
    ?>
    <?php
      if( isset($_FILES["residencia"])  && !empty($_FILES["residencia"]))
      {

        $residencia =  "./imgbanco/".$_FILES["residencia"]["name"];
        move_uploaded_file($_FILES["residencia"]["tmp_name"], $residencia);
      }
    ?>


                <?php
                    $codcri = $_POST["codcri"];
                    $codres = $_POST["codres"];
                    include_once 'php/Aluno.php';//Enviam o parâmetro para a instâcia, para a 
                    $p = new Aluno();            //execução de método alterar.
                    $p->setId_aluno($codcri);  
                    $p->setId_responsavel($codres); 
                    $pro_bd=$p->alterar();//Chamada de método com retorno - o $p é o parâmetro enviado.
                    //print_r($pro_bd);

                    $codusu = $_POST['codusu'];
                    include_once 'php/Responsavel.php';
                    $r = new Responsavel();    
                    //echo $codres;
                    $p->setId_responsavel($codres); 
                    $r->setId_usuario($codusu); 

                    //print_r($r->getId_usuario());
                    $pro_br=$r->alterar();
                    //print_r($pro_br);
                    
                ?>

              
    
    
        <!--Formulário da matrícula-->
        <h2 style="padding-top: 5%; color: #636363; font-family: 'Script'; " class="text-center">Cadastro da Matrícula</h2>
            <div class="container">
                      <div class="card">
                         <div class="card-body two">
                                    <form action="./cadastrar.php" method="post" class="formPreM" enctype="multipart/form-data">
                                      
                                      <?php
                                          foreach($pro_bd as $pro_mostrar)
                                          {
                                              //Através da propriedade "value" as caixas receberão o valor respectivo ao retorno do "Foreach".
                                      ?>

                                        <p>A matrícula de um aluno em nossa ONG é um passo importante na jornada educacional da criança e um momento
                                           significativo para os pais. Esse processo envolve preencher formulários, fornecer documentos necessários,
                                           como certidão de nascimento e comprovante de residência, além de informações de contato.
                                           Após a matrícula, a ONG se torna um ambiente acolhedor e seguro para o desenvolvimento da criança, 
                                           proporcionando cuidados, aprendizado e interação social fundamentais em seus primeiros anos de vida.</p>
                                           <br><br>
                                       
                                        <h3>Dados da Criança:</h3>
                                        <label for="codcri">Código da Criança: <?php echo $pro_mostrar[0]; ?></label>
                                        <input type="hidden" name="codcri" value='<?php echo $pro_mostrar[0]?>'>
                                       
                                        <label for="nomecri">Nome Completo da criança:</label>
                                        <input type="text" name="nomecri" value='<?php echo $pro_mostrar[1]?>' required>
                                       <label for="rg">RG:</label>
                                         <input type="text" name="rg"  value='<?php echo $pro_mostrar[2]?>' required>
                                        <label for="cpf">CPF:</label>
                                        <input type="text" name="cpf" id="cpf" value='<?php echo $pro_mostrar[3]?>' required /> 

                                        <label for="datacri">Data de Nascimento:</label>
                                        <input type="date" name="datacri" id="datacri" value='<?php echo $pro_mostrar[4]?>'   required />

                                        
                                      
                                        <label for="sexo">Qual o sexo da criança:</label>
                                        <div for="sexo" value='<?php echo $pro_mostrar[5]?>'>
                                          <div class="form-check">
                                            <input class="check" type="radio" name="sexo" id="M" value="M">
                                            <label class="check" for="M">
                                             Masculino
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="check" type="radio" name="sexo" id="F" value="F">
                                            <label class="check" for="F">
                                             Feminino
                                            </label>
                                          </div>
                                        </div>
                                        <label for="arquivo">Anexa imagem da certidão de Nascimento</label>
                                          <input type="file" name="arquivo" id="arquivo" accept="image/*" class="campo" value='<?php echo $pro_mostrar[6]?>' >  <br><br>


                                        <label for="codres">Código do Responsável: <?php echo $pro_mostrar[7]; ?></label>
                                        <input type="hidden" name="codres" id="codres" value='<?php echo $pro_mostrar[7]?>'>

                                        <!--<fieldset disabled>-->
                                        <label for="codtur">Código da turma:</label>
                                        <input type="text" name="codtur" id="codtur" value='<?php echo $pro_mostrar[8]?>'>
                                          <!--</fieldset>-->

                                          <?php
                                              }
                                          ?>

                                          <?php
                                            foreach($pro_br as $pro_mostrarbr)
                                            {
                                            
                                          ?>
                                          
                                          <h3>Dados do Responsável:</h3>

                                        <label for="codres">Código do Responsável: <?php echo $pro_mostrarbr[0]?></label>
                                        <input type="hidden" name="codres" value='<?php echo $pro_mostrarbr[0]?>'>

                                        <label for="nomeres">Nome Completo:</label>
                                        <input type="text" name="nomeres" id="nomeres"  value='<?php echo $pro_mostrarbr[1]?>'  required/>
                                        
                                        <label for="rg">RG:</label>
                                        <input type="text" name="rgres" id="rgres" value='<?php echo $pro_mostrarbr[2]?>'   required/>
                                        
                                        <label for="rescpf">CPF:</label>
                                        <input type="text" name="rescpf" value='<?php echo $pro_mostrarbr[3]?>'  required /> 
                                        
                                        <label for="datares">Data de Nascimento:</label>
                                        <input type="date" name="datares" id="datares" value='<?php echo $pro_mostrarbr[4]?>'   required />
                                        
                                        <label for="telefone">Telefone:</label>
                                        <input type="tel" name="telefone" id="telefone" value='<?php echo $pro_mostrarbr[5]?>'  required />
                                        
                                        <label for="celular">Celular:</label>
                                        <input type="tel" name="celular" id="celular" value='<?php echo $pro_mostrarbr[6]?>'  required />  
                                        
                                        <label for="email">E-mail:</label>
                                        <input type="email" name="email" id="email" value='<?php echo $pro_mostrarbr[7]?>'  required />
                                       
                                        <label for="CEP">CEP</label>
                                        <input type="text" name="cep"  value='<?php echo $pro_mostrarbr[8]?>'  required />
                                      
                                        <label for="endereco">Endereço:</label>
                                        <input type="text" name="endereco" id="endereco" value='<?php echo $pro_mostrarbr[9]?>'  required />
                                      
                                        <label for="residencia">Anexa o comprovante de residência</label>
                                        <input type="file" name="residencia" id="residencia" acccept="image/*" class="campo" value='<?php echo $pro_mostrarbr[10]?>'  required>  
                                        
                                        <label for="codusu">Código de usuário: <?php echo $pro_mostrarbr[11]?></label>
                                        <input type="hidden" name="codusu" value='<?php echo $pro_mostrarbr[11]?>' >

                                        <br> 
                                        
                                        <?php
                                              }
                                          ?>

                                        <br>
                                        </select></div></div>
                                        <br>
                                        <font face="Helvetica"> <button name="btgravar" type="submit" value="Enviar" class="btn btn-secondary">Enviar</button></font>
                                          
                                    

                                      </form>

                                    <?php
                                    extract($_POST, EXTR_OVERWRITE);
                                    if(isset($btgravar))
                                    {
                                        include_once 'php/Aluno.php';
                                        $pro = new Aluno();
                                        $pro->setNome($nomecri);
                                        $pro->setRG($rg);
                                        $pro->setCPF($cpf);
                                        $pro->setDataNasc($datacri);
                                        $pro->setSexo($sexo);
                                        $pro->setArquivo($arquivo);
                                        $pro->setId_turma($codtur);
                                        $pro->setId_aluno($codcri);
                                        $pro->setId_responsavel($codres);
                                        echo "<h3><br><br>".$pro->alterar2()."</h3>";

                                        include_once 'php/Responsavel.php';
                                        $probr = new Responsavel();
                                        $probr->setNome($nomeres);
                                        $probr->setRG($rgres);
                                        $probr->setCPF($rescpf);
                                        $probr->setDataNasc($datares);
                                        $probr->setTelefone($telefone);
                                        $probr->setCelular($celular);
                                        $probr->setEmail($email);
                                        $probr->setCEP($cep);
                                        $probr->setEndereco($endereco);
                                        $probr->setResidencia($residencia);
                                        $probr->setId_responsavel($codres);
                                        $probr->setId_usuario($codusu);
                                        echo "<h3><br><br>".$probr->alterar2()."</h3>";

                                        header("location:AlterarEditora.php");
                                    }
                                   ?>

                                  
                                  <a href = 'index.php'><button type="submit" class="btn btn-primary" >Home</button></a>
                               

                                </div>
                            </div>
                              
                        </div>
                    </div>

          <div class="xfooter">
          <footer class="footer">
            <div class="waves">
              <div class="wave" id="wave1"></div>
              <div class="wave" id="wave2"></div>
              <div class="wave" id="wave3"></div>
              <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                  <ion-icon name="logo-whatsapp"></ion-icon>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
            </ul>
            <ul class="menu">
              <li class="menu__item"><a class="menu__link" href="index.php">Home</a></li>
              <li class="menu__item"><a class="menu__link" href="QuemSomos.php">Quem somos</a></li>
              <li class="menu__item"><a class="menu__link" href="FALE.php">Fale Conosco</a></li>
              <li class="menu__item"><a class="menu__link" href="Doacao.php">Doações</a></li>
              <li class="menu__item"><a class="menu__link" href="Parcerias.php">Parceiros</a></li>
        
            </ul>
        <p>&copy;2023 Crescer Sabendo| Todos os direitos reservados</p>
      </footer>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </div>

    </section>
</body>
</html>
