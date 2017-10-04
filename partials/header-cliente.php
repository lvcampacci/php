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

<section class="container menu">
    <nav>
      <ul class="nav nav-pills">
        <li role="presentation"><a href="#/videos-comercial">Configurações Sigo w3</a></li>
        <li role="presentation"><a href="#/sessao2">Cadastros</a></li>
        <li role="presentation"><a href="#/sessao3">Comercial</a></li>
        <li role="presentation"><a href="#/sessao4">Atendimento</a></li>
        <li role="presentation"><a href="#/sessao5">Faturamento</a></li>
        <li role="presentation"><a href="#sessao6">Financeiro</a></li>        
        <li role="presentation"><a href="#/sessao7">Relatórios Gerenciais</a></li>
     <li role="presentation"><a href="#/sessao8">Utilitarios</a></li>
            <li role="presentation"><a href="#/sessao9">eSocial</a></li>
      </ul>
    </nav>
</section>


<!-- JS -->
<script src="http://localhost/area-do-cliente/assets/js/logando.js"></script>