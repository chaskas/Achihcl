<?php use_javascript('sendmail.js') ?>
<div id="two-col" class="border">
  <div id="left">
    <h1>Formulario de Contacto</h1>
    <p class="intro">
      Por favor complete el formulario, pr&oacute;ximamente nos pondremos en contacto con usted.
      <br/>
      Gracias por visitar nuestro website.
    </p>
    <div id="form">
      <form action="<?php echo url_for('static/sendmail') ?>" id="form-send" method="POST" autocomplete="off">
        <fieldset>
          <?php echo $form['name']->renderLabel('Tu Nombre'); ?>
          <?php echo $form['name']->render(array('class'=>'input1')); ?><br />
          <?php echo $form['email']->renderLabel('Tu email'); ?>
          <?php echo $form['email']->render(array('class'=>'input1')); ?><br />
          <?php echo $form['subject']->renderLabel('Asunto'); ?>
          <?php echo $form['subject']->render(array('class'=>'input1')); ?><br />
          <?php echo $form['message']->renderLabel('Mensaje'); ?>
          <?php echo $form['message']->render(); ?><br />
          <div class="indent">
            <input type="submit" value="Enviar" id="form-submit" class="submitbutton" />
          </div>
          <?php echo $form->renderHiddenFields(); ?>
        </fieldset>
      </form>
    </div>
  </div>
  <div id="right">
    <div id="sendmail"></div>
  </div>
</div>