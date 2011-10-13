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
<br/>
<form action="<?php echo url_for('membresia/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <span class="title">Datos Personales</span>
  <br/><br/>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Nombre:
          <br/>
          <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Apellido:
          <br/>
          <?php echo $form['apellido']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Rut:
          <br/>
          <?php echo $form['rut']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Fecha de Nacimiento:
          <br/>
          <?php echo $form['nacimiento_at']->renderError(); ?>
          <?php echo $form['nacimiento_at']->render(); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Nacionalidad:
          <br/>
          <?php echo $form['nacionalidad']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Email:
          <br/>
          <?php echo $form['email']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:23%;">
          Profesi&oacute;n:
          <br/>
          <?php echo $form['profesion']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Universidad / Instituto / CFT:
          <br/>
          <?php echo $form['institucion']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Especialidad:
          <br/>
          <?php echo $form['especialidad']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:22%;">
          Sector:
          <br/>
          <?php echo $form['sector']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:22%;">
          Rol ACHIH:
          <br/>
          <?php echo $form['rol']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Comisi&oacute;n
          <br/>
          <?php echo $form['comision']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Subcomisi&oacute;n:
          <br/>
          <?php echo $form['subcomision']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Revista CCHRC:
          <br/>
          <?php echo $form['cchrc']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <br/><br/>
  <span class="title">Direcci&oacute;n Particular</span>
  <br/><br/>
  <p>
        <label style="float: left; padding-right: 20px;width:45%;">
          Direcci&oacute;n:
          <br/>
          <?php echo $form['direccion']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Comuna:
          <br/>
          <?php echo $form['comuna']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Ciudad:
          <br/>
          <?php echo $form['ciudad']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Tel&eacute;fono:
          <br/>
          <?php echo $form['telefono']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Celular:
          <br/>
          <?php echo $form['celular']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Pa&iacute;s:
          <br/>
          <?php echo $form['pais']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <br/><br/>
  <span class="title">Direcci&oacute;n Comercial</span>
  <br/><br/>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Empresa / Instituci&oacute;n:
          <br/>
          <?php echo $form['empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Cargo:
          <br/>
          <?php echo $form['cargo']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Email:
          <br/>
          <?php echo $form['email_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:45%;">
          Direcci&oacute;n:
          <br/>
          <?php echo $form['direccion_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Comuna:
          <br/>
          <?php echo $form['comuna_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Ciudad:
          <br/>
          <?php echo $form['ciudad_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Tel&eacute;fono:
          <br/>
          <?php echo $form['telefono_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Celular:
          <br/>
          <?php echo $form['celular_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Pa&iacute;s:
          <br/>
          <?php echo $form['pais_empresa']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
    &nbsp;<a href="<?php echo url_for('membresia/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'membresia/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
