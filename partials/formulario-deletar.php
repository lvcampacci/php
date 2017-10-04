<!-- PHP -->
<?php 
  include'server/admin/admin.php';
  protegePagina();
    protegePaginaUsuario();

  include'header-envio.php';

//	include 'assistir.php';

?>
<main id="videoPlay" class="container" >
<div class="center">
	<h2 class="text-center ult-videos" id="link"><?php $urlvideo ?></h2>


		


	<video preload="none"  controls class="video" id="video" width="100%" height="auto" poster="http://localhost/area-do-cliente/assets/videos/img-videos/teste.png">
																<source src="<?php echo $urlvideo ?>" type="video/mp4" class="video">
															</video>

</div>


<center>
<br>	

<div class="center">   <p>Descrição do Video</p></div>
  <p><a class="btn btn-primary btn-lg" href="#/area-do-cliente" role="button">Voltar</a></p>
</center>

</main>


