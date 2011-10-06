<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Links</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('links/new') ?>" class="button">Crear link</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th>T&iacute;tulo</th>
            <th>Enlace</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($links as $link): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo $link->getTitulo() ?></td>
              <td><?php echo $link->getLink() ?></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'links/edit?id='.$link->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'links/delete?id='.$link->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>