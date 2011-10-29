<div id="two-col"  class="border">
  <div id="left">
    <h1>Eventos</h1>
    Eventos relacionados con la Asociaci&oacute;n Chilena de Ingenier&iacute;a Hospitalaria.
    <div id="blog">
      <?php foreach ($eventos as $evento) : ?>
          <div class="post">
            <h1><?php echo $evento->getNombre(); ?></h1>
            <span class="details">
              Lugar: <?php echo $evento->getUbicacion(); ?>
              <br/>
              Comienza el <?php echo tools::formatDate($evento->getInicioAt()); ?>  &nbsp; <?php if($evento->getFinAt() != NULL)echo "| &nbsp; Finaliza el ".tools::formatDate($evento->getFinAt()); ?>
              <br/>
              <?php if($evento->getValor() != NULL)echo "Valor: $".$evento->getValor().".-"; ?>
            </span>
            <?php echo $evento->getRawValue()->getDescripcion(); ?>
            <div style="clear: both"></div>
            <?php if($evento->getAfiche() != NULL) echo image_tag('http://'.$_SERVER['HTTP_HOST'].'/uploads/afiches/s_'.$evento->getAfiche(),'alt='.$evento->getNombre()); ?>
          </div>
          <div style="clear: both;"></div>
      <?php endforeach; ?>
    </div>
  </div>
  <div id="right">
      <?php include_partial('menu_right'); ?>
  </div>
</div>