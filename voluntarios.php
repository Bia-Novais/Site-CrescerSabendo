<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/img_Home/logo_pequena.png">
    <title>Voluntários - Crescer Sabendo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/volunt.css" />
    <!-- Bootstrap -->

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
    
    <font face = "Helvetica">

        
        <section class="header-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">Seja um Voluntário</h1>
                    <p class="lead text-center">Contribua para a nossa missão sendo um voluntário. <br>
                                                Sua dedicação é fundamental para o nosso trabalho.</p>
                </div>
            </div>
        </div>
    </section>
        <!-- Formulário de Inscrição -->
        
        <div id="order-form-container" class="container p-6 my-md-4 px-md-0">
           <!-- Texto Informativo -->
        <div class="container">
          <p class="lead text-center">Ser um voluntário é uma maneira gratificante de fazer a diferença em nossa comunidade. Se você deseja contribuir com suas habilidades e tempo, preencha o formulário abaixo e junte-se a nós.</p>
      </div>
          <div id="fade" class="hide">
            <div id="loader" class="spinner-border text-info hide" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div id="message" class="hide">
              <div class="alert alert-light" role="alert">
                <h4>Mensagem enviada com sucesso!</h4>
                <p></p>
                <button id="close-message" type="button" class="btn btn-secondary">
                  Fechar
                </button>
              </div>
            </div>
          </div>
          <div id="order-form-container" class="container p-6 my-md-4 px-md-0">
           
            <div id="form-header">
            </div>
            <form id="address-form">
              <div class="row mb-3">
                <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="nome"
                    name="nome"
                    placeholder="Nome"
                    required
                  />
                  <label for="nome">Nome</label>
                </div>
                <div class="col-12 col-sm-6 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="sobrenome"
                    name="sobrenome"
                    placeholder="Sobrenome"
                    required
                  />
                  <label for="sobrenome">Sobrenome</label>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                  <input
                    type="tel"
                    class="form-control shadow-none"
                    id="telefone"
                    name="telefone"
                    placeholder="Telefone"
                    required
                  />
                  <label for="telefone">Telefone</label>
                </div>
                <div class="col-12 col-sm-6 form-floating">
                  <input
                    type="email"
                    class="form-control shadow-none"
                    id="email"
                    name="email"
                    placeholder="Email"
                    required
                  />
                  <label for="email">Email</label>
                </div>
              </div>
              
              <div class="row mb-3">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="cep"
                    name="cep"
                    placeholder="Digite o seu CEP"
                    maxlength="8"
                    minlength="8"
                    required
                  />
                  <label for="cep">Digite o seu CEP</label>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="address"
                    name="address"
                    placeholder="Rua"
                    disabled
                    required
                    data-input
                  />
                  <label for="address">Rua</label>
                </div>
                <div class="col-12 col-sm-6 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="number"
                    name="number"
                    placeholder="Digite o número da residência"
                    disabled
                    required
                    data-input
                  />
                  <label for="number">Digite o número da residência</label>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="complement"
                    name="complement"
                    placeholder="Digite o complemento"
                    disabled
                    data-input
                  />
                  <label for="complement">Digite o complemento</label>
                </div>
                <div class="col-12 col-sm-6 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="neighborhood"
                    name="neighborhood"
                    placeholder="Bairro"
                    disabled
                    required
                    data-input
                  />
                  <label for="neighborhood">Bairro</label>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
                  <input
                    type="text"
                    class="form-control shadow-none"
                    id="city"
                    name="city"
                    placeholder="Cidade"
                    disabled
                    required
                    data-input
                  />
                  <label for="city">Cidade</label>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <select
                    class="form-select shadow-none"
                    id="region"
                    disabled
                    required
                    data-input
                  >
                    <option selected>Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <div class="form-floating">
                  <textarea
                    class="form-control shadow-none"
                    id="descricao"
                    name="descricao"
                    placeholder="Descrição"
                    rows="4"  
                    required
                  ></textarea>
                  <label for="descricao">De que formas você poderia ajudar nossa causa?</label>
                </div>
              </div>
              <div class="container">
                <div class="wrapper">
                  <div class="image-preview">
                    <img id="preview-image" src="img/img_volunt/up.png" alt="Preview Image">
                    <h3><center>Currículo</center></h3>
                </div>
                    
                    
                  
                   
                   <div id="cancel-btn">
                      <i class="fas fa-times"></i>
                   </div>
                   <div class="file-name">
                      File name here
                   </div>
                </div>
              </div>
                <button onclick="defaultBtnActive()" id="custom-btn">Selecione um arquivo</button>
                <input id="default-btn" type="file" hidden>
             </div>
            <script>
          const wrapper = document.querySelector(".wrapper");
          const fileName = document.querySelector(".file-name");
          const defaultBtn = document.querySelector("#default-btn");
          const customBtn = document.querySelector("#custom-btn");
          const cancelBtn = document.querySelector("#cancel-btn i");
          const previewImage = document.getElementById("preview-image");
      
          let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      
          function defaultBtnActive() {
              defaultBtn.click();
          }
      
          defaultBtn.addEventListener("change", function () {
              const file = this.files[0];
              if (file) {
                  const reader = new FileReader();
                  reader.onload = function () {
                      const result = reader.result;
                      previewImage.src = result; // Display the selected image in the preview area
                      wrapper.classList.add("active");
                  }
                  cancelBtn.addEventListener("click", function () {
                      previewImage.src = ""; // Clear the preview when cancel is clicked
                      wrapper.classList.remove("active");
                  })
                  reader.readAsDataURL(file);
              }
              if (this.value) {
                  let valueStore = this.value.match(regExp);
                  fileName.textContent = valueStore;
              }
          });
      </script>
      
                 <br>
              <div class="d-flex justify-content-end">
                <button id="save-btn" type="submit" class="btn btn-primary">
                  Enviar
                </button>
              </div>
            </form>
          </div><br>
        </div>

       
    </section>
   </font>
     <!-- Rodapé -->
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
