<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php
if ($form->hasErrors()){
  foreach($form->getWidgetSchema()->getFields() as $name => $field)
  {
    if ($form[$name]->hasError()){
      echo "<span style='color: red;'>".$form[$name]->renderLabel() . ': &nbsp;' .$form[$name]->getError() . '</span><br/>';
    }
  }
}
?>

<form action="<?php echo url_for('empresas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <p>
        <label>
          Nombre:
          <br/>
          <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label>
          Descripci&oacute;n:
          <br/>
          <?php echo $form['descripcion']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label>
          Enlace:
          <br/>
          <?php echo $form['url']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label>
          Logo:
          <br/>
          <?php echo $form['logo']->render(); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
    &nbsp;<a href="<?php echo url_for('empresas/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'empresas/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>