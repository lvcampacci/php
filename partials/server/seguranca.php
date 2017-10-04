<?php 
//  **************** Sistema de Segurança de Login *******************\\

//Informações do Servidor
$servidor = 'localhost';		//Nome do servidor
$user = 'root';				//Usuario do servidor  
$senhaServidor = '';		//Senha do servidor 

//Informações do Banco de Dados 
$banco = 'area-do-cliente';		//Nome do Banco de Dados 


//Conexão com o Banco de dados 
$connect = mysql_connect($servidor, $user, $senhaServidor) or die ('Não foi possível conectar ao Servidor');	//Conexão com Servidor
mysql_select_db($banco, $connect) or die ('Não foi possível conectar ao Banco de Dados');						//Conexão com o Banco de Dados

//Impede de exibir erros do tipo notice 
error_reporting(E_WARNING);
ini_set(“display_errors”, 1 );

//Identifica para realizar login via input hidden
if ($_POST ['action'] == "action"){
	iniciaLogin();
};

//Iniciando login
function iniciaLogin(){ //Função que inicia Login chamada via JS
	if (!empty($_POST['usuario']) || !empty($_POST['senha'])){

		//Usuário e senha inserido no login
		$usuario = $_POST['usuario'];			//Usuario
		$senha = MD5($_POST['senha']);			//Senha

		validaLogin($usuario, $senha);


	}
}

//Validando Login
function validaLogin($usuario, $senha){
	
	$query = "SELECT nome, usuario, senha FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'"; 	//Query que busca usuario e senha e compara 
	$resultQuery = mysql_query($query);							// Executa a Query e guardar seu resultado
	
	if (mysql_num_rows($resultQuery) != 1){ 					//Verifica o resultado
		
	echo "<meta http-equiv='refresh' content='0; url=http://localhost/area-do-cliente/'>";

	} else {													//Se o login estiver correto
		
		$result = mysql_fetch_assoc($resultQuery);
			@session_start();									//Inicia Sessão
			$_SESSION['usuario'] = $result['usuario'];
			$_SESSION['senha'] = $result['senha'];
			$_SESSION['nome'] = $result['nome'];

			

				
			echo "<meta http-equiv='refresh' content='0; url=http://localhost/area-do-cliente/#/area-do-cliente'>";
			
		}
}	

//Função que protege a página
function protegePagina() {
	@session_start();
		if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
		expulsaVisitante();
		exit;
	}
}


//Ao cliacar em sair chama a função que realiza logoff = expulsaVitante via JS
if (function_exists($_REQUEST["action"])) {
call_user_func($_REQUEST["action"]);
}

//Função de logoff
function expulsaVisitante() {
	@session_start();
	session_destroy();
	unset($_SESSION);
	echo "<meta http-equiv='refresh' content='0; url=http://localhost/area-do-cliente/'>";
}


 ?>