<div id="two-col" class="border">
  <div id="left">
  <h1><?php echo $noticia->getTitulo();?></h1>
  <span class="details">Publicado el <?php echo tools::formatDate($noticia->getCreatedAt()); ?> &nbsp; | &nbsp; por <?php echo $noticia->getCreator(); ?></span>
  <p class="intro"><?php echo $noticia->getRawValue()->getCuerpo(); ?></p>
  </div>
</div>