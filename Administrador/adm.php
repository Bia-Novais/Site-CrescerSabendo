<?php
	session_start();
	include_once('conexao_recado.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
		<!--google fonts -->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	  <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="css/forma.css">
  </head>

  <body>
    <div class="wrapper">
    
    
            <div class="body-overlay"></div>
            
            <!-------------------------sidebar------------>
                 <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><img src="img/logo.jpeg" class="img-fluid"/><span>Crescer Sabendo</span></h3>
                </div>
                <ul class="list-unstyled components">
                <li  class="active">
                        <a href="#" class="dashboard"><i class="material-icons">painel</i>
                        <span>Painel</span></a>
                    </li>
            
    <!-----Menuuuuuuuuuuuuuuuuuu-->
    <li class="dropdown">
    <a href="adm.php" >
					<i class="material-icons">home</i>Inicio</a>
                </li>

                <li class="dropdown">
          <a href="listaAL.php" >
					<i class="material-icons">face</i>Alunos</a>
                </li>
                
                <li class="dropdown">
          <a href="prof.php" >
					<i class="material-icons">person</i>Professores</a>
                </li>
				
				 <li class="dropdown">
                    <a href="turma.php">
					<i class="material-icons">dataset</i>Turma</a>
          
                      <li class="dropdown">
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" 
                        class="dropdown-toggle">
                        <i class="material-icons">pages</i>
    
                        <span>Paginas</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                
                
                   
                   
                </ul>
    
               
            </nav>
            
            
            
            
            <!--------page-content---------------->
            
            <div id="content">
               
               <!--top--navbar----design--------->
               
               <div class="top-navbar">
                  <div class="xp-topbar">
    
                    <!-- Start XP Row -->
                    <div class="row"> 
                        <!-- Start XP Col -->
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                   <span class="material-icons text-white">signal_cellular_alt
                                   </span>
                             </div>
                        </div> 
                        <!-- End XP Col -->
    
                        <!-- Start XP Col -->
                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">
                                <form>
                                    <div class="input-group">
                                      <input type="search" class="form-control" 
                                      placeholder="Search">
                                      <div class="input-group-append">
                                        <button class="btn" type="submit" 
                                        id="button-addon2">GO</button>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End XP Col -->
    
                        <!-- icone mensagem -->
                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                 <nav class="navbar p-0">
                            <ul class="nav navbar-nav flex-row ml-auto">   
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                       <span class="material-icons">notifications</span>
                                       <span class="notification">4</span>
                                   </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>
                                      
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="material-icons">question_answer</span>
    
                                    </a>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" data-toggle="dropdown">
                                    <img src="img/user.jpg" style="width:40px; border-radius:50%;"/>
                                    <span class="xp-user-live"></span>
                                    </a>
                                    <ul class="dropdown-menu small-menu">
                                        <li>
    
                                            <a href="#">
        <span class="material-icons">person_outline</span>Seu Perfil</a>
    </li>
    <li>
       <a href="#"><span class="material-icons">settings</span>Config</a>
          </li>
      <li>
    <a href="#"><span class="material-icons">logout</span>Sair</a>
           </li>
        </ul>
       </li>
     </ul>
    </nav>
                                
                            </div>
                        </div>
                        <!-- End XP Col -->
    
                    </div> 
                    <!-- End XP Row -->
    
                </div>
                 <div class="xp-breadcrumbbar text-center">
                    <h4 class="page-title">Administrador</h4>  
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Booster</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                      </ol>                
                </div>
                
               </div>
               
               
		   
		   
		   <!--------main-content------------->
		   
		   <div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Painel</h2>
        </div>
        <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
          
        </div>
      </div>
    </div>
    
<!----------html code compleate----------->

<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$request = md5(implode($_POST));
				if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){
					echo "Recado ja foi salvo!";
				}else{
					$_SESSION['ultima_request']  = $request;
					if(isset($_POST['usuario'])){
						$usuario = $_POST['usuario'];
						$email = $_POST['email'];
						$recado = $_POST['recado'];
						$result_recado = "INSERT INTO recados (nome, email, recado, created) VALUES ('$usuario', '$email', '$recado', NOW())";						
						$resultado_recados= mysqli_query($conn, $result_recado);
						//Enviar e-mail
					}
				}
			}	
				
		?>
    <!----Mostra dos recados--->
				<h1><font color= "black">Mural de recados</font></h1>
				<h2><font color= "black">Recados</font></h2>
				<?php
					$result_recado_bd = "SELECT * FROM recados";
					$resultado_recado_bd = mysqli_query($conn, $result_recado_bd);
					if(mysqli_num_rows($resultado_recado_bd) <= 0 ){
						echo "Nenhum recado...";
					}else{
						while($rows = mysqli_fetch_assoc($resultado_recado_bd)){
							?>							
							<div class="media">
								<div class="media-body">
									<h4 class="media-heading"><?php echo $rows['nome']; ?></h4>
									<?php echo $rows['recado']; ?>
								</div>
							</div>
							<?php
						}
					}
				?>	
  
  <br><br><br>
  <h2><font color= "black">Adicionar recados</font></h2>
      <div class="container theme-showcase" role="main">
			<div class="page-header">
			
				<form action="" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nome:</label>
						<input type="text" name="usuario" class="form-control" placeholder="Nome Completo" required>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Recado: :</label>
						<textarea  name="recado" class="form-control" rows="3"></textarea>
					</div>
					<input type="submit" class="btn-submit" value="Enviar">
				</form>			
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>






  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>


