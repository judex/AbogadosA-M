<section> <div class="block"> <header> <h2>Contactenos a Maizel &amp; Alva Abogados</h2> <p>Nuestro objetivo principal es asesorarle, ..... Si está interesado en recibir más información sobre nuestros servicios, o necesita consulta, puedes utilizar cualquiera de nuestros medios de contacto <br> <small>.Estos datos serán administrados de manera confidencial por Maizel &amp; Alva Abogados.</small> </p> </header> <blockquote> <br> <p class="p-cont"><b>Dirección:</b><br> Av. Surco # 668<br> Of. 201 - Urb. La Virreyna<br> dist. de Santiago de Surco<br> Lima - Perú<br></p> <p class="p-cont"><b>Teléfonos:</b><br> 256-3497 - 5926692<br><br> <b>Celular:</b><br> 996789029 - 958998517</p> </blockquote> </div> <div class="clear"></div> <div class="line-divi"></div> <div class="block"> <br> <form action="upload.php" method="post" id="form_test"> <fieldset> <span id="ord-form"> <label for="nombre">Nombre Completo :</label> <input type="text" name="nombre" id="nombre" title="Nombre completo" maxlength="50" placeholder="Nombre completo" autocomplete="off" required/> <label for="email">Correo Electrónico :</label> <input type="email" name="email" id="email" title="Correo electrónico" maxlength="40" placeholder="@" autocomplete="off" required/> <label for="telefono">Teléfono (opcional) :</label> <input type="tel" name="telefono" id="telefono" title="Teléfono" maxlength="20" placeholder="#" autocomplete="off"/> <label for="asunto">Asunto:</label> <input type="text" name="asunto" id="asunto" title="Asunto" maxlength="50" placeholder="Asunto" autocomplete="off" required/> <label for="comentario">Mensaje (max 500) :</label> </span> <textarea name="comentario" id="comentario" title="Comentario" cols="30" rows="5" maxlength="500" placeholder="Consulta..." required> </textarea> <input type="submit" value="Enviar" class="submit"/> </fieldset> </form> <div id="response"> </div> </div> </section> <script>$(document).ready(function(){$("#form_test").html5form({allBrowsers:true,messages:"es",responseDiv:"#response",method:"GET",async:true,emailMessage:"Dirección de correo inválida",})});</script> <script src="scripts/jquery.html5form-1.5-min.js"></script>


<?php function urlPA(){
  $host = $_SERVER['HTTP_HOST'];
  $nomPag = $_SERVER['REQUEST_URI'];
  $url = "http://" . $host . $nomPag;
return $url;


if($url == "acerca.php") { ?>
        <li class="active"><a href="acerca.php">Acerca</a></li>
      <?php }else { ?>
        <li><a href="acerca.php">Acerca </a></li>
      <?php }?>
}
echo urlPA(); ?>