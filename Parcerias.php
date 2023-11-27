<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/img_Home/logo_pequena.png">
    <title>Parcerias - Crescer Sabendo</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <link href="jarallax.css">
    <link rel="stylesheet" href="css/parcerias.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">

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

    <!-- Começo da pag Parcerias -->

      
      <section class="main-container">

        <div class="tab-nav-bar">
          <div class="tab-navigation">
            <ul class="tab-menu">
              <li class="tab-btn active">Kedu</li>
              <li class="tab-btn">Porticus</li>
              <li class="tab-btn">Roche</li>
            </ul>
          </div>
        </div>

        <div class="tab-content">

          <div class="tab active">
            <div class="row">
              <div class="left-column">
                <div class="img-card">
                  <img src="img/img_Parc/foto1.jpg" alt="">
                </div>
              </div>
              <div class="right-column">
                <div class="info">
                  <h2 class="parc">Kedu</h2>
                  <div class="descricao">
                    <p>Kedu é uma das parcerias que a nossa Ong possui. A Kedu nos ajuda a atender os responsáveis 
                      pelos alunos de um jeito tranquilo, com uma relaçao mais amistosa com eles. Planejamos nossas 
                      escolas com um ótimo futuro com a ajuda da Kedu.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab">
            <div class="row">
              <div class="left-column">
                <div class="img-card">
                  <img src="img/img_Parc/foto2.jpg" alt="">
                </div>
              </div>
              <div class="right-column">
                <div class="info">
                  <h2 class="parc">Porticus</h2>
                  <div class="descricao">
                    <p>Porticus é uma das outras das nossas parcerias. Além de nos fornecer uma boa maneira para as
                      crianças sobre a formar de ajudar e cuidar do nosso planeta, recebemos e também fornecemos 
                      livros didáticos para crianças que não possuem condições o uso.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab">
            <div class="row">
              <div class="left-column">
                <div class="img-card">
                  <img src="img/img_Parc/foto3.jpg" alt="">
                </div>
              </div>
              <div class="right-column">
                <div class="info">
                  <h2 class="parc">Roche</h2>
                  <div class="descricao">
                    <p>A Roche, assim como Kedu, nos ajuda a ter uma melhor relação com os responsáveis das 
                      crianças, principalmente com aquelas que apresentam doenças que afetam seu desenvolvimento
                      ou seu aprendizado. Com a Roche, temos maneiras certas de ensinar os estudos para as
                      crianças com deficiências.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
  
      </section>

      <script src="js/parcerias.js"></script>

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  
    <!-- Fim da pag Parcerias -->

  
      <!-- <section class="aviso-site">


    </section> -->

        <!--Formulário de pré-matrícula
            <div class="container text-center">
              <h2 style="padding-bottom: 20px; padding-top: 20px;">Quem Somos</h2>
              <div class="row">
                  <div class="col-12">
                      <div class="card text-center">
                        
                          <div class="card-body two">
                              <div class="container2" style="padding: 40px 20px;">
                                <form action="./php/enviar-prematricula.php" method="POST">
                  
                                  <label for="nomea" class="form-label" >Nome Completo do Aluno</label>
                                  <input type="text" class="form-control" name="nomea" id="nomea" >
                                  
                                  <label for="datan" class="form-label">Data de Nascimento do Aluno</label>
                                  <input type="date" name="idade" class="form-control" id="datan">
                                  
                                  <label for="nomer" class="form-label">Nome Completo da Mãe (ou Resposável 1)</label>
                                  <input type="text" name="nomer" class="form-control" id="nomer">
          
                                  <label for="nomedois" class="form-label">Nome Completo do Pai (Responsável 2)</label>
                                  <input type="text" name="nomedois" class="form-control" id="nomedois">
          
                                  <label for="tele" class="form-label">Telefone para Contato</label>
                                  <input type="tel" name="tele" class="form-control" id="tele">
          
                                  <label for="email" class="form-label">E-mail do Responsável 1</label>
                                  <div class="input-group">
                                    <div class="input-group-text" id="btnGroupAddon">@</div>
                                    <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                  </div>
                                  <div id="emailHelp" class="form-text">Nunca compartilharemos o seu e-mail com mais ninguém.</div>
                                <button type="submit" class="btn btn-terceiro">Submit</button>
                                </form> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>-->

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