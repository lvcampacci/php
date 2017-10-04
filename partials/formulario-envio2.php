<!-- BackUP do formulario de envio PHP -->
<?php 
	include'server/admin/admin.php';
	protegePagina();
		protegePaginaUsuario();

	include'header-envio.php';
?>
<main>
	<section class="container" id="new">
		<div class="row">
			<form class="form-group " method="POST" action="partials/server/admin/upload.php" name="formulario-de-envio" enctype="multipart/form-data">
			
				<label for="titulo">Titulo:</label>
				<input class="form-control" type="text" name="titulo" placeholder="Informe o título" maxlength="40" required="required">
				
				<label for="up-video">Upload do vídeo:</label>
				<input type="file" name="up-video" required="required">
			
				<label for="up-img">Upload da imagem:</label>
				<input type="file" name="up-img" required="required"> 	

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

				<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Enviar">
				</form>
		</div>
		
	</section>
	
</main>

