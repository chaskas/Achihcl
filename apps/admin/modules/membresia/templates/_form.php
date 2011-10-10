<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('membresia/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <p>
        <label>
          Nombre:
          <br/>
          <?php echo $form['nombre']->renderError(); ?>
          <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Apellido:
          <br/>
          <?php echo $form['apellido']->renderError(); ?>
          <?php echo $form['apellido']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Rut:
          <br/>
          <?php echo $form['rut']->renderError(); ?>
          <?php echo $form['rut']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Pais:
          <br/>
          <?php echo $form['pais']->renderError(); ?>
          <?php echo $form['pais']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Fecha de Nacimiento:
          <br/>
          <?php echo $form['nacimiento_at']->renderError(); ?>
          <?php echo $form['nacimiento_at']->render(); ?>
        </label>
  </p>

  <p>
    &nbsp;<a href="<?php echo url_for('membresia/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'membresia/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
