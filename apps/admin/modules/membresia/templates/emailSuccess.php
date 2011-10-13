<?php use_javascript('tiny_mce/tiny_mce.js') ?>
<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Email Masivo</h3>
    
    <div class="clear"></div>

  </div>

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">
      Formulario de envio de emails masivos a todos los miembros registrados en achih.cl
      <br/><br/>
    <form action="<?php echo url_for('membresia/create') ?>" method="POST" autocomplete="off">
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
      <label style="text-align: right;">
      <?php echo link_to('Enviar', 'membresia/send', array('class'=>'button')) ?>
      </label>
    </form>
    </div>

  </div>

</div>