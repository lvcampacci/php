<?php 
header("Content-type: text/html; charset=utf-8");
$servidor = 'localhost';	//Nome do servidor
$user = 'root';				//Usuario do servidor  
$senhaServidor = '';		//Senha do servidor 

//Informações do Banco de Dados 
$banco = 'area-do-cliente';		//Nome do Banco de Dados 

//Informações do Formulario
$titulo = $_POST['titulo'];	//Titulo

$desc = $_POST['desc']; //Descrição do vídeo

$status = 1;	//Status de vizualização

$sessao = $_POST['sessao'];	//Sessão que o vídeo será exibido

$exibeprinc = 1;

//Upload do vídeo

$arqNameVideo = $_FILES['up-video']['name'];	//Nome Original do Arquivo

$arqTypeVideo = $_FILES['up-video']['type']; //Tipo do arquivo

$arqSizeVideo = $_FILES['up-video']['size']; //Tamanho do arquivo

$arqTempVideo = $_FILES['up-video']['tmp_name']; //Nome temporário do arquivo

$arqErrorVideo = $_FILES['up-video']['error']; //Erros de Uploads

//Upload da Imagem

$arqNameImg = $_FILES['up-img']['name'];	//Nome Original do Arquivo

$arqTypeImg = $_FILES['up-img']['type']; //Tipo do arquivo

$arqSizeImg = $_FILES['up-img']['size']; //Tamanho do arquivo

$arqTempImg = $_FILES['up-img']['tmp_name']; //Nome temporário do arquivo

$arqErrorImg = $_FILES['up-img']['error']; //Erros de Uploads


//Fazendo Upload dos Arquivos
if ($arqErrorVideo == 0) {
    $pastaVideo = "C:/xampp/htdocs/area-do-cliente/assets/videos/";
    $uploadVideo = move_uploaded_file($arqTempVideo,$pastaVideo.$arqNameVideo);

    if ($uploadVideo ==  true){
    	echo "Vídeo Enviado com Sucesso !!";
    } else if ($uploadVideo == false){
    	echo "Não foi possível enviar o vídeo.";
    	exit;
    }
  }

 if ($arqErrorImg == 0) {
 	$pastaImg = "C:/xampp/htdocs/area-do-cliente/assets/videos/img-videos/";
 	$uploadImg = move_uploaded_file($arqTempImg, $pastaImg.$arqNameImg);

 	if ($uploadImg == true) {
 		echo "<br>"; //Quebra de Linha
 		echo "Imagem Enviada com Sucesso !!";
 	} else if ($uploadImg == false ){
 		echo "<br>"; //Quebra de Linha
 		echo "Não foi possível enviar a imagem.";
 		exit;
 	}
 }

//Conexão com o Banco de dados 
$connect = mysql_connect($servidor, $user, $senhaServidor) or die ('Não foi possível conectar ao Servidor');	//Conexão com Servidor
mysql_select_db($banco, $connect) or die ('Não foi possível conectar ao Banco de Dados');		//Conexão com o Banco de Dados
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf-8');
mysql_query('SET character_set_client=utf-8');
mysql_query('SET character_set_results=utf-8');						

//Guardando no banco de Dados
$query = "INSERT INTO videos ( `titulo`, `urlVideo`, `urlThumb`, `descricao`, `status`, `ID_Sessao`, `exibe_principal`) VALUES ('$titulo', 'http://localhost/area-do-cliente/assets/videos/$arqNameVideo', 'http://localhost/area-do-cliente/assets/videos/img-videos/$arqNameImg', '$desc', '$status', '$sessao', '$exibeprinc') ";
mysql_query($query);


?>