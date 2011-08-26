<div id="two-col" class="border">
  <div id="left">
    <?php $nnews = 1; ?>
    <?php foreach($noticias as $noticia):?>
    <?php if($nnews == 1) : ?>
      <h1><?php echo link_to($noticia->getTitulo(),'noticia/show?id='.$noticia->getId());?></h1>
      <span class="details">Publicado el <?php echo tools::formatDate($noticia->getCreatedAt()); ?> &nbsp; | &nbsp; por <?php echo $noticia->getCreator(); ?></span>
      <p class="intro"><?php echo tools::getResume($noticia->getRawValue()->getCuerpo()); ?></p>
      <a class="more" href="<?php echo url_for('noticia/show?id='.$noticia->getId()); ?>">Leer m&aacute;s</a>
      <br/>
      <div id="blog">
    <?php $nnews++; ?>
    <?php else : ?>
      <div class="post">
      <h2><?php echo link_to($noticia->getTitulo(),'noticia/show?id='.$noticia->getId());?></h2>
      <span class="details">Publicado el <?php echo tools::formatDate($noticia->getCreatedAt()); ?> &nbsp; | &nbsp; por <?php echo $noticia->getCreator(); ?></span>
      <?php echo tools::getResume($noticia->getRawValue()->getCuerpo()); ?>
      <a class="more" href="<?php echo url_for('noticia/show?id='.$noticia->getId()); ?>">Leer m&aacute;s</a>
      </div>
    <?php endif; ?>
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