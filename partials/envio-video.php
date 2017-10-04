<section id="login" class="container"> <!-- Formulário -->
	<h1 class="titulo text-center">Area de Envio</h1>
	
	<form class="form-group container" method="POST" action="partials/server/admin/admin.php" name="formulario" accept-charset="utf-8">

		<label for="usuario">Usuário:</label>
		<input class="form-control" type="text" name="usuario" placeholder="Insira seu usuario aqui"> <!-- Usuário -->

		<label for="senha">Senha:</label>
		<input class="form-control" type="password" name="senha" placeholder="Insira sua senha aqui"> <!-- Senha -->

		<input id="action" type="hidden" name="action" value="action">

		<input class="btn btn-primary btn-block" type="submit" name="submit" value="Login"> <!-- Btn Logar -->

		
	</form>

</section> 
