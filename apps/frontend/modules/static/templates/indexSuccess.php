<script type="text/javascript">
  $(document).ready(function(){	
    $("#slider").easySlider({
      auto: true,
      continuous: true
    });		
  });	
</script>
<div id="banner">
  <!-- Content slider -->
  <div id="slider">
    <ul>
      <li>
        <img src="images/slide-tejo.jpg" alt="" />
        <div class="info">
          <div>
            <h1>II Jornadas de Ingeniería Hospitalaria</h1>
            <p>La Asociación Chilena de Ingeniería Hospitalaria promueve e invita a participar de las "II Jornadas de Ingeniería Hospitalaria" a efectuarse los días 28 y 29 de septiembre en el Hotel Diego de Almagro de Puerto Montt.</p>
            <a href="<?php echo url_for('noticia/show?id=7'); ?>" class="more">Leer m&aacute;s</a>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide1.jpg" alt="" />
        <div class="info">
          <div>
            <h1>Reunión <br/>ACHIH - Minsal</h1>
            <p>Con m&aacute;s de 45 personas se realizó la reunión convocada por la ACHIH y el Ministerio de Salud (Minsal) para el "Mejoramiento de Herramientas de Diseño de Establecimientos de Salud"</p>
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
            <p>Mauricio Rivera<br/>Hospital Cl&iacute;nico U. de Chile</p><p>Irene Nuñez<br/>Vicepresidenta ACHIH, HUAP</p><p>Esteban Pino<br/>Jefe Carrera Ing. Civil Biom&eacute;dica <br/>U. de Concepci&oacute;n</p>
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
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide13.jpg" alt="" />
        <div class="info">
          <div>
              <h1>Comisi&oacute;n de Agua Potable</h1>
              <p>Jos&eacute; Bertulini<br/>SS Valdivia</p>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide10.jpg" alt="" />
        <div class="info">
          <div>
              <h1>Comisi&oacute;n Infraestructura</h1>
          </div>
        </div>
      </li>
      <li>
        <img src="images/slide9.jpg" alt="" />
        <div class="info">
          <div>
              <h1>Comisi&oacute;n T&eacute;cnica</h1>
              <p>Nancy Fernandez<br/>MINSAL</p>
              <p>Sergio Barriga<br/>SS OHiggins</p>
              <p>Judith Moreno<br/>SS OHiggins</p>
              <p>Regina Barra<br/>SS Valdivia</p>
          </div>
        </div>
      </li>
    </ul>
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
    <div class="box2">
      <h2>Estamos en construcci&oacute;n</h2>
      <div id="twitter"></div>
      <span class="cite">Disculpe las molestias...</span>
    </div>
  </div>
</div>