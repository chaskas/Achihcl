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
        <img src="images/slide2.jpg" alt="" />
      </li>
      <li>
        <img src="images/slide5.jpg" alt="" />
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
          <span class="details">Publicado el <?php echo tools::formatDate($noticia->getCreatedAt()); ?> &nbsp; | &nbsp; por <?php echo $noticia->getCreator(); ?></span>
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