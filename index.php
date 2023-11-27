
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
                    <a href="confirmacao.php"><button type="button" class="btn btn-secondary" >Matrícula</button></a>
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


    <!--Informações sobre a ong-->
    <font face = "Helvetica">
    <section class="header-site">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center" >Onde os Sonhos Ganham Vida!!</h1>
                    <p class="lead text-center" >Oferecemos atividades extracurriculares para desenvolver a 
                      criatividade e a cordenação motora dos pequenos.</p>
                    <p class="text-center"> 
                               
                    </p>
                    <p class="text-center">
                                 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Leva o usuário a página do quem somos-->
    <section class=" content-site">

        <div class="container text-center">
          <h2 style="padding-top: 5%; color: #636363;">Quem Somos</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card text-center">
                      
                        <div class="card-body">
                            <div class="container2">
                          <p class="card-text center" style="padding: 2%;">Apresentamos a nossa ONG, "Crescer Sabendo", que tem como objetivo atender as necessidades educacionais de crianças de 4 meses a 5 anos e 11 meses. Oferece aulas preparatórias para o período de alfabetização das crianças, além de atividades extra-curriculares como balé e capoeira, desenho e pintura, aulas de música, todas com o objetivo de desenvolver a coordenação motora da criança e introduzi-la no mundo artístico. Os cursos são gratuitos e realizados presencialmente em nossa unidade...</p>
                          <a href="QuemSomos.php" class="btn btn-primary center">Continuar Lendo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Quais atividades a Ong oferece-->
        <h2 class="text-center" style="padding-top: 5%; color: #636363;">Atividades que Oferecemos:</h2>
        <div class="swiffy-slider slider-item-reveal slider-item-show3 slider-item-reveal slider-nav-animation 
        slider-nav-animation-scale slider-nav-caret
        container text-center" >
          <ul class="slider-container">
              <li style="background-color:  #b6dbed; padding: 10% 10%;">
                <h4><p style="color: #000000;">Línguagens</p></h4>
                <img src="img/img_Home/languages.png" alt="Línguagens">
                <p style="color: #000000;">Os cursos de línguas são ótimos para a educação das crianças. E quanto mais cedo a criança começar, melhor, 
                pois até os 18 anos a pessoa tem mais facilidade de assimilar os conteúdos, sendo ainda mais fácil se a criança começar entre 2 e 4 anos de idade.</p>
              
              </li>

              <li style="background-color: #ff9bd7; padding: 10% 10%;">
                <h4><p style="color: #000000;">Ballet</p></h4>
                <img src="img/img_Home/rock-and-roll.png" alt="Ballet">
                <p style="color: #000000;">A dança contribui bastante para a melhora do equilíbrio e a postura da criança e dá-lhe uma melhor noção do espaço e do ritmo. Além do mais,
                   a dança está incluída entre as atividades de educação infantil que trabalham a criatividade e a concentração das crianças.</p>
              
              </li>

              <li style="background-color: #ff9770; padding: 10% 10%;">
                <h4><p style="color: #000000;">Capoeira</p></h4>
                <img src="img/img_Home/berimbau.png" alt="Capoeira">
                <p style="color: #000000;">Não estamos a falar apenas de saúde quando sugerimos a prática da capoeira como atividade extracurricular para os seus filhos. A capoeira também ajuda a desenvolver as funções motoras, físicas, cognitivas e sociais da criança.</p>
              
              </li>

              <li style="background-color: #ffd670; padding: 10% 10%;">
                <h4><p style="color: #000000;">Artes</p></h4>
                <img src="img/img_Home/gallery.png" alt="Artes">
                <p style="color: #000000;">A pintura, o desenho e várias outras formas de artesanato trabalham a criatividade através de formas, cores e texturas.
                 Mas não é só isso, a arte é uma forma de comunicação não verbal e as crianças podem expressar-se através dos seus trabalhos.</p>
              
              </li>

              <li style="background-color: #a4eb9b; padding: 10% 10%;">
                <h4><p style="color: #000000;">Música</p></h4>
                <img src="img/img_Home/party.png" alt="Musica">
                <p style="color: #000000;">A música tem o poder de ajudar a acalmar e relaxar, sendo indicada para crianças mais agitadas que precisam trabalhar, entre outras coisas a concentração.
                A cada semestre a criança é apresentada a um instrumento musical diferente.</p>
              
              </li>

              <li style="background-color: #afcd53; padding: 10% 10%;">
                <h4><p style="color: #000000;">Há muito mais...</p></h4>
                <img src="img/img_Home/festa.png" alt="Musica">
                <p style="color: #000000; padding: 10% 10%;">Visite a nossa página <a href="QuemSomos.php" style="color: #fdfdf4;" >sobre nós</a> e descubra mais sobre os nossos cursos!!!
                 
                </p>
              
              </li>
                
              
          </ul>
      
          <button type="button" class="slider-nav"></button>
          <button type="button" class="slider-nav slider-nav-next"></button>
      
          <div class="slider-indicators">
              <button class="active"></button>
              <button></button>
              <button></button>
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
  </font></body>
</html>