<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>
    <div id="centered">
      <div id="header">
        <br/>
        <a href="<?php echo url_for('static/index'); ?>"><?php echo image_tag('logo-med.png','alt=ACHIH class=floatleft'); ?></a>
        <ul id="navigation">
          <li <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('static/index'); ?>">Inicio</a></li>
          <li><a href="http://comision.achih.cl" target="_blank">Comisiones</a></li>
          <li <?php if($sf_context->getActionName()=='docs' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('docs/index'); ?>">Documentos</a></li>
          <li <?php if($sf_context->getActionName()=='links' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('links/index'); ?>">Links</a></li>
          <li <?php if($sf_context->getActionName()=='contact' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('static/contact'); ?>">Contacto</a></li>
        </ul>
      </div>
      <br/><br/>

      <?php echo $sf_content ?>
      
      <div id="footer">
        <span class="copyright">Copyright 2011 <a href="http://www.webdevel.cl/">webdevel.cl</a>.  All rights reserved.</span>
      </div>
    </div>
  </body>
</html>
