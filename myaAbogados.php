<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<title> Maizel &amp; ALva | Abogados Consultores y Asesores </title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="language" content="es-PE">
<meta name="Author" content="Maizel y Alva">
<meta name="robots" content="all">
<meta name="keywords" content="jQuery HTML5 Form Plugin, jQuery Form Plugin, Plugin jQuery para formularios HTML5, jQuery validar formularios, jQuery plugin HTML5, jQuery plugin formularios, jQuery webform html5, Matias Mancini, Buenos Aires, Argentina">
<meta name="google-site-verification" content="lfMyeeexzosEDmwjOiak1iNhCYweSOgXT-lDhR0YMZw">
<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="description" content="Abogados - asesoria - asesores -consultores, abogado, ">

<link href='http://fonts.googleapis.com/css?family=Antic+Didone' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>
<!-- Jquery -->
<script type="text/javascript" src="scripts/jquery-1.8.2.js" ></script>
<script type="text/javascript" src="scripts/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript" src="scripts/jquery-ui-tabs-rotate.js" ></script>


<!-- fin Jquery -->

<script type='text/javascript'>
//<![CDATA[
$(document).ready(function(){
  $("#accordion div").hide();
  $("#accordion h4").click(function(){
    $(this).next("div").slideToggle("slow")
    .siblings("div:visible").slideUp("slow");
    $(this).toggleClass("active");
    $(this).siblings(".acordionLeyes").removeClass("active");
  });
   document.getElementById("accordion").style.visibility="visible";
});
//]]>
</script>

<!--<script src="scripts/elegant-press.js" type="text/javascript"></script>-->
<!--[if lt IE 7]>
            <p class="chromeframe">Estas Usando Un Navegador Antiguo IE . <a href="http://browsehappy.com/">Porfavor Actualice su Navegador</a> a <a href="http://www.google.com/chromeframe/?redirect=true">Instale Google Chrome</a> Y siente la experiencia del sitie.</p>
        <![endif]-->
<!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->


<script src="scripts/modernizr-2.6.1.min.js"></script>


</head>
<body>
  <?php  require_once 'includes/header.php'; ?>
  <?php require_once 'includes/nav.php'; ?>

<!-- Fin tabls-->
</body>

</html>

