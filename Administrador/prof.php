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
    <link rel="stylesheet" href="css/forma.css">
		<!--google fonts -->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	  <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

    <style>
      <style>

table {

  border-collapse: collapse;

  width: 100%;

}

th, td {

  padding: 6px;

  text-align: center;

}
      </style>
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
                    <li class="breadcrumb-item active" aria-current="page">Professores</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
		   
		    <!------main-content-start-----------> 
		     
            <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Cadastro de Professores</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center"></div><br><br>
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Adicionar novo professor</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Deletar professor</span>
							   </a>
                               <a href="#editEmployeeModal" class="btn btn-warning" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Editar professor</span>
							   </a>
                               <a href="#consuEmployeeModal" class="btn btn-primary" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Consultar professor</span>
							   </a>
							 </div>
					     </div>
					   </div>
    <!---------------------------------------------------------->


    <?php

    include_once 'profadm.php';

    $p = new professor();
    $pro_bd=$p->listar();
    
    ?>
<center>
  <table>
<tr>
  <th><font color ="black">Cod. professor</font> </th>
  <th><font color ="black">Nome </font> </th>
  <th><font color ="black">RG</font> </th>
  <th><font color ="black">CPF</font> </th>
  <th><font color ="black">Data de nasc.</font> </th>
  <th><font color ="black">Telefone</font> </th>
  <th><font color ="black">Celular </font> </th>
  <th><font color ="black">Endereço</font> </th>
  <th><font color ="black">CEP</font> </th>
  <th><font color ="black">Cod. usuario</font> </th>
  <th><font color ="black">Cod. turma</font> </th>
  
</tr>

   <?php
  
   foreach($pro_bd as $pro_mostrar)
   {
        echo"<tr>";
        echo "<td>" .$pro_mostrar[0]."</td>";
        echo "<td>" .$pro_mostrar[1]."</td>";    
        echo "<td>" .$pro_mostrar[2]."</td>";     
        echo "<td>" .$pro_mostrar[3]."</td>";  
        echo "<td>" .$pro_mostrar[4]."</td>";    
        echo "<td>" .$pro_mostrar[5]."</td>"; 
        echo "<td>" .$pro_mostrar[6]."</td>";
        echo "<td>" .$pro_mostrar[7]."</td>";
        echo "<td>" .$pro_mostrar[8]."</td>";
        echo "<td>" .$pro_mostrar[9]."</td>";
        echo "<td>" .$pro_mostrar[10]."</td>";
        echo"</tr>";
       
   }
      
      ?>

  </table></center>

<!----------html code compleate----------->


  <!----add-modal start--------->
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Adicionar professor</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>
   <div class="box-formulario">        
        <div class="formulario">
            <div class="box-title">
              <h2 class="title">Adicionar
                <p class="subtitle">Adicione novos professores</p>
              </h2>
            </div>
            <form name = "aluno" method = "POST" action = "">   
                <span>
                    <input name = "Nome" type = "text"class="input-card"  placeholder="Nome" autocomplete="off" />
                    <label for="cod"> <i class="icon icon-user-outline"></i> </label>
                </span>
                <span>
                    <input name = "RG" type = "text"  class="input-card" placeholder="rg" autocomplete="off" />
                    <label for="nnome"> <i class="icon icon-mail-3"></i> </label>
                </span>
                <span>
                    <input name = "CPF" type = "text"  class="input-card" placeholder="cpf" autocomplete="off" />
                    <label for="respons"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "DataNasc" type = "text"  class="input-card" placeholder="data nasc" autocomplete="off" />
                    <label for="ender"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Telefone" type = "text"  class="input-card" placeholder="telefone" autocomplete="off" />
                    <label for="cpff"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Celular" type = "text"  class="input-card" placeholder="celular" autocomplete="off" />
                    <label for="rgg"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Endereco" type = "text"  class="input-card" placeholder="endereco" autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "CEP" type = "text"  class="input-card" placeholder="CEP" autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Id_usuario" type = "text"  class="input-card" placeholder="cod usuario" autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Id_turma" type = "text"  class="input-card" placeholder="cod turma" autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <div class="box-pulse">
                     <input name="enviarbt" type="submit" value="Add" class="btn-submit" > 
                     <input type="reset" value="Sair" class="btn-reset">
                    </div>
         </form>
        </div>
      </div><!--Box Formulario-->
    </div>
  </div>
  </div>

<?php
extract($_POST, EXTR_OVERWRITE);
if (isset($enviarbt))
{
    include_once 'profadm.php';
    $pro = new professor();
    $pro_bd=$p->listar();
    //$pro -> setcod_professor($Cod_professor);
    $pro -> setnome($Nome);
    $pro -> setrg($RG);
    $pro -> setcpff($CPF);
    $pro -> setDAT($DataNasc);
    $pro -> settelefone($Telefone);
    $pro -> setcelu($Celular);
    $pro -> setede($Endereco);
    $pro -> setcepp($CEP);
    $pro -> setIDUSU($Id_usuario);
    $pro -> setIDTUR($Id_turma);
    echo "<h3><br><br>" . $pro->salvar() . "</h3>";

}

?>
					   <!----fim-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->

          

<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">

          <form action="./prof.php/#Alterar" method="post" enctype="multipart/form-data">
            <label>Código do Professor</label>
              <input type="text" name= "Id_professor" class="form-control" required><br><br>

              <button type="button" name="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button name="btconsultar" type="submit" class="btn btn-success">Buscar</button>
          </form>
		    </div>
      </div>
    </div>
  </div>
</div>


<!----alterar start--------->
                <?php
                    $Id_professor = $_POST["Id_professor"];
                    include_once 'profadm.php';
                    $p = new professor();            
                    $p->setcod_professor($Id_professor);
                    $pro_bd=$p->alterar();
                ?>


<div class="modal fade" tabindex="-1" name="Alterar" id="Alterar" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alterar professor</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>
   <div class="box-formulario">        
        <div class="formulario">
            <div class="box-title">
              <h2 class="title">Alterar
                <p class="subtitle">Alterar professores</p>
              </h2>
            </div>
            <form name = "aluno" method = "POST" action = "">   
                  
                  <?php

                  foreach($pro_bd as $pro_mostrar)
                    {
                  ?>
                  <span>
                    <input name = "Id_professor" type = "hidden" class="input-card" <?php echo $pro_mostrarbr[0]?> autocomplete="off" />
                    <label for="codpro"> <i class="icon icon-user-outline"></i> </label>
                </span>
                <span>
                    <input name = "Nome" type = "text"class="input-card" value='<?php echo $pro_mostrarbr[1]?>' autocomplete="off" />
                    <label for="cod"> <i class="icon icon-user-outline"></i> </label>
                </span>
                <span>
                    <input name = "RG" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[2]?>' autocomplete="off" />
                    <label for="nnome"> <i class="icon icon-mail-3"></i> </label>
                </span>
                <span>
                    <input name = "CPF" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[3]?>' autocomplete="off" />
                    <label for="respons"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "DataNasc" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[4]?>' autocomplete="off" />
                    <label for="ender"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Telefone" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[5]?>' autocomplete="off" />
                    <label for="cpff"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Celular" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[6]?>' autocomplete="off" />
                    <label for="rgg"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Endereco" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[7]?>' autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "CEP" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[8]?>' autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Id_usuario" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[9]?>' autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input name = "Id_turma" type = "text"  class="input-card" value='<?php echo $pro_mostrarbr[10]?>' autocomplete="off" />
                    <label for="data"> <i class="icon icon-info"></i> </label>
                </span>
                <div class="box-pulse">
                     <input name="enviaralt" type="submit" value="Add" class="btn-submit" > 
                     <input type="reset" value="Sair" class="btn-reset">
                     <?php
                    }
                     ?>
                    </div>
         </form>
        </div>
      </div><!--Box Formulario-->
    </div>
  </div>
  </div>

<?php
extract($_POST, EXTR_OVERWRITE);
if (isset($enviaralt))
{
    include_once 'profadm.php';
    $pro = new professor();
    $pro -> setnome($Nome);
    $pro -> setrg($RG);
    $pro -> setcpff($CPF);
    $pro -> setDAT($DataNasc);
    $pro -> settelefone($Telefone);
    $pro -> setcelu($Celular);
    $pro -> setede($Endereco);
    $pro -> setcepp($CEP);
    $pro -> setIDUSU($Id_usuario);
    $pro -> setIDTUR($Id_turma);
    $pro-> setcod_professor($Id_professor);
    echo "<h3><br><br>" . $pro->alterar2() . "</h3>";

}

?>
					   <!----alterar end--------->	   
					   
					   
					 <!----delete-modal start--------->
   <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="box-formulario">        
        
        <div class="formulario">
            
            <div class="box-title">
              <h2 class="title">Excluir
                <p class="subtitle">Exclua profesores</p>
              </h2>
            </div>

            <form name = "excl" method = "POST" action = "">   
                <span>
                    <input name = "Id_professor" type = "text"class="input-card"  placeholder="Codigo do professor" autocomplete="off" />
                    <label for="cod"> <i class="icon icon-user-outline"></i> </label>
                </span>
                <div class="box-pulse">
                     <input name="btdelet" type="submit" value="Excluir" class="btn-submit" > 
                     <input name="limparbt" type="reset" value="Limpar" class="btn-reset">
                    </div>
            </form>
        </div>
    </div><!--Box Formulario-->
    </div>
  </div>
</div>
<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btdelet))
    {
        include_once 'profadm.php';
        $pro = new professor();
        $pro-> setcod_professor($Id_professor);
        echo "<h3><br><br>" . $pro->exclusao() . "</h3>";
    }
    ?>

					   <!----edit-modal end--------->  

                          <!----edit-modal start--------->
	<div class="modal fade" tabindex="-1" id="consuEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Consultar aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="box-formulario">        
        
        <div class="formulario">
            
            <div class="box-title">
              <h1 class="title">Consultar<span class="subtitle">Consulte aluno agora.</span></h1>
            </div>

<font face = "Century Gothic" sizee ="3"></center><br>
<font size = "4">

<form name = "consu" method = "POST" action = "">   
    <legend><font color ="white">Informe o codigo </font></legend>
                <span>
                    <input name = "Cod_aluno" type = "text"class="input-card"  placeholder="Codigo do aluno" autocomplete="off" />
                    <label for="cod"> <i class="icon icon-user-outline"></i> </label>
                </span>
              <div class="box-pulse">
                     <input name="btnconsu" type="submit" value="Consultar" class="btn-submit" > 
                     <input name="limparbt" type="reset" value="Limpar" class="btn-reset">
                    </div>
                    </form>
</fieldset>

<br>
<fieldset id ="b">
  <legend><b><font color ="white">Resultado</font></b></legend> 

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnconsu))
    {
        include_once 'alunoadm.php';
        $p = new aluno();
        $p-> setcod_aluno($Cod_aluno. '%');
        $pro_bd=$p->consultar();
        ?>

        <table>
        <tr>
          <th><font color ="white">Cod. Aluno</font> </th>
          <th><font color ="white"> Nome </font></th>
          <th><font color ="white"> Endereço </font></th>
          <th><font color ="white">Data de nasc.</font></th>
          <th><font color ="white">CPF.</font></th>
          <th><font color ="white">RG</font></th>
          <th><font color ="white">Cod. respon</font></th>
        </tr>
    
 <?php
        foreach($pro_bd as $pro_mostrar)
          {
            echo"<tr>";
            echo "<td>". $pro_mostrar[0]."</td>"; 
            echo  "<td>". $pro_mostrar[1]."</td>"; 
            echo  "<td>". $pro_mostrar[2]."</td>"; 
            echo "<td>". $pro_mostrar[3]."</td>";
            echo  "<td>". $pro_mostrar[4]."</td>"; 
            echo "<td>". $pro_mostrar[5]."</td>"; 
            echo  "<td>". $pro_mostrar[6]."</td>"; 
            echo"</tr>";
          }
        }
    ?>
        
  </fieldset>
    </div>
  </div>
</div>


  
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


