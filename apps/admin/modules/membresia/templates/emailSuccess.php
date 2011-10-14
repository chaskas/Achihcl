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
      <?php include_partial('email', array('form' => $form)) ?>
    </div>

  </div>

</div>