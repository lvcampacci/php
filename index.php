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
    <link rel="stylesheet" href="assets/css/login.css"> <!-- CSS Login -->
    <link rel="stylesheet" href="assets/css/header-area-do-cliente.css"> <!-- Header area do cliente -->
    <link rel="stylesheet" href="assets/css/area-do-cliente.css"> <!-- Area do Cliente -->
    <link rel="stylesheet" href="assets/css/envio.css"> <!-- Area do Cliente -->

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
 <!-- Fim Script para não permitir clicar com o botão direito do mouse -->
</head>
<body oncontextmenu="return false">
  
    <ng-view></ng-view> <!-- View Angular -->
    

    <!-- JavaScript -->
    <script src="assets/js/libs/jquery.min.js"></script>
    <script src="assets/js/libs/bootstrap.min.js"></script>
    <script src="assets/js/libs/angular.min.js"></script>
    <script src="assets/js/libs/angular-route.min.js"></script>
    <script src="assets/js/libs/angular-animate.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/controllers/principal-controller.js"></script>
    <script src="assets/js/controllers/video-comercial-controller.js"></script>
    <script src="assets/js/controllers/sessao2-controller.js"></script>
    <script src="assets/js/controllers/sessao3-controller.js"></script>
    <script src="assets/js/controllers/sessao4-controller.js"></script>
    <script src="assets/js/controllers/sessao5-controller.js"></script>
    <script src="assets/js/controllers/sessao6-controller.js"></script>
    <script src="assets/js/controllers/sessao7-controller.js"></script>
    <script src="assets/js/controllers/sessao8-controller.js"></script>
    <script src="assets/js/controllers/sessao9-controller.js"></script>
    <script src="assets/js/controllers/perguntas.js"></script>
    <script src="assets/js/controllers/formulario-deletar.js"></script>
    <script src="assets/js/js.js">
        

        
    </script>
</body>  
</html>