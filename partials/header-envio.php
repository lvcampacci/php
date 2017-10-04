<header class="header-cliente">
	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
    		
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#/area-do-cliente">
        			<img class="img-responsive" alt="Logo Wisesystem" src="http://localhost/area-do-cliente/assets/img/logow.png">
        			<span>Área do Cliente</span>
      			</a><!-- Logo e titulo -->

    		</div>
                
            <form class="logout" id='formulario' name='formulario' method="POST" action="partials/server/seguranca.php">
                <input type="hidden" name="action" id="action">
                <input type="button" name="sair" value="Sair" class="btn btn-default btn-logout" onclick="doPost('formulario','expulsaVisitante');">
            </form><!-- Ação de Logoff -->
				
            <div>
                <img  class="img-responsive icone-login" src="http://localhost/area-do-cliente/assets/img/icone-login.png" alt="Usuario">
                <span class="usuario">Olá Sr(a) <?php echo $_SESSION['nome'] ?> </span>
            </div>
 		     

         </div>

	</nav>


</header>

<!-- <section class="container menu">
    <nav>
      <ul class="nav nav-pills">
        <li role="presentation"><a href="#/videos-comercial">Comercial</a></li>
        <li role="presentation"><a href="#/sessao2">Sessão 2</a></li>
        <li role="presentation"><a href="#/sessao3">Sessão 3</a></li>
        <li role="presentation"><a href="#/sessao4">Sessão 4</a></li>
        <li role="presentation"><a href="#/sessao5">Sessão 5</a></li>
        <li role="presentation"><a href="#">Sessão 6</a></li>        
        <li role="presentation"><a href="#/sessao">Sessão 7</a></li>
        <li role="presentation"><a href="#/sessao">Sessão 8</a></li>
        <li role="presentation"><a href="#/sessao">Sessão 9</a></li>
        <li role="presentation"><a href="#/sessao">Sessão 10</a></li>
        <li role="presentation"><a href="#/sessao">Sessão 11</a></li>
       
      </ul>
    </nav>
</section>
 -->

<!-- JS -->
<script src="http://localhost/area-do-cliente/assets/js/logando.js"></script>