<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>

<form action="<?php echo url_for('subcomision/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php if ($form->getObject()->isNew()): ?>
    <?php $form->setDefault('comision_id',$cid); ?>
  <?php endif; ?>
  <p>
    <label><?php echo $form['comision_id']->renderLabel(); ?></label>
    <?php echo $form['comision_id']->render(array('class' => 'small-input')); ?>
  </p>

  <p>
    <label><?php echo $form['nombre']->renderLabel(); ?></label>
    <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
  </p>
  <p>
    <label><?php echo $form['descripcion']->renderLabel(); ?></label>
    <?php echo $form['descripcion']->render(array('class' => 'text-input text-area','style'=>'width: 100% !important;')); ?>
  </p>

  <p>
    <?php if ($form->getObject()->isNew()): ?>
      <a href="<?php echo url_for('subcomision/ShowSubcomisionsByComision?id='.$cid) ?>">Volver a la lista</a>
    <?php endif; ?>
    <?php if (!$form->getObject()->isNew()): ?>
      <a href="<?php echo url_for('subcomision/ShowSubcomisionsByComision?id='.$form->getObject()->getComisionId()) ?>">Volver a la lista</a>
      &nbsp;<?php echo link_to('Eliminar', 'subcomision/delete?id=' . $form->getObject()->getId().'&cid='.$form->getObject()->getComisionId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>

</form>