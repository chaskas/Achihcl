<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php use_javascript('jquery.Jcrop.min.js'); ?>
<?php use_stylesheet('jquery.Jcrop.css'); ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>

<form action="<?php echo url_for('banner/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
    
    
  <p>
        <label style="float: left; padding-right: 20px;width:10%;">
          Activo:
          <br/>
          <?php echo $form['activo']->renderError(); ?>
          <?php echo $form['activo']->render(); ?>
        </label>

        <label style="float: left; padding-right: 20px;width:85%;">
          T&iacute;tulo:
          <br/>
          <?php echo $form['titulo']->renderError(); ?>
          <?php echo $form['titulo']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label>
          Descripci&oacute;n:
          <br/>
          <?php echo $form['descripcion']->renderError(); ?>
          <?php echo $form['descripcion']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Enlace:
          <br/>
          <?php echo $form['enlace']->renderError(); ?>
          <?php echo $form['enlace']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Slide:
          <br/>
          <?php echo $form['slide']->renderError(); ?>
          <?php echo $form['slide']->render(); ?>
        </label>
  </p>
  

  <p>
    &nbsp;<a href="<?php echo url_for('banner/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'banner/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>