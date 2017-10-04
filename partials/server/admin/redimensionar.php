<?php 
header("Content-type: text/html; charset=utf-8");
$servidor = 'localhost';  //Nome do servidor
$user = 'root';       //Usuario do servidor  
$senhaServidor = '';    //Senha do servidor 

//Informações do Banco de Dados 
$banco = 'area-do-cliente';   //Nome do Banco de Dados 

//Upload da Imagem

$arqNameImg = $_FILES['up-img']['name'];  //Nome Original do Arquivo

$arqTypeImg = $_FILES['up-img']['type']; //Tipo do arquivo

$arqSizeImg = $_FILES['up-img']['size']; //Tamanho do arquivo

$arqTempImg = $_FILES['up-img']['tmp_name']; //Nome temporário do arquivo

$arqErrorImg = $_FILES['up-img']['error']; //Erros de Uploads


list($altura, $largura) = getimagesize($arqTempImg);
echo $altura;
  echo "<br>"; //Quebra de Linha
echo $largura;
$percent = 0.5;
$new_width = $largura * $percent;
$new_height = $altura * $percent;

  echo "<br>"; //Quebra de Linha
    echo "<br>"; //Quebra de Linha
      echo "Nova altura e largura"; //Quebra de Linha
echo $new_width;
  echo "<br>"; //Quebra de Linha
echo $new_height;

echo "<br>"; //Quebra de Linha
    echo "<br>"; //Quebra de Linhaecho "<br>"; //Quebra de Linha
    echo "<br>"; //Quebra de Linha
  $pastaImg = "C:/xampp/htdocs/area-do-cliente/assets/videos/img-videos/";
    echo $arqNameImg;
  $pastaImg = "C:/xampp/htdocs/area-do-cliente/assets/videos/img-videos/";
// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);

imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $altura, $largura);
$image = imagecreatefrompng($arqTempImg);
 if ($arqErrorImg == 0) {
  $pastaImg = "C:/xampp/htdocs/area-do-cliente/assets/videos/img-videos/";
  $uploadImg = move_uploaded_file($arqTempImg, $pastaImg.$arqNameImg);



  if ($uploadImg == true) {
    echo "<br>"; //Quebra de Linha
    echo "Imagem Enviada com Sucesso !!";
  echo "10987654321s !!";
  } else if ($uploadImg == false ){
    echo "<br>"; //Quebra de Linha
    echo "Não foi possível enviar a imagem.";
    exit;
  }
 }


?>