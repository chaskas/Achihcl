<div id="two-col" class="border">
  <div id="left">
    <div class="news">
      <h1>Links</h1>
      Enlaces relacionados con la Asociaci&oacute;n Chilena de Ingenier&iacute;a Hospitalaria.
      <?php foreach ($links as $link) : ?>
        <div>
          <a href="<?php echo $link->getLink(); ?>" class="big"><?php echo $link->getTitulo(); ?></a>
          <span>
            <?php echo $link->getDescripcion(); ?>
          </span>
          <br/>
          <a href="<?php echo $link->getLink(); ?>" target="_blank"><?php echo $link->getLink(); ?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>