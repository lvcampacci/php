 <!-- Essa sessão pertence ao videos relacionados a Configurações do Sigo w3-->

<!-- PHP -->
<?php ;
	include 'server/seguranca.php';
	protegePagina();
?>

<!-- VIEW -->

<?php include 'header-cliente.php' ?> <!-- Include Header -->

<main id="videos" class="container" >
		
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
					<img class="img-responsive" src="{{video.urlThumb}}" alt="{{video.titulo}}" style="height: 175px;width: 99%;">
					<div class="caption">
						<h3 class="text-center">{{video.titulo}}</h3>
						<p>{{video.descricao}}</p>

							<form class="form-group " method="POST" action="partials/assistir.php" name="formulario-de-assistir" enctype="multipart/form-data">
												<input class="form-control" type="text" name="urlassistir" value="{{video.urlVideo}}" required="required" style="display: none;">
												<input class="form-control" type="text" name="tituloassistir" value="{{video.titulo}}" required="required"  style="display: none;">
												<input class="form-control" type="text" name="descricaoassistir" value="{{video.descricao}}" required="required" style="display: none;" >
												<input class="form-control" type="text" name="descricaoassistir" value="{{video.descricao}}" required="required" style="display: none;" >
												<input class="form-control" type="text" name="imagemassistir" value="{{video.urlThumb}}" required="required" style="display: none;" >


										<!-- Input para backup que funciona

	<input class="btn btn-lg btn-primary" type="submit" name="submit" value="Assistir" style="background-color: #ffffff; color: black; border-color: #576169;">
								 -->
						<button type="submit" class="btn btn-default btn-lg center-block" data-toggle="modal" data-target="#myModal" id="assistir">
							<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>  Assistir
						</button>
									</form>

						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!-- Modal com o vídeo -->
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