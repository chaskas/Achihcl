<div id="two-col" class="border">
  <div id="left">
    <?php $nnews = 1; ?>
    <?php foreach($noticias as $noticia):?>
      <?php if($nnews==1) : ?>
      <h1><?php echo $noticia->getTitulo();?></h1>
      <p class="intro">
        <?php echo $noticia->getRawValue()->getCuerpo(); ?>
      </p>
      <?php elseif($nnews%2==0): ?>
      <div class="left-col">
        <h3><?php echo $noticia->getTitulo();?></h3>
        <?php echo $noticia->getRawValue()->getCuerpo(); ?>
      </div>
      <?php elseif($nnews%2!=0): ?>
      <div class="right-col">
        <h3><?php echo $noticia->getTitulo();?></h3>
        <?php echo $noticia->getRawValue()->getCuerpo(); ?>
      </div>
      <?php endif; ?>
      <?php $nnews++;?>
      <?php endforeach; ?>
  </div>
  <div id="right">
    <div class="box2">
      <h2>Estamos en construcci&oacute;n</h2>
      <div id="twitter"></div>
      <span class="cite">Disculpe las molestias...</span>
    </div>
  </div>
</div>