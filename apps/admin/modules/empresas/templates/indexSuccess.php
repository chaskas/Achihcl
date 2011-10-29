<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Empresas Colaboradoras</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('empresas/new') ?>" class="button">Nueva</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>URL</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($pager->getResults() as $empresa_colaboradora): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo $empresa_colaboradora->getNombre() ?></td>
              <td><?php echo link_to($empresa_colaboradora->getUrl(),$empresa_colaboradora->getUrl(),'target=blank') ?></td>
              <td>
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'empresas/edit?id='.$empresa_colaboradora->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'empresas/delete?id='.$empresa_colaboradora->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
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
                <?php echo link_to('« Primera', 'empresas/index?page='.$pager->getFirstPage()) ?>
                <?php echo link_to('« Anterior', 'empresas/index?page='.$pager->getPreviousPage()) ?>

                <?php foreach ($pager->getLinks() as $page): ?>
                  <?php if ($page == $pager->getPage()): ?>
                    <a href="<?php echo url_for('empresas/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
                  <?php else: ?>
                    <a href="<?php echo url_for('empresas/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
                  <?php endif; ?>
                <?php endforeach; ?>

                <?php echo link_to('Siguiente »', 'empresas/index?page='.$pager->getNextPage()) ?>
                <?php echo link_to('&Uacute;ltima »', 'empresas/index?page='.$pager->getLastPage()) ?>
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