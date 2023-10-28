<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/img_Home/logo_pequena.png">
    <title>Quem somos - Crescer Sabendo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/qs.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
  </head>
<!--<style>
.header{
  background: url(../img/quemsomos/fundo.png);
  background-position: center top;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  color: #000000;
  padding: 15% 15%;
  }
  
	</style>-->
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
    <header>
      <font face = "Helvetica"><section class="header">

      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <h1 class="text-center">QUEM SOMOS!!</h1>
                  <p class="lead text-center">A Educação Infantil da Crescer Sabendo tem o propósito<br>
                                              de oferecer todas as condições para os alunos darem os<br> 
                                              primeiros passos na vida escolar, considerando tanto a <br>
                                              alfabetização quanto outros aspectos que desempenham<br>
                                              um papel fundamental no desenvolvimento das crianças.</p>
                 
                               
                  </p>
              </div>
          </div>
      </div>
  </section>
</header>

    <div class="container.container-fluid p-3 my-3 bg-danger-subtle text-black ">
        <div class="row align-items-start">
            <div class="col">
                <div class="clearfix">
                    <center> <img src="img/iic.png" alt="Ong Crescer Sabendo" width="74" height="70"> </center>
                    <center><p><h5>A Educação Infantil da Crescer Sabendo tem o propósito de oferecer todas as condições para os alunos darem os primeiros passos na vida escolar, considerando tanto a alfabetização quanto outros aspectos que desempenham um papel fundamental no desenvolvimento das crianças.</h5>
                        </center></p></font>
                        </div>
                </div>
            </div>
       </div>

    <!--Comeco da historia-->
<div class="container text-center">   
<div class="row align-items-start">
      <div class="col">
        <div class="clearfix">
            <img src="img/ogQS.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="Imagem da Ong Crescer Sabendo" width="100%">
            <p><center><h2>A ONG</h2></center></p>
            <h5>
               <p> A ONG visa por atender as necessidades de ensino de crianças de 4 meses a 5 anos e 11 meses. Ela oferece cursos e aulas preparatórias para o período de alfabetização dos pequenos, e cursos extras curriculares como por exemplo, balé e capoeira, desenho e pintura, aulas de música, e tudo isso para desenvolver a coordenação motora da criança, apresentando o mundo artístico a ela. Os cursos são gratuitos e disponíveis para todo o Brasil na forma presencial em nossa unidade.
            </p>
            </h5>
          </div>
      </div>
  </div>
</div>
<!-------------------------->
<br><br>


<div class="container text-center">
  <hr size="0.4" width="100%" align="center" color="black" noshade>
    <div class="row align-items-start">
      <div class="col">
<div class="container.container-fluid p-3 my-3 bg- text-black ">
    <div class="row align-items-start">
        <div class="col">
            <div class="clearfix">
                <center> <img src="img/professor.png" alt="icoe" width="11%" height="11%" align="left"> </center>
                <h3>Nossa equipe!!:)</h3>
              <center><p><h5>A diversidade e a qualificação é entendida como um valor fundamental 
                  <p> na Crescer Sabendo, por isso, para a organização desse pilar trabalhamos com uma gerencia, na qual 
                    verificamos curriculos procurando e aceitando voluntarios qualificados para atender o nosso ensino e cuidar da melhor e mais segura forma de todas as crianças que aqui estudam.</h5>
                  </center></p>
                    </div>
            </div>
        </div>
   </div>

   
 <br>
   <div class="row align-items-start">
    <div class="col">
<div class="container.container-fluid p-3 my-3 bg- text-black ">
  <div class="row align-items-start">
      <div class="col">
          <div class="clearfix">
            <center> <img src="img/sem-dinheiro.png" alt="icoe" width="11%" height="11%" align="left"> </center>
            <h3>Organização sem fins lucrativos!!:)</h3>
            <center><p><h5>Nossa decisão de criação de uma ong surgiu da falta de ensino gratuito e de qualidade, um problema 
                <p> ainda ser combatido no Brasil. Dessa forma, nosso unico fortalecimento vem de doações, voluntariados e parceiros, a fim de exclusivamente passar um ensino de qualidade.</p>
                </h5>
                </center></p>
                  </div>
          </div>
      </div>
 </div>

 <br>
 <div class="row align-items-start">
    <div class="col">
<div class="container.container-fluid p-3 my-3 bg- text-black ">
  <div class="row align-items-start">
      <div class="col">
          <div class="clearfix">
            <center> <img src="img/escudo-seguro.png" alt="icoe" width="11%" height="11%" align="left"> </center>
            <h3>Seguraça e confiabilidade!!:)</h3>
            <center><p><h5> A segurança dos pequenos é uma prioridade inabalável. Cada detalhe é minuciosamente planejado para garantir um ambiente acolhedor e seguro. Desde a seleção cuidadosa de profissionais capacitados até a manutenção constante dos espaços, tudo é feito com o objetivo de proporcionar um ambiente protegido e propício ao desenvolvimento saudável das crianças.
                <p> </p>
                </h5>
                </center></p>
          </div>
      </div>
 </div>
</div>
</div>
</div>
</div>
    </div></div><div></div>
<hr size="0.4" width="100%" align="center" color="black" noshade>
<br>
              

    <section class="carousel" width="100%">
      <center><h2  >Projetos Extracurriculares</h2></center>
      <font size="4" >Berçario e Infantil</font></center>
      <div class="carousel__container">
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/balet.jpg"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">DANÇA E BALLET:</h5>
            <h6 class="carousel-item__details--subtitle">Postura e consciência corporal</h6>
          </div>
        </div><!------------------------------------>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/musca.jpg"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">MUSICALIZAÇÃO</h5>
            <h6 class="carousel-item__details--subtitle">Consciência rítmica.</h6>
            </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/jud.jpg"
            alt="people"
          /><!------------------------------->
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">JUDO</h5>
            <h6 class="carousel-item__details--subtitle"> Domínio do próprio corpo</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/yoga.jpg"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">YOGA</h5>
            <h6 class="carousel-item__details--subtitle">Redução de ansiedade</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/iter.jpg"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">SOCIOEMOCIONAL</h5>
            <h6 class="carousel-item__details--subtitle">Lidarem com suas emoções</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/BILI.jpg"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">ALFABETIZAÇÃO</h5>
            <h6 class="carousel-item__details--subtitle">Desenvolvimento cognitivo</h6>
          </div>
        </div>

        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="img/PE.jpg"
            alt="people"
          />
          <div class="carousel-item__details">
            <div class="controls">
              <span class="fas fa-play-circle"></span>
              <span class="fas fa-plus-circle"></span>
            </div>
            <h5 class="carousel-item__details--title">SHANTALA-massagem</h5>
            <h6 class="carousel-item__details--subtitle">Sono mais tranquilo.</h6>
          </div>
        </div>

      <div class="carousel-item">
        <img
          class="carousel-item__img"
          src="img/ata.jpg"
          alt="people"
        />
        <div class="carousel-item__details">
          <div class="controls">
            <span class="fas fa-play-circle"></span>
            <span class="fas fa-plus-circle"></span>
          </div>
          <h5 class="carousel-item__details--title">Natação</h5>
          <h6 class="carousel-item__details--subtitle">Seguraça na Agua</h6>
        </div>
      </div>

      <div class="carousel-item">
        <img
          class="carousel-item__img"
          src="img/bb.jpg"
          alt="people"
        />
        <div class="carousel-item__details">
          <div class="controls">
            <span class="fas fa-play-circle"></span>
            <span class="fas fa-plus-circle"></span>
          </div>
          <h5 class="carousel-item__details--title">Desafio Motor </h5>
          <h6 class="carousel-item__details--subtitle">Almofadas e traveseiros</h6>
        </div>
      </div>

      <div class="carousel-item">
        <img
          class="carousel-item__img"
          src="img/lite.jpg"
          alt="people"
        />
        <div class="carousel-item__details">
          <div class="controls">
            <span class="fas fa-play-circle"></span>
            <span class="fas fa-plus-circle"></span>
          </div>
          <h5 class="carousel-item__details--title">Literatura</h5>
          <h6 class="carousel-item__details--subtitle">Hora do Conto</h6>
        </div>
      </div>

      <div class="carousel-item">
        <img
          class="carousel-item__img"
          src="img/textura.jpg"
          alt="people"
        />
        <div class="carousel-item__details">
          <div class="controls">
            <span class="fas fa-play-circle"></span>
            <span class="fas fa-plus-circle"></span>
          </div>
          <h5 class="carousel-item__details--title">Descobrindo texturas</h5>
          <h6 class="carousel-item__details--subtitle">brinquedos e objetos</h6>
        </div>
      </div>

      <div class="carousel-item">
        <img
          class="carousel-item__img"
          src="img/of.jpg"
          alt="people"
        />
        <div class="carousel-item__details">
          <div class="controls">
            <span class="fas fa-play-circle"></span>
            <span class="fas fa-plus-circle"></span>
          </div>
          <h5 class="carousel-item__details--title">Desenvolver oufato</h5>
          <h6 class="carousel-item__details--subtitle">Descobrir cheiros</h6>
        </div>
      </div>
    </div>
  </div>
    </section>
  </div>
  <BR><BR><BR><BR><BR><BR>
  <hr size="0.4" width="100%" align="center" color="black" noshade>
<!-------------------------Os Professores---->
<BR><BR>
  <!--STYLE.CSS------------------->
<center><h2  >Alguns dos Voluntariados <p>Professores e Especialistas</p></h2></center>
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/prof.jpg"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Fabio Abreu-Alfabetização
    </h5>
  </div> 
</div>
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Juliana.png"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Juliana Silva-Yoga
    </h5>
  </div>
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/marcus.png"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Marcus Cassani-Judo
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Vinicius.png"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Vinicius Davila-Socioemocional
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Alicia.png"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Alicia Acheron-Musicalização
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Paula.png"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Paula Deovais-Dança
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Daniel.png"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Daniel Martinegro-Natação
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Lumia.jpg"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Lumia Ameire-Shantala
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Sol.jpg"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Sol lucia-Pintura
    </h5>
  </div>
  
</div> 
<div class="carousel-itemmm">
  <img
    class="carousel-item__img"
    src="img/Cassian.jpg"
    alt="people"
  />
  <div class="carousel-item__details">
    <div class="controls">
      <span class="fas fa-play-circle"></span>
      <span class="fas fa-plus-circle"></span>
    </div>
    <h5 class="carousel-item__details--title">Cassian Cortez-Financeiro
    </h5>
  </div>
</div> 
<br><br> 
<hr size="0.4" width="100%" align="center" color="black" noshade>
<br><br><br>

<!------------Berçario info--------------------------------------->
<div class="container.container-fluid p-3 my-3 bg-danger-subtle text-black ">
      <div class="col">
          <div class="clearfix">
              <center> <img src="img/quadra.png" alt="Ong Crescer Sabendo" width="74" height="70"> </center>
              <center><h2 font >Berçario</p></h2>
                <font size="4" >dos 4 meses aos 2 anos de idade</center>
                  </center></p></font>
                  </div>
          </div>
      </div>

  <br>
  <div class="main-container">
    <div class="cards">
      <div class="card card-1">
        <img src="img/bebe.png" alt="" width="74" height="70">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h4 class="card__title">Higiene e troca de fraldas são realizadas regularmente para manter a limpeza e o conforto dos bebês.
          A alimentação é supervisionada conforme a orientação dos pais, seguindo horários estabelecidos.</h4>
        <p class="card__apply">
        </p>
      </div>
      <div class="card card-2">
        <img src="img/brinquedos.png" alt="" width="74" height="70">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h4 class="card__title">Brincadeiras e atividades são planejadas para estimular o desenvolvimento motor e cognitivo dos bebês.
          Música suave, histórias e brinquedos são utilizados para promover a interação e o aprendizado.</h4>
        <p class="card__apply">
        </p>
      </div>
      <div class="card card-3">
        <img src="img/toalha.png" alt="" width="74" height="70">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h4 class="card__title">O banho é realizado em horários adequados e com muito cuidado para garantir a segurança dos bebês.
          A água é aquecida para proporcionar conforto durante o momento do banho.</h4>
        <p class="card__apply">
        </p>
      </div>
      <div class="card card-5">
        <img src="img/berco.png" alt="" width="74" height="70">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h4 class="card__title">As atividades dos bebês são monitoradas constantemente para garantir seu bem-estar.
          A equipe do berçário mantém uma comunicação constante com os pais, compartilhando informações importantes sobre o dia a dia dos bebês.</h4>
        <p class="card__apply">
        </p>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br>

  <!------------Infatil info--------------------------------------->
<div class="container.container-fluid p-3 my-3 bg-success-subtle text-black ">
  <div class="col">
      <div class="clearfix">
          <center> <img src="img/abra-o-livro.png" alt="Ong Crescer Sabendo" width="74" height="70"> </center>
          <center><h2  >Infantil</p></h2>
            <font size="4">dos 2 anos a 5 anos e 11 meses de idade</center>
              </center></p></font>
              </div>
      </div>
  </div>

<br><br>
<div class="main-container">
<div class="cards">
  <div class="card card-11">
    <img src="img/desenhando.png" alt="" width="74" height="70">
    <div class="card__icon"><i class="fas fa-bolt"></i></div>
    <p class="card__exit"><i class="fas fa-times"></i></p>
    <h4 class="card__title"> - O aprendizado é baseado em atividades lúdicas, como jogos, brincadeiras, músicas e histórias, que estimulam a criatividade e a imaginação.</h4>
    <p class="card__apply">
    </p>
  </div>
  <div class="card card-22">
    <img src="img/enigma.png" alt="" width="74" height="70">
    <div class="card__icon"><i class="fas fa-bolt"></i></div>
    <p class="card__exit"><i class="fas fa-times"></i></p>
    <h4 class="card__title"> - São propostas atividades que favorecem o desenvolvimento cognitivo, como jogos de encaixe, quebra-cabeças e atividades de classificação e sequenciamento.
    </h4>
    <p class="card__apply">
    </p>
  </div>
  <div class="card card-33">
    <img src="img/pais.png" alt="" width="74" height="70">
    <div class="card__icon"><i class="fas fa-bolt"></i></div>
    <p class="card__exit"><i class="fas fa-times"></i></p>
    <h4 class="card__title">- São promovidas atividades que ajudam as crianças a desenvolver habilidades socioemocionais, como empatia, respeito, cooperação e autoexpressão.</h4>
    <p class="card__apply">
    </p>
  </div>
  <div class="card card-44">
    <img src="img/abc.png" alt="" width="74" height="70">
    <div class="card__icon"><i class="fas fa-bolt"></i></div>
    <p class="card__exit"><i class="fas fa-times"></i></p>
    <h4 class="card__title"> - Para as crianças mais velhas, são introduzidos conceitos iniciais de alfabetização, como identificação de letras e sílabas, e noções básicas de números e quantidades.</h4>
    <p class="card__apply">
    </p>
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br>
<!------------------------------------->
  <hr size="0.4" width="100%" align="center" color="black" noshade>
  <br><br><br><br>


<!--------------Horarios--------------->
<center><h2>Horarios de Funcionamento</p></h2>
<font size="4" >De Segunda a Sexta Feira das 6:00h ás 20:00h</font></center>
<br>
<div class="ag-format-container">
    <div class="ag-courses_item">
      <div class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Periodo Integral:
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            07:30 às 19h00 (11 horas e 30 minutos)
          </span>
        </div>
      </div>
    </div>
    <div class="ag-courses_item">
      <div class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Periodo da Manha:
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            08:00 às 12:00 (4 horas)
          </span>
        </div>
      </div>
    </div><!----------->

    <div class="ag-courses_item">
      <div class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Periodo da Tarde:
        </div>

        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            13:00 às 17:00 (4 horas)
          </span>
        </div>
      </div>
    </div>

    <div class="ag-courses_item">
      <div class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Periodo Intermediario
        </div>
     
        <div class="ag-courses-item_date-box">
          Start:
          <span class="ag-courses-item_date">
            A combinar com a Ong escolhida
          </span>
        </div>
      </div>
    </div>
  </div>
   </div></div></div>
<!----------------------------------------->
<br><br><br><br><br>


<!-- fim <section class="aviso-site qs.css"-->

    
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