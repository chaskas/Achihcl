<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>
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
<br/>
<form action="<?php echo url_for('empleos/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <p>
        <label style="float: left; padding-right: 20px;width:55%;">
          T&iacute;tulo:
          <br/>
          <?php echo $form['titulo']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:40%;">
          Tipo:
          <br/>
          <?php echo $form['tipo']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:23%;">
          Ciudad:
          <br/>
          <?php echo $form['ciudad']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Regi&oacute;n:
          <br/>
          <?php echo $form['region']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:22%;">
          Sueldo:
          <br/>
          <?php echo $form['sueldo']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Duraci&oacute;n
          <br/>
          <?php echo $form['duracion']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:99%;">
          Nombre Empresa / Instituci&oacute;n:
          <br/>
          <?php echo $form['empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Nombre Contacto:
          <br/>
          <?php echo $form['nombre_contacto']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Tel&eacute;fono:
          <br/>
          <?php echo $form['telefono_contacto']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Email:
          <br/>
          <?php echo $form['email_contacto']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label>
          Descripci&oacute;n:
          <br/>
          <?php echo $form['descripcion']->render(); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
    &nbsp;<a href="<?php echo url_for('empleos/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'empleos/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
