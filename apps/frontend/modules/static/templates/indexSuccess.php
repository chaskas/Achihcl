<div id="two-col" class="border">
  <div id="left">
    <?php $nnews = 1; ?>
    <div id="blog">
    <?php foreach($noticias as $noticia):?>
      <div class="post">
      <h2><?php echo $noticia->getTitulo();?></h2>
      <span class="details">Publicado el <?php echo tools::formatDate($noticia->getCreatedAt()); ?> &nbsp; | &nbsp; por <?php echo $noticia->getCreator(); ?></span>
      <?php echo $noticia->getRawValue()->getCuerpo(); ?>
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