<!-- PHP -->
<?php 
	include'server/admin/admin.php';
	protegePagina();
		protegePaginaUsuario();

	include'header-envio.php';
?>
<main>
	<section class="container" id="new">
		<div class="row">
		<h2>Cadastrar Video</h2>
			<form class="form-group " method="POST" action="partials/server/admin/upload.php" name="formulario-de-envio" enctype="multipart/form-data">
			
				<label for="titulo">Titulo:</label>
				<input class="form-control" type="text" name="titulo" placeholder="Informe o título" maxlength="40" required="required">
				
				<label for="up-video">Upload do vídeo:</label>
				<input type="file" name="up-video" required="required">
			
				<label for="up-img">Upload da imagem:</label>
				<input type="file" name="up-img" required="required"> 	
				<h6>*Não inserir imagens com o nome contendo espaço por exemplo "Sem Titulo"</h6>

				<label for="sessao">Qual o modulo do vídeo:</label>
				<select class="form-control" name="sessao">
					<option value="1">Configurações Sigo w3</option>
					<option value="2">Cadastros</option>
					<option value="3">Comercial</option>
					<option value="4">Atendimento</option>
					<option value="5">Faturamento</option>	
					<option value="6">Financeiro</option>
					<option value="7">Relatórios Gerenciais</option>
					<option value="8">Utilitarios</option>
							<option value="9">eSocial</option>					
				</select>

				<label for="desc">Descrição:</label>
				<textarea class="form-control" name="desc" placeholder="Insira a Descrição do Vídeo" data-ls-module="charCounter" maxlength="167" required="required" ></textarea><br>

				<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Enviar" style="background-color: #ff7a04;border-color: #ff7a04">
				</form>
		</div>
		<hr style="border-color:  #ffbe05;">
		<div class="row">
				<h2>Cadastrar Usuario</h2>
			<form class="form-group " method="POST" action="partials/server/admin/usuarioinserir.php" name="formulario-de-envio" enctype="multipart/form-data">
			
				<label for="titulo">Nome:</label>
				<input class="form-control" type="text" name="nome" placeholder="Informe o nome do usuario" maxlength="40" required="required">

				<label for="titulo">Usuario:</label>
				<input class="form-control" type="text" name="usuario" placeholder="Informe o usuario" maxlength="40" required="required">
<h6>*Não crie usuario com acentuação por exemplo "João"</h6>
					<label for="titulo">Senha:</label>
				<input class="form-control" type="password" name="senha" placeholder="Informe a senha" maxlength="40" required="required">

				<label for="desc">Email:</label>
				<input class="form-control" type="email" name="email" placeholder="Informe o Email" maxlength="40" required="required"><br>




				<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Enviar" style="background-color: #ff7a04;border-color: #ff7a04">
				</form>
		</div>

				<hr style="border-color:  #ffbe05;">

		<div class="row">


					<form method="POST" action="partials/server/admin/redimensionar.php" enctype="multipart/form-data">
					 <input type="file" name="up-img">
					 <input type="submit" name="upload_image" value="Upload">
					</form>
		</div>

	</section>
	
</main>

