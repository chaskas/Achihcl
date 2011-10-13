<?php use_stylesheets_for_form($form) ?>
<?php use_stylesheet('south-street/jquery-ui-1.7.3.custom.css') ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('jquery-1.3.2.min.js'); ?>
<?php use_javascript('jquery-ui-1.7.3.custom.min.js'); ?>
<?php use_javascript('jquery.ui.datepicker-es.js'); ?>
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
          <?php echo $form['nombre']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Apellido:
          <br/>
          <?php echo $form['apellido']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Rut:
          <br/>
          <?php echo $form['rut']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Fecha de Nacimiento:
          <br/>
          <?php echo $form['nacimiento_at']->render(array('class'=>'input-large2')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Nacionalidad:
          <br/>
          <?php echo $form['nacionalidad']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Email:
          <br/>
          <?php echo $form['email']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:23%;">
          Profesi&oacute;n:
          <br/>
          <?php echo $form['profesion']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Universidad / Instituto / CFT:
          <br/>
          <?php echo $form['institucion']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Especialidad:
          <br/>
          <?php echo $form['especialidad']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:22%;">
          Sector:
          <br/>
          <?php echo $form['sector']->render(array('class' => 'input-large')); ?>
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
          <?php echo $form['direccion']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Comuna:
          <br/>
          <?php echo $form['comuna']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Ciudad:
          <br/>
          <?php echo $form['ciudad']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Tel&eacute;fono:
          <br/>
          <?php echo $form['telefono']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Celular:
          <br/>
          <?php echo $form['celular']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Pa&iacute;s:
          <br/>
          <?php echo $form['pais']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <br/><br/>
  <span class="title">Direcci&oacute;n Comercial</span>
  <br/><br/>
  <p>
        <label style="float: left; padding-right: 20px;width:30%;">
          Empresa / Instituci&oacute;n:
          <br/>
          <?php echo $form['empresa']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Cargo:
          <br/>
          <?php echo $form['cargo']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:30%;">
          Email:
          <br/>
          <?php echo $form['email_empresa']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:45%;">
          Direcci&oacute;n:
          <br/>
          <?php echo $form['direccion_empresa']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Comuna:
          <br/>
          <?php echo $form['comuna_empresa']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:23%;">
          Ciudad:
          <br/>
          <?php echo $form['ciudad_empresa']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  <div style="clear: both;"></div>
  <p>
        <label style="float: left; padding-right: 20px;width:31%;">
          Tel&eacute;fono:
          <br/>
          <?php echo $form['telefono_empresa']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Celular:
          <br/>
          <?php echo $form['celular_empresa']->render(array('class' => 'input-large')); ?>
        </label>
        <label style="float: left; padding-right: 20px;width:31%;">
          Pa&iacute;s:
          <br/>
          <?php echo $form['pais_empresa']->render(array('class' => 'input-large')); ?>
        </label>
  </p>
  
  <div style="clear: both;padding-top: 20px;"></div>
  <center><?php echo $form['captcha']->render() ?>
  <div style="clear: both;padding-top: 20px;"></div>
  <input type="submit" value="Enviar mi solicitud" class="button"/>
  </center>
  <?php echo $form->renderHiddenFields(); ?>
</form>
