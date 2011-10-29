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
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($pager->getResults() as $link): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo $link->getTitulo() ?></td>
              <td><a href="<?php echo $link->getLink() ?>" target="_blank"><?php echo $link->getLink() ?></a></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'links/edit?id='.$link->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'links/delete?id='.$link->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
        
        <?php if ($pager->haveToPaginate()): ?>
        <tfoot>
          <tr>
            <td colspan="3">
              <div class="pagination">
                <?php echo link_to('« Primera', 'links/index?page='.$pager->getFirstPage()) ?>
                <?php echo link_to('« Anterior', 'links/index?page='.$pager->getPreviousPage()) ?>

                <?php foreach ($pager->getLinks() as $page): ?>
                  <?php if ($page == $pager->getPage()): ?>
                    <a href="<?php echo url_for('links/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
                  <?php else: ?>
                    <a href="<?php echo url_for('links/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
                  <?php endif; ?>
                <?php endforeach; ?>

                <?php echo link_to('Siguiente »', 'links/index?page='.$pager->getNextPage()) ?>
                <?php echo link_to('&Uacute;ltima »', 'links/index?page='.$pager->getLastPage()) ?>
              </div>
              <div class="clear"></div>
            </td>
          </tr>
        </tfoot>
        <?php endif ?>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>