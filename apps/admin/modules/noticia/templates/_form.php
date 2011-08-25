<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>

<form action="<?php echo url_for('noticia/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <p>
        <label>
          T&iacute;tulo:
          <br/>
          <?php echo $form['titulo']->renderError(); ?>
          <?php echo $form['titulo']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
  <p>
        <label>
          Cuerpo:
          <br/>
          <?php echo $form['cuerpo']->renderError(); ?>
          <?php echo $form['cuerpo']->render(array('class' => 'text-input large-input')); ?>
        </label>
  </p>
<!--  <p>
        <label>
          Fechas:
          <br/>
          <?php //echo $form['created_at']->renderError(); ?>
          <?php //echo $form['created_at']->render(); ?>
        </label>
  </p>-->

  <p>
    &nbsp;<a href="<?php echo url_for('noticia/index') ?>">Volver a la lista</a>
    <?php if (!$form->getObject()->isNew()): ?>
        &nbsp;<?php echo link_to('Eliminar', 'noticia/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
    <?php endif; ?>
    <input type="submit" value="Guardar" class="button"/>
  </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
