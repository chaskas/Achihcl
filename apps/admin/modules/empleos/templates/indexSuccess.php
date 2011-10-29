<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Empleos</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('empleos/new') ?>" class="button">Nuevo</a></li>
    </ul>

    <div class="clear"></div>

  </div>

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th>Publicado el</th>
            <th>T&iacute;tulo</th>
            <th>Localidad</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($pager->getResults() as $empleo): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo tools::formatDate($empleo->getCreatedAt()) ?></td>
              <td><?php echo $empleo->getTitulo(); ?></td>
              <td><?php echo $empleo->getLocalidad(); ?></td>
              <td>
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'empleos/edit?id='.$empleo->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'empleos/delete?id='.$empleo->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

        <?php if ($pager->haveToPaginate()): ?>
        <tfoot>
          <tr>
            <td colspan="4">
              <div class="pagination">
                <?php echo link_to('« Primera', 'empleos/index?page='.$pager->getFirstPage()) ?>
                <?php echo link_to('« Anterior', 'empleos/index?page='.$pager->getPreviousPage()) ?>

                <?php foreach ($pager->getLinks() as $page): ?>
                  <?php if ($page == $pager->getPage()): ?>
                    <a href="<?php echo url_for('empleos/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
                  <?php else: ?>
                    <a href="<?php echo url_for('empleos/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
                  <?php endif; ?>
                <?php endforeach; ?>

                <?php echo link_to('Siguiente »', 'empleos/index?page='.$pager->getNextPage()) ?>
                <?php echo link_to('&Uacute;ltima »', 'empleos/index?page='.$pager->getLastPage()) ?>
              </div>
              <div class="clear"></div>
            </td>
          </tr>
        </tfoot>
        <?php endif ?>
        
      </table>

    </div>

  </div>

</div>