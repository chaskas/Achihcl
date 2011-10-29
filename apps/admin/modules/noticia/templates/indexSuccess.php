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
            <th>Fecha</th>
            <th>T&iacute;tulo</th>
            <th>Cuerpo</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($pager->getResults() as $noticia): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo tools::formatDate($noticia->getCreatedAt()) ?></td>
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
        
        <?php if ($pager->haveToPaginate()): ?>
        <tfoot>
          <tr>
            <td colspan="4">
              <div class="pagination">
                <?php echo link_to('« Primera', 'noticia/index?page='.$pager->getFirstPage()) ?>
                <?php echo link_to('« Anterior', 'noticia/index?page='.$pager->getPreviousPage()) ?>

                <?php foreach ($pager->getLinks() as $page): ?>
                  <?php if ($page == $pager->getPage()): ?>
                    <a href="<?php echo url_for('noticia/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
                  <?php else: ?>
                    <a href="<?php echo url_for('noticia/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
                  <?php endif; ?>
                <?php endforeach; ?>

                <?php echo link_to('Siguiente »', 'noticia/index?page='.$pager->getNextPage()) ?>
                <?php echo link_to('&Uacute;ltima »', 'noticia/index?page='.$pager->getLastPage()) ?>
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