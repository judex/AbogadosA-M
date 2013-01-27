
<section>
        <div class="block">
          <header>
              <h2>Contactenos a Maizel &amp; Alva Abogados</h2>
              <p>Nuestro objetivo principal es asesorarle, .....
              Si está interesado en recibir más información sobre nuestros servicios, o necesita consulta, puedes utilizar cualquiera de nuestros medios de contacto
              <br>
              <small>.Estos datos serán administrados de manera confidencial por Maizel &amp; Alva Abogados.</small>
              </p>

          </header>
       <blockquote>
        <br>
          <p class="p-cont"><b>Dirección:</b><br>
          Av. Surco # 668<br>
          Of. 201 - Urb. La Virreyna<br>
          dist. de Santiago de Surco<br>
          Lima - Perú<br></p>
          <p class="p-cont"><b>Teléfonos:</b><br>
          256-3497 - 5926692<br><br>
          <b>Celular:</b><br>
          996789029 - 958998517</p>
        </blockquote>
      </div>
      <div class="clear"></div>
      <div class="line-divi"></div>
      <div class="block">
        <br>
        <form  action="pages/proceso.php" method="post" id="form_contacto"
        >
          <fieldset>
            <span id="ord-form">
                <label for="nombre">Nombre Completo :</label>
                <input type="text" name="nombre" id="nombre" title="Nombre completo" maxlength="50" placeholder="Nombre completo" autocomplete="off" required/>
                <label for="email">Correo Electrónico :</label>
                <input type="email" name="email" id="email" title="Correo electrónico" maxlength="40" placeholder="@" autocomplete="off" required/>
                <label for="telefono">Teléfono (opcional) :</label>
                <input type="text" name="telefono" id="telefono" title="Teléfono" maxlength="20" placeholder="#" autocomplete="off"/>
                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" id="asunto" title="Asunto" maxlength="50" placeholder="Asunto" autocomplete="off" required/>
                <label for="comentario">Indícanos en que podemos ayudarte (max 500) :</label>
                </span>
              <textarea name="comentario" id="comentario" title="Comentario" cols="30" rows="5" maxlength="500" placeholder="Consulta..." required>
              </textarea>
              <input type="submit" value="Enviar" class="submit"/>
          </fieldset>
        </form>
        <div id="respuesta"></div>
      </div>
</section>

<script>
     $(document).ready(function(){

        $('#form_contacto').html5form({
            allBrowsers : true,
            messages: 'es',
            async : true,
            method : 'GET',
            responseDiv : '#respuesta'
            /*labels: 'hide'*/
        });

    });
   /* $(document).ready(function(){

        $('#form_test').html5form({
            allBrowsers : true,
            responseDiv : '#response',
            async : true,
            messages: 'es',
            method : 'GET',
            colorOn :'#6b6764',
            colorOff :'#818181',


        });

    });*/

</script>
<script src="scripts/jquery.html5form-1.5-min.js"></script>
<script>
/*$('.ajaxgif').removeClass('hide');
var datos = 'nombre='+ nombre + '&email=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje;
$.ajax({
    type: "POST",
    url: "proceso.php",
    data: datos,
    success: function() {
        $('.ajaxgif').hide();
        $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);
    },
    error: function() {
        $('.ajaxgif').hide();
        $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);
    }
});
return false;*/
</script>
