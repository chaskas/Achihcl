<div id="two-col" class="border">
  <div id="left">
    <div class="news">
      <h1>Documentos</h1>
      Banco de documentos publicados por la Asociaci&oacute;n Chilena de Ingenier&iacute;a Hospitalaria.
      <br/>
      <?php foreach ($docs as $doc) : ?>
        <div>
          <h3><?php echo $doc->getNombre(); ?></h3>
          <span>
            <?php echo $doc->getDescripcion(); ?>
            <br/>
            Tama&ntilde;o: <?php echo tools::byteFormat(filesize('uploads/docs/' . $doc->getArchivo()), 'KB') ?> Publicado el: <?php echo tools::formatDate($doc->getCreatedAt()) ?>
          </span>
          <br/>
          <a href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/uploads/docs/" . $doc->getArchivo(); ?>" target="_blank"><?php echo $doc->getArchivo(); ?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div id="right">
      <?php include_partial('menu_right'); ?>
  </div>
</div>