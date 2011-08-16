<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>

<form action="<?php echo url_for('foro/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <?php if ($form->getObject()->isNew()): ?>
  <?php $form->setDefault('subcomision_id', $scid); ?>
  <?php endif; ?>

    <p>
        <label style="float:left;width:350pt;padding-right: 15pt;">
          Nombre:
          <br/>
          <?php echo $form['nombre']->render(array('class' => 'text-input large-input')); ?>
        </label>
        <label style="float:left;width:200pt;padding-right: 15pt;">
          Subcomisi&oacute;n
          <br/>
          <?php echo $form['subcomision_id']->render(array('class' => 'large-input')); ?>
        </label>
        <label style="float:left;width:20pt;padding-right: 20pt;">
          Temas
          <br/>
          <?php echo $form['ntopics']->render(array('class' => 'text-input large-input')); ?>
        </label>

        <label style="float:left;width:20pt;padding-right: 15pt;">
          Posts
          <br/>
          <?php echo $form['nposts']->render(array('class' => 'text-input large-input')); ?>
        </label>
    </p>
    <p>
      <label style="float:left;width:200pt;padding-right: 25pt;">
        Creado el
        <br/>
        <?php echo $form['created_at']->render(array('class' => 'large-input2')); ?>
      </label>

      <label style="float:left;width:200pt;padding-right: 25pt;">
        Modificado el
        <br/>
        <?php echo $form['updated_at']->render(array('class' => 'large-input2')); ?>
      </label>
    </p>
    
    <div style="clear:both;"></div>
    <p>
      <label><?php echo $form['created_by']->renderLabel(); ?></label>
      <?php echo $form['created_by']->render(array('class' => 'small-input')); ?>
    </p>
    <p>
      <label><?php echo $form['updated_by']->renderLabel(); ?></label>
      <?php echo $form['updated_by']->render(array('class' => 'small-input')); ?>
    </p>
    <p>
      <label><?php echo $form['descripcion']->renderLabel(); ?></label>
      <?php echo $form['descripcion']->render(array('class' => 'text-input text-area', 'style' => 'width: 100% !important;')); ?>
    </p>

    <p>
      <?php if ($form->getObject()->isNew()): ?>
        <a href="<?php echo url_for('foro/ShowForosBySubcomision?scid=' . $scid) ?>">Volver a la lista</a>
      <?php endif; ?>
      <?php if (!$form->getObject()->isNew()): ?>
        <a href="<?php echo url_for('foro/ShowForosBySubcomision?scid=' . $form->getObject()->getSubcomisionId()) ?>">Volver a la lista</a>
        &nbsp;<?php echo link_to('Eliminar', 'foro/delete?id=' . $form->getObject()->getId() . '&scid=' . $form->getObject()->getSubcomisionId(), array('method' => 'delete', 'confirm' => '¿Est&aacute; seguro?')) ?>
      <?php endif; ?>
      <input type="submit" value="Guardar" class="button"/>
    </p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
