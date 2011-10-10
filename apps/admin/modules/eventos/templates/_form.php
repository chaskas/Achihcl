<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>

<form action="<?php echo url_for('eventos/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <p>
        <label style="float: left;width: 50%;padding-right: 15pt;">
          T&iacute;tulo: <span style="color:#EE0000;">(*)</span>
          <br/>
          <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left;padding-right: 15pt;">
          Inicio: <span style="color:#EE0000;">(*)</span>
          <br/>
          <?php echo $form['inicio_at']->render(); ?>
        </label>
        <label style="float: left;">
          Fin:
          <br/>
          <?php echo $form['fin_at']->render(); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label>
          Ubicaci&oacute;n: <span style="color:#EE0000;">(*)</span>
          <br/>
          <?php echo $form['ubicacion']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label style="width: 30%;padding-right: 15pt";>
          Valor:
          <br/>
          <?php echo $form['valor']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Descripci&oacute;n: <span style="color:#EE0000;">(*)</span>
          <br/>
          <?php echo $form['descripcion']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Afiche:
          <br/>
          <?php echo $form['afiche']->render(); ?>
        </label>
  </p>
  <div style="float:right;"><span style="color:#EE0000;">(*)</span> Campo Obligatorio</div>
  <p>
    &nbsp;<a href="<?php echo url_for('eventos/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'eventos/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>