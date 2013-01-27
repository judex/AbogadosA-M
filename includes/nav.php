 <style>
#activado-url {
color: #fff !important;
}
</style>
<?php
$a="inicio";$b="Servicio";$c="Portafolio";$d="Nosotros";$e="Contacto";
?>
<?php //Obtener URL
function ObtenerURL(){

$nomDom = $_SERVER['HTTP_HOST'];
$puerto = $_SERVER['SERVER_PORT'];
$nomPag = $_SERVER['REQUEST_URI'];

$url = 'http://'.$nomDom.$nomPag;

return $nomPag;
}
/*echo ObtenerURL();*/


function ver(){
$url = ObtenerURL();
   if(($url == "/maizel-alva-abogados/index.php") || ($url == "/maizel-alva-abogados/index") || ($url == "/maizel-alva-abogados/") ) {
            $act="activado-url";}else { $act='';}
/*servicio*/
        if(($url == "/maizel-alva-abogados/servicio.php") || ($url == "/maizel-alva-abogados/servicio") ) {
            $act="activado-url";}else { $act='';}
/*Portafolio*/
        if(($url == "/maizel-alva-abogados/portafolio.php") || ($url == "/maizel-alva-abogados/portafolio") ) {
            $act="activado-url";}else { $act='';}
/*Nosotros*/
        if(($url == "/maizel-alva-abogados/nosotros.php") || ($url == "/maizel-alva-abogados/nosotros") ) {
            $act="activado-url";}else { $act='';}
/*Contacto*/
         if(($url == "/maizel-alva-abogados/contacto.php") || ($url == "/maizel-alva-abogados/contacto") ) {
            $act="activado-url";}else { $act='';}
        return $act;
}
        ?>
<div class="main-container" id="main-nav">
  <div id="nav-container" class="medio">
    <nav>
      <ul class="nav">
          <li class="last activ"><a href="index" id="<?php echo $v=ver(); ?>" ><?php echo $a ; ?></a></li>
        <li><a href="servicio"class="sf-with-ul" ><?php echo $b; ?><span class="sf-sub-indicator"> »</span></a>
          <ul class="submenu-A2">
            <li class="submenu-A3"><a href="#">LEGALES <span class="sh-sub-indicator"></span></a>
            <ul class="submenu-A4">
            <span>
              <ol>
                <li><a href="right_sidebar.html">»&nbsp;Administrativo</a></li>
                <li><a href="">»&nbsp;Ambiental y Ecológico</a></li>
                <li><a href="">»&nbsp;Asociación Público-Privada</a></li>
                <li><a href="">»&nbsp;Bancario y Financiero</a></li>
                <li><a href="">»&nbsp;Derecho Civil</a></li>
                <li><a href="">»&nbsp;Derecho Penal</a></li>
            </ol>
            <ol>
                <li><a href="">»&nbsp;Derechos de Autor y Propiedad Indu.</a></li>
                <li><a href="">»&nbsp;Derecho Municipal</a></li>
                <li><a href="">»&nbsp;Derecho de Familia</a></li>
                <li><a href="">»&nbsp;Derecho Aduanero</a></li>
                <li><a href="">»&nbsp;Laboral y Seguridad Social</a></li>
                <li><a href="">»&nbsp;Litigios y Arbitrajes</a></li>
            </ol>
            <ol>
                <li><a href="">»&nbsp;Propiedad Inmobiliaria</a></li>
                <li><a href="">»&nbsp;Propiedad Intelectual</a></li>
                <li><a href="">»&nbsp;Seguros</a></li>
                <li><a href="">»&nbsp;Sociedades</a></li>
                <li><a href="">»&nbsp;Tributos</a></li>
            </ol>
            </span>
            </ul></li>
            <li class="submenu-B1"><a href="full_width.html">INDUSTRIAS<span class="sh-sub-indicator"></span></a>
              <ul id="submenu-B2"><span>
                <ol>
                  <li><a href="">»&nbsp;Aeronáutica</a></li>
                  <li><a href="">»&nbsp;Agronegocios y Forestación</a></li>
                  <li><a href="">»&nbsp;Alimentaria</a></li>
                  <li><a href="">»&nbsp;Automotriz</a></li>
                  <li><a href="">»&nbsp;Bancos y Entidades Financieras</a></li>
                  <li><a href="">»&nbsp;Construcción</a></li>
                </ol>
                <ol>
                  <li><a href="">»&nbsp;Deportes y Entretenimiento</a></li>
                  <li><a href="">»&nbsp;Energía</a></li>
                  <li><a href="">»&nbsp;Enseñanza</a></li>
                  <li><a href="">»&nbsp;Farmacéutica</a></li>
                  <li><a href="">»&nbsp;Industrias Manufactureras</a></li>
                </ol>
                </span>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="portafolio"><?php echo $c ; ?></a></li>
        <li><a href="nosotros"><?php echo $d ; ?><!-- <span class="sf-sub-indicator"> »</span> --></a>
           <!--  <ul id="btn-nosotros">
              <li><a href="">Historia</a></li>
              <li><a href="">Misio y Vision</a></li>
              <li><a href="">Quienes Somos</a></li>
            </ul> -->
        </li>
        <li><a href="contacto" id="<?php echo $v=ver(); ?>"><?php echo $e ; ?></a></li>
      </ul>
     </nav>
    </div>
    </div>


