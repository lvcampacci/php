<?php 
header("Content-type: text/html; charset=utf-8");
$servidor = 'localhost';	//Nome do servidor
$user = 'root';				//Usuario do servidor  
$senhaServidor = '';		//Senha do servidor 

//Informações do Banco de Dados 
$banco = 'area-do-cliente';		//Nome do Banco de Dados 

//Informações do Formulario
$nome = $_POST['nome'];	//Titulo

$usuario = $_POST['usuario']; //Descrição do vídeo

$senha = $_POST['senha']; //Descrição do vídeo

$email = $_POST['email']; //Descrição do vídeo

//Conexão com o Banco de dados 
$connect = mysql_connect($servidor, $user, $senhaServidor) or die ('Não foi possível conectar ao Servidor');	//Conexão com Servidor
mysql_select_db($banco, $connect) or die ('Não foi possível conectar ao Banco de Dados');		//Conexão com o Banco de Dados
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf-8');
mysql_query('SET character_set_client=utf-8');
mysql_query('SET character_set_results=utf-8');						

//Guardando no banco de Dados
$query = "INSERT INTO usuarios ( `nome`, `usuario`, `email`, `senha`) VALUES ('$nome', '$usuario', '$email', MD5('$senha')) ";
mysql_query($query);

 		echo "Usuario incluido com sucesso !";
?>