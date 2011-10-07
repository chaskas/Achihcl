<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Documentos</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('docs/new') ?>" class="button">Publicar documento</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th>Publicado el</th>
            <th>T&iacute;tulo</th>
            <th>Tama&ntilde;o</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($docs as $doc): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo tools::formatDate($doc->getCreatedAt()) ?></td>
              <td><?php echo $doc->getNombre() ?></td>
              <td><?php echo tools::byteFormat(filesize('uploads/docs/'.$doc->getArchivo()),'KB') ?></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'docs/edit?id='.$doc->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'docs/delete?id='.$doc->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
                <?php echo link_to(image_tag('icons/download_link.png',array('alt'=>'Descargar','title'=>'Descargar')), 'http://'.$_SERVER['HTTP_HOST'].'/uploads/docs/'.$doc->getArchivo()) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>