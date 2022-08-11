<!DOCTYPE html>
<html lang='pt'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso MVC</title>
  
  	<!-- MATERIALIZE: Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- MATERIALIZE: Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      

    <!-- MATERIALIZE: Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
<!-- <img src="<?php/* URL_BASE*/?>/images/money.png"><br> -->
<!-- <h2>Bloco de Anotações</h2><br> -->

<nav>
   <div class="nav-wrapper">
     <a href="#!" class="brand-logo center">CATÁLOGO DE NOTÍCIAS</a>

   <ul class="left hide-on-med-and-down">
   		<?php if(isset($_SESSION['logado'])): ?>
   			
        <li >
          <a href="/" title="Ir para a página inicial">
            <img src="<?php URL_BASE ?>/images/home.svg" />
          </a>
        </li> 
   			
        <li>
          <a href="<?php $_SERVER['SERVER_NAME']; ?>/notes/criar">Adicionar Notícia</a></li> 

   			<li>
          <a href="<?php $_SERVER['SERVER_NAME']; ?>/home/logout"> 
            Sair
          </a>
        </li>
 

   		<?php else: ?>	
  			<li>
          <a href="/" title="Voltar para a página inicial">
            <img src="<?php URL_BASE ?>/images/home.svg" />
          </a>
        </li> 

     		<li>
          <a href="<?php $_SERVER['SERVER_NAME']; ?>/home/login"
            title="Acesse o sistema">
            Login
          </a>
        </li>

  		 	<li>
          <a href="<?php $_SERVER['SERVER_NAME']; ?>/users/cadastrar"
            title="Crie uma conta de acesso">
            Cadastre-se
          </a>
        </li>
     		
        <?php endif; ?>	
 	</ul>
  </div>
 </nav>



<?php  require_once '../App/views/'.$view.'.php'; ?>


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Projeto Explicado:</h5>
                <hr>
                <p class="grey-text text-lighten-4">
                  Este sistema foi desenvolvido com objetivos acadêmicos majoritariamente.
                <p class="grey-text text-lighten-4">
                 Trata-se de um catálogo de notícias, uma espécie de repositório pessoal. O objeto de projeto foi explorar a arquitetura MVC sem ajuda de frameworks back-end. Tendo como foco o MVC, o projeto centrou-se nas seguintes features:
                </p>
                  <ul>
                    <li>1. rotas com URLs amigáveis; </li>
                    <li>2. CRUD com MySQL, incluído busca; e</li>
                    <li>3. administração de usuários com cadastro, login e logout.</li>
                  </ul>  
                <p class="grey-text text-lighten-4"> 
                  Por fim, o front-end foi construído com o framework Materialize.
                </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Entre em contato!</h5>
                <ul>
                  <li>
                    <a class="grey-text text-lighten-3" href="https://www.facebook.com/paulo.andrade.brazilian" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/facebook.svg" />
                      /paulo.andrade.brazilian
                    </a>
                  </li>
<br>
                  <li>
                      <img title="" src="<?php URL_BASE ?>/images/google.svg" />
                      <a class="grey-text text-lighten-3" href="mailto:eupauloandrade@gmail.com" target="_blanck">
                      eupauloandrade@gmail.com
                    </a>
                  </li>
<br>
                  <li>
                    <a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/devpauloandrade/" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/linkedin.svg" />
                      /in/devpauloandrade/
                    </a>
                  </li>
<br>
                  <li>
                    <a class="grey-text text-lighten-3" href="https://pt.stackoverflow.com/users/291458/dev-paulo-andrade" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/stackoverflow.svg" />
                      /dev-paulo-andrade
                    </a>
                  </li>
<br>
                  <li>
                      <a class="grey-text text-lighten-3" href="https://wa.me/5583998052853" target="_blanck">
                      <img title="" src="<?php URL_BASE ?>/images/whatsapp.svg" />
                      (83) 99805-2853
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr>
          <div class="footer-copyright">
            <div class="container">
            © 2022 Paulo Andrade Dev. All Rights Reserved

            <a class="grey-text text-lighten-4 right" href="https://github.com/Paulo-AndradeDev" target="_blanck">
              <img title="Colabore com nosso projeto no Github" src="<?php URL_BASE ?>/images/github.svg" />
              Get Involved
            </a>
            </div>
          </div>
        </footer>
</body>
</html>