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
    <?php foreach($banners as $banner) : ?>
      <li>
        <img src="<?php echo $banner->getImageSrc('slide', 'banner') ?>" alt="Slide" />
        <div class="info">
          <div>
            <h1><?php echo $banner->getTitulo(); ?></h1>
            <?php echo $banner->getRawValue()->getDescripcion(); ?>
            <?php if($banner->hasEnlace()) : ?>
              <?php echo link_to('Leer M&aacute;s',$banner->getEnlace(), array('class'=>'more')); ?>
            <?php endif; ?>
          </div>
        </div>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
</div>
</div>
<div id="two-col" class="page">
  <?php if(count($empresas_colaboradoras) != 0) : ?>
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
  <?php endif; ?>
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
    <div id="right" <?php if(count($empresas_colaboradoras) == 0) echo "style='width: 280px;'"; ?>>
      <?php include_partial('menu_right'); ?>
    </div>
</div>
