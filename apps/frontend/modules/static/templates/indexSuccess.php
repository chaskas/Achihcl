<script type="text/javascript">
  $(document).ready(function(){	
    $("#slider").easySlider({
      auto: true,
      continuous: true
    });		
  });	
</script>
<div id="banner-wrapper">
<div id="banner">
  <!-- Content slider -->
  <div id="slider">
    <ul>
      <li>
        <img src="images/slide-tejo.jpg" alt="" />
        <div class="info">
          <div>
            <h1>II Jornadas de Ingeniería Hospitalaria</h1>
            <p class="p2">La Asociación Chilena de Ingeniería Hospitalaria promueve e invita a participar de las "II Jornadas de Ingeniería Hospitalaria" a efectuarse los días 28 y 29 de septiembre en el Hotel Diego de Almagro de Puerto Montt.</p>
            <a href="<?php echo url_for('noticia/show?id=7'); ?>" class="more">Leer m&aacute;s</a>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide1.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Reunión <br/>ACHIH - Minsal</h1>
            <p class="p2">Con m&aacute;s de 45 personas se realizó la reunión convocada por la ACHIH y el Ministerio de Salud (Minsal) para el "Mejoramiento de Herramientas de Diseño de Establecimientos de Salud"</p>
            <br/><br/><br/>
            <a href="<?php echo url_for('noticia/show?id=4'); ?>" class="more">Leer m&aacute;s</a>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide8.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Directiva ACHIH</h1>
            <p>Ernesto Torres<br/>Presidente</p>
            <p>Luis L&oacute;pez<br/>Tesorero</p>
            <p>Irene Nuñez<br/>Viceresidenta</p>
            <p>Yanko Galilea<br/>Secretario</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide6.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Comisi&oacute;n de Capacitaci&oacute;n</h1>
            <p>Fis. Irene Nuñez<br/>Hospital Urgencia Asistencia P&uacute;blica</p>
            <p>Ing. Marco Barrientos<br/>Hospital de Castro</p>
            <p>T. U. Mauricio Rivera<br/>Hospital Cl&iacute;nico U de Chile</p>
            <p>Dr. Esteban Pino<br/>Universidad de Concepci&oacute;n</p>
            <p>Ing. Juan Herrera<br/>Universidad de Santiago</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide11.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Comisi&oacute;n de Climatizaci&oacute;n</h1>
            <p>Nelson Gonzalez<br/>Hospital Cl&iacute;nico U. de Chile</p>
            <p>Joaquin Fort<br/>EMTE HVAC</p>
            <p>Ernesto Torres<br/>Presidente ACHIH</p>
            <p>Francisco Avendaño</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide5.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Comisi&oacute;n de Electricidad</h1>
            <p>Ing. Yanco Galilea</p>
            <p>Ing. Manuel Silva</p>
            <p>Ing. Miguel Sánchez</p>
            <p>Daniel Carrasco</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide13.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Comisi&oacute;n de Agua Potable</h1>
            <p>Jos&eacute; Bertulini<br/>SS Valdivia</p>
            <p>Henry Green</p>
            <p>Te&oacute;filo Neira</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide10.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Comisi&oacute;n Infraestructura</h1>
            <p>Arq. Ana Maria Barroux</p>
            <p>Arq. Johnny Villouta</p>
            <p>Arq. Roxana Riquelme</p>
            <p>Arq. José Barria</p>
            <p>Ing. Luis Lopez</p>
            <p>Arq. Nieves Rivera</p>
            <p>Arq. Christian Sepúlveda</p>
            <p>Arq. Alejandra Vallejos</p>
            <p>Ing. Aldo Vivanco</p>
            <p>Arq. Carlos Rivera</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide9.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Comisi&oacute;n T&eacute;cnica</h1>
            <p>Ing. Sergio Barriga<br/>Servicio de Salud O´Higgins</p>
            <p>Ing. Judith Moreno<br/>Servicio de Salud O´Higgins</p>
            <p>Med. Regina Barra<br/>Servicio de Salud Valdivia</p>
            <p>Bioq. Nancy Fernandez<br/>MINSAL</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>
<div id="two-col" class="page">
  <div id="left">
    <div id="blog">
      <?php foreach ($noticias as $noticia): ?>
        <div class="post">
          <h2><?php echo link_to($noticia->getTitulo(), 'noticia/show?id=' . $noticia->getId()); ?></h2>

        <?php echo tools::getResume($noticia->getRawValue()->getCuerpo()); ?>
        <br/>
        <a class="more" href="<?php echo url_for('noticia/show?id=' . $noticia->getId()); ?>">Leer m&aacute;s</a>
        <br/>
      </div>
      <?php endforeach; ?>
      </div>
    </div>
    <div id="right">
      <div class="box1">
        <h2>Men&uacute;</h2>
        <ul class="catlist">
          <li><a href="<?php echo url_for('static/index'); ?>">Inicio</a></li>
        <li><a href="http://comision.achih.cl">Comisiones</a></li>
        <!--        <li><a href="#">Membres&iacute;a</a></li>-->
        <!--        <li><a href="#">Banco de Documentos</a></li>-->
        <!--        <li><a href="#">Bolsa de Trabajo</a></li>-->
        <li><a href="<?php echo url_for('static/links'); ?>">Links</a></li>
        <li><a href="<?php echo url_for('static/contact'); ?>">Contacto</a></li>
      </ul>
    </div>
    <div class="box2">
      <h2>Estamos en construcci&oacute;n</h2>
      <div id="twitter"></div>
      <span class="cite">Disculpe las molestias...</span>
    </div>
  </div>
</div>
