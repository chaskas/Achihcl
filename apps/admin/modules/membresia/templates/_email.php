<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<form action="<?php echo url_for('membresia/emailCreate') ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <p>
    <label>
      Asunto:
      <br/>
      <?php echo $form['subject']->render(array('class' => 'text-input large-input')); ?>
      <?php echo $form['subject']->renderError(); ?>
    </label>
  </p>
  <div style="clear: both;"></div>
  <p>
    <label>
      Mensaje:
      <br/>
      <?php echo $form['message']->render(array('class' => 'text-input large-input')); ?>
      <?php echo $form['message']->renderError(); ?>
    </label>
  </p>
  <div style="clear: both;"></div>
  <?php echo $form->renderHiddenFields(); ?>
  <label style="text-align: right;">
    <input type="submit" value="Enviar" class="button"/>
  </label>
</form>