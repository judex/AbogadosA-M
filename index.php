<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<meta charset="utf-8" />
<title> Maizel &amp; ALva | Abogados Consultores y Asesores </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="description" content="Bienvinido a Maizel y Alva abogados  estudio jurídico fundado con la idea de brindar a sus clientes  asesoría personalizada ">

<meta name="Author" content="Maizel &amp; Alva">
<meta name="robots" content="all,index,follow">
<meta name="keywords" content="Maizel y Alva abogados consultores y Asesores,legislacion , abogado - leyes - juridico - derecho- Asesoria legal abogados -asesoria de abogado,consultor juridico, estudio juridico lima, defenza legal,abogado penalista,abogado civil">

<meta name="google-site-verification" content="lfMyeeexzosEDmwjOiak1iNhCYweSOgXT-lDhR0YMZw">
<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<!-- a -->
<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
<!-- o -->

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
<?php include 'includes/header.php';?>
 <?php include 'includes/nav.php' ?>
<div class="main-container " id="main-container">
  <div class="container1">
  <br/>
    <?php include'includes/slider.php' ; ?>
  <br/>
    <div class="clear"></div>

    <article class="box" id="home_featured21">
      <?php include'pages/section_inicio.php' ; ?>
      <?php include 'includes/aside.php'; ?>
      <div class="clear"></div>
    </article>
 </div>
</div>
<div class="main-container">
  <?php include 'includes/footer.php'; ?>
</div>
<div class="main-containers">
  <?php include 'includes/footer-copy.php'; ?>
</div>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
  });
</script>
<script >
$(document).ready(function()
{
  $(".tab_content").hide();
  $("ul.tabs li:first").addClass("active").show();
  $(".tab_content:first").show();

  $("ul.tabs li").click(function()
       {
    $("ul.tabs li").removeClass("active");
    $(this).addClass("active");
    $(".tab_content").hide();

    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
});</script>
<!-- Fin tabls-->
    </body>

</html>

