<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Noticias</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('noticia/new') ?>" class="button">Crear Noticia</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th></th>
            <th>T&iacute;tulo</th>
            <th>Cuerpo</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($noticias as $noticia): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td></td>
              <td><?php echo $noticia->getTitulo() ?></td>
              <td><?php echo tools::getResumeShort(strip_tags($noticia->getRawValue()->getCuerpo())) ?></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'noticia/edit?id='.$noticia->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'noticia/delete?id='.$noticia->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>