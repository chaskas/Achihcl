<div class="news">
  <h1>Links</h1>
  <?php foreach($links as $link) : ?>
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