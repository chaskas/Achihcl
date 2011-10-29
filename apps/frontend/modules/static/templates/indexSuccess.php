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
        <?php echo image_tag('slide-tejo.jpg'); ?>
        <div class="info">
          <div>
            <h1>II Jornadas de Ingeniería Hospitalaria</h1>
            <p class="p2">La Asociación Chilena de Ingeniería Hospitalaria promueve e invita a participar de las "II Jornadas de Ingeniería Hospitalaria" a efectuarse los días 28 y 29 de septiembre en el Hotel Diego de Almagro de Puerto Montt.</p>
            <a href="<?php echo url_for('noticia/show?id=7'); ?>" class="more">Leer m&aacute;s</a>
          </div>
        </div>
      </li>
      <li>
        <?php echo image_tag('slide1.jpg'); ?>
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
        <?php echo image_tag('slide8.jpg'); ?>
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
        <?php echo image_tag('slide6.jpg'); ?>
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
        <?php echo image_tag('slide11.jpg'); ?>
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
        <?php echo image_tag('slide5.jpg'); ?>
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
        <?php echo image_tag('slide13.jpg'); ?>
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
        <?php echo image_tag('slide10.jpg'); ?>
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
        <?php echo image_tag('slide9.jpg'); ?>
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
      <li>
        <?php echo image_tag('slide14.jpg'); ?>
        <div class="info">
          <div>
            <h1>Comisi&oacute;n Gases Cl&iacute;nicos</h1>
            <p>Ing. Rub&eacute;n Astudillo<br/>Empresario</p>
            <p>Ing. Marcelo Verdessi<br/>SSVSA</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>
<div id="two-col" class="page">
  <div id="left-menu">
    <div class="box1">
    <h2>Empresas Colaboradoras</h2>
      <ul class="catlist">
          <?php foreach($empresas_colaboradoras as $emp) : ?>
            <li>
              <center>
              <?php if($emp->getLogo()) : ?>
              <?php echo link_to(image_tag('http://'.$_SERVER['HTTP_HOST'].'/uploads/empresas/s_'.$emp->getLogo()),$emp->getUrl(),'target=_blank,alt='.$emp->getNombre().',title='.$emp->getNombre()) ?>
              <?php else : ?>
              <h3><?php echo link_to($emp->getNombre(),$emp->getUrl(),'target=_blank,alt='.$emp->getNombre().',title='.$emp->getNombre()); ?></h3>
              <?php endif; ?>
              </center>
            </li>
          <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div id="left">
    <div id="blog">
      <?php foreach ($pager->getResults() as $noticia): ?>
        <div class="post">
          <h2><?php echo link_to($noticia->getTitulo(), 'noticia/show?id=' . $noticia->getId()); ?></h2>
          <div style="clear: both"></div>
          <p>
          <?php echo tools::getResume(strip_tags($noticia->getRawValue()->getCuerpo(),'<img>')); ?>
          </p>
          <div style="clear: both"></div>
          <br/>
          <a class="more" href="<?php echo url_for('noticia/show?id=' . $noticia->getId()); ?>">Leer m&aacute;s</a>
          <br/>
        </div>
      <?php endforeach; ?>
      
      <?php if ($pager->haveToPaginate()): ?>
        <center>
        <div class="pagination">
          <?php echo link_to('« Primera', 'static/index?page='.$pager->getFirstPage()) ?>
          <?php echo link_to('« Anterior', 'static/index?page='.$pager->getPreviousPage()) ?>

          <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
              <a href="<?php echo url_for('static/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
            <?php else: ?>
              <a href="<?php echo url_for('static/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
            <?php endif; ?>
          <?php endforeach; ?>

          <?php echo link_to('Siguiente »', 'static/index?page='.$pager->getNextPage()) ?>
          <?php echo link_to('&Uacute;ltima »', 'static/index?page='.$pager->getLastPage()) ?>
        </div>
        </center>
        <div class="clear"></div>
            
        <?php endif ?>
      
      </div>
    </div>
    <div id="right">
      <?php include_partial('menu_right'); ?>
    </div>
</div>
