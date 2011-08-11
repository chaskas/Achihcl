<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>

<form action="<?php echo url_for('comision/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <p>
    <label><?php echo $form['nombre']->renderLabel(); ?></label>
    <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
  </p>
  <p>
    <label><?php echo $form['descripcion']->renderLabel(); ?></label>
    <?php echo $form['descripcion']->render(array('class' => 'text-input text-area','style'=>'width: 100% !important;')); ?>
  </p>

  <p>
    <a href="<?php echo url_for('comision/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'comision/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
