
<!-- PHP -->
<?php 
	include 'server/seguranca.php';
?>

<header class=header-login>
	
	<nav class="navbar navbar-default">
  		<div class="container">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">
        			<img class="img-responsive" alt="Logo Wisesystem" src="http://localhost/area-do-cliente/assets/img/home_logo.png">
      			</a>
    		</div>
 		 </div>
	</nav>

</header class=header-login>
<div  >
<main>

	
	<section id="login" class="container"> <!-- Formulário -->
		<h1 class="titulo text-center">Área do Cliente</h1>
	
		<form class="form-group container" method="POST" action="partials/server/seguranca.php" name="formulario">
			
			<label for="usuario">Usuário:</label>
			<input class="form-control" type="text" name="usuario" placeholder="Insira seu usuario aqui" required="required"> <!-- Usuário -->

			<label for="senha">Senha:</label>
			<input class="form-control" type="password" name="senha" placeholder="Insira sua senha aqui" required="required"> <!-- Senha -->
			
			<input id="action" type="hidden" name="action" value="action">

			<input class="btn btn-primary btn-block" type="submit" name="submit" value="Login"> <!-- Btn Logar -->

		
		
		</form>

	</section> 
	

</main>
</div>
