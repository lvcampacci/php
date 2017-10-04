<!-- PHP -->
<?php 
  include'server/admin/admin.php';
  protegePagina();
    protegePaginaUsuario();

  include'header-envio.php';
?>
<main id="videos" class="container" >

	<h2 class="text-center ult-videos">Sessão deletar videos</h2>


		<section class="busca">
		<form>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Buscar:</span>
				<input class="form-control" type="search" name="busca" placeholder="Faça sua busca aqui" ng-model="filtro" ng-model-options="{debounce: 500}">
			</div>
		</form>
	</section>



	<section id="lista-videos">
		<div class="row">
			<div class="col-sm-6 col-md-4 filtro-animado" ng-repeat="video in videos | filter: filtro">
				<div class="thumbnail" style="width: 325px; height: 422px;">
					<img class="img-responsive" src="{{video.urlThumb}}" alt="{{video.titulo}}">
					<div class="caption">
						<h3 class="text-center">{{video.titulo}}</h3>
						<p>{{video.descricao}}</p>
						<button type="button" class="btn btn-default btn-lg center-block" data-toggle="modal" data-target="#myModal" id="assistir">
							 Deletar
						</button>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!-- Modal com o vídeo -->
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<div align="center">
										<h3 style="color: white;">Deseja mesmo deletar o video ? </h3>	
										<br>
										 <button type="button" class="btn btn-primary">Sim</button>
										 <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
       
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!-- Modal com o vídeo -->
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<div align="center">
											<video preload="none" poster={{video.urlThumb}} controls class="video" id="video" >
												<source src="{{video.urlVideo}}" type="video/mp4" class="video">
												</video>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>

		</section>



</main>


