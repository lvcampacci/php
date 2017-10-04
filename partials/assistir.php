<!-- PHP -->

<?php 
  include'server/admin/admin.php';
  protegePagina();


  //URL do video para exibição
	//URL
  $urlvideo = $_POST['urlassistir'];
    $titulovideo = $_POST['tituloassistir'];
          $descricaovideo = $_POST['descricaoassistir'];
                    $imagemvideo = $_POST['imagemassistir'];

  

?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
    <title>Área do Cliente</title>

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet"> <!-- Normalize -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css"> <!-- CSS Login -->
    <link rel="stylesheet" href="../assets/css/header-area-do-cliente.css"> <!-- Header area do cliente -->
    <link rel="stylesheet" href="../assets/css/area-do-cliente.css"> <!-- Area do Cliente -->
    <link rel="stylesheet" href="../assets/css/envio.css"> <!-- Area do Cliente -->

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


      <!-- Script para não permitir clicar com o botão direito do mouse -->  
<SCRIPT LANGUAGE="JavaScript">   
<!-- Disable   
function disableselect(e){   
return false   
}   

function reEnable(){   
return true   
}   

//if IE4+   
document.onselectstart=new Function ("return false")   
document.oncontextmenu=new Function ("return false")   
//if NS6   
if (window.sidebar){   
document.onmousedown=disableselect   
document.onclick=reEnable   
}   
//-->   
</script> 



 <!-- Fim do Script para não permitir clicar com o botão direito do mouse -->
</head>

<body>
<?php include'header-video.php'; ?>
<main id="videoPlay" class="container" >
<div class="center">
	<h4 class="text-center ult-videos" id="link"><?php echo $titulovideo ?></h4>



		

<center>
	<video preload="none"  controls class="video" id="video" width="80%" height="auto"  poster="<?php echo $imagemvideo ?>">
																<source src="<?php echo $urlvideo ?>" type="video/mp4" class="video">
															</video>
</center>
</div>


<center>
<br>	

<div class="center">   <p><?php echo $descricaovideo ?></p></div>
<br>
<div style="color: #ffa90c; height: 205px" ><br>
<label for="desc">Conte para nós como foi sua experiencia com essa video aula</label>
        <textarea class="form-control" name="desc" placeholder="Esta video aula foi útil? Quais as dificuldades encontrada? " data-ls-module="charCounter" maxlength="650" required="required" style="width: 850px;height: 120px; border: 2px solid #ffa90c;"></textarea><br>

</div>
<br>
<br>
  <p><a class="btn btn-primary btn-lg" href="javascript:window.history.go(-1)" role="button" style="background-color: white; border-color: rgb(255, 122, 4);color: rgb(255, 122, 4); ">Enviar</a>
 &nbsp; 
  <a class="btn btn-primary btn-lg" href="javascript:window.history.go(-1)" role="button" style="background-color: rgb(255, 122, 4); border-color: rgb(255, 122, 4)">Voltar</a></p>
</center>

</main>

</body>
</html>

