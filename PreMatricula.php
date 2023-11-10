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
    <link rel="stylesheet" type="text/css" href="css/prematricula.css"> 
    <link rel="stylesheet" href="css/font.css" />

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
        
    <section class="aviso-site">
    </section>

  <!--Formulário de pré-matrícula-->
  <font face = "Helvetica">  <h2 style="padding-top: 5%; color: #636363; " class="text-center">Cadastro de Pré-Matrícula</h2>
</font><div class="container">
                      <div class="card">
                         <div class="card-body two">
                                    <form action=".../mailer/enviar-prematricula.php" method="post" class="formPreM">
                                        
                                    
                                     <p>O objetivo da pré-matrícula é avaliar as condições do aluno que deseja integrar a nossa ONG, 
                                        uma vez que o nosso objetivo é ajudar as crianças que não têm acesso a uma boa educação a encontrar uma educação de qualidade.
                                        Por conseguinte, assim que tivermos avaliado as informações fornecidas, enviaremos uma resposta através do endereço eletrónico (o e-mail) indicado no formulário.
                                        Se for aprovado, será encaminhado para uma nova página para completar a matrícula.</p></font>
                                        
                                          
                                        <h3>Dados da criança:</h3>
                                        <label for="nomecri">Nome Completo da criança:</label>
                                        <input type="text" name="nomecri" placeholder="Digite o Nome Completo" autofocus="true" />
                                        <label for="rg">RG</label>
                                         <input type="text" placeholder="Digite o RG" />
                                        <label for="CPF">CPF</label>
                                        <input type="text" placeholder="Digite o CPF" autofocus="true" /> 
                                        <label for="asc">Data de Nascimento</label>
                                        <input type="text" name="asc" placeholder="Digite a Data de Nascimento" autofocus="true" />

                                       
                                        <label for="sexo">Qual o sexo da criança:</label>
                                          <div class="form-check">
                                            <input class="check" type="radio" name="sexo" id="M" checked>
                                            <label class="check" for="M">
                                             Masculino
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="check" type="radio" name="sexo" id="F">
                                            <label class="check" for="F">
                                             Feminino
                                            </label>
                                          </div>

                                          <label for="irmao">A criança tem irmão matriculado em escola municipal de educação infantil?</label>
                                          <div class="form-check">
                                            <input class="check" type="radio" name="irmao" id="S" checked>
                                            <label class="check" for="S">
                                             Sim
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="check" type="radio" name="irmao" id="N" >
                                            <label class="check" for="N">
                                             Não
                                            </label>
                                          </div>

                                          
                                        
                                        <h3><font face = "Helvetica">Dados do responsável</font>:</h3>
                                        <label for="nomeres"><font face = "Helvetica">Nome Completo do responsavel:</font></label>
                                        <input type="text" name="nomeres" placeholder="Digite seu Nome Completo" autofocus="true" />
                                        <label for="rg"><font face = "Helvetica">RG</font></label>
                                        <input type="text" name="rg" placeholder="Digite seu RG" />
                                        <label for="CPF">CPF</label>
                                        <input type="text" placeholder="Digite seu CPF" autofocus="true" /> 
                                        <label for="asc">Data de Nascimento</label>
                                        <input type="date" placeholder="Digite sua Data de Nascimento" autofocus="true" />
                                        <label for="telefone">Telefone</label>
                                        <input type="tel" name="telefone" placeholder="Digite seu numero de Telefone" autofocus="true" />
                                        <label for="celular">Celular</label>
                                        <input type="tel" placeholder="Digite seu numero de Celular" autofocus="true" />  
                                        <label for="email"><font face = "Helvetica">E-mail</font></label>
                                        <input type="email" name="email" placeholder="Exemplo@gmail.com" autofocus="true" />
                                        <label for="CEP">CEP</label>
                                        <input type="text" placeholder="Digite seu CEP" autofocus="true" />
                                        <label for="endereco">Endereço</label>
                                        <input type="text" placeholder="Ex: Rua Almeida 123, Bairro, São Paulo-SP" autofocus="true" /> 
                                       

                                        <label for="salario">Faixa salarial do responsável:</label>
                                        <select class="simple basic" name="salario">
                                            <option value="salario">Selecione</option>
                                            <option value="1320">R$ 1.320 ao mês</option><br>
                                            <option valeu="1320a2640">De R$ 1.320 a R$ 2.640 ao mês</option>
                                            <option value="mais2640">Mais de R$ 2.640 ao mês </option>
                                        </select>
                                        <br> 
                                        
                                        
                            
                                        <br>
                                        <h3>Dados da informações sobre a Matricula:</h3>
                                        <label for="periodo">Série:</label>
                                        <select class="simple basic">
                                            <option>Selecione</option>
                                            <option>Berçário 1    ( A partir de 3 meses a 1 ano)</option><br>
                                            <option>Berçário 2    ( De 1 a 2 anos)</option>
                                            <option>Maternal      ( De 2 a 4 anos)</option>
                                            <option>Pré-Escola 1  ( De 4 a 5 anos)</option>
                                        </select>
                                        <br> 
                            
                                        <label for="extra">Atividades Extracurriculares</label>
                                        <select class="simple basic" name="extra">
                                            <option value="extra">Selecione</option>
                                            <option value="ballet">Ballet</option>
                                            <option value="musicalizacao">Musicalização</option>
                                            <option value="judo">Judo</option>
                                            <option value="yoga">Yoga</option>
                                            <option value="natacao">Natação</option>
                                        </select>
                                        <br>

                                        <label for="extra">Aulas </label>
                                        <select class="simple basic" name="aulas">
                                            <option value="aulas">Selecione</option>
                                            <option value="socioemocional">Socioemocional</option>
                                            <option value="alfabetizacao">Alfabetização</option>
                                            <option value="literatura">Literatura</option>
                                        </select>
                                        <br>
                            
                        <button type="submit" value="Enviar" class="btn btn-quarto">Enviar</button>
                                    </form>
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