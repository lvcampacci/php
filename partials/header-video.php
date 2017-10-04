<header class="header-cliente">
	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
    		
    		<div class="navbar-header">
      			<a class="navbar-brand" href="http://localhost/area-do-cliente/#/area-do-cliente">
        			<img class="img-responsive" alt="Logo Wisesystem" src="http://localhost/area-do-cliente/assets/img/logow.png">
        			<span>Área do Cliente</span>
      			</a><!-- Logo e titulo -->

    		</div>
                
            <form class="logout" id='formulario' name='formulario' method="POST" action="server/seguranca.php">
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



<!-- JS -->
<script src="http://localhost/area-do-cliente/assets/js/logando.js"></script>