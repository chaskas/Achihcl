<div class="content-box">

    <div class="content-box-header">

      <h3 style="cursor: s-resize; ">Miembros ACHIH</h3>

      <ul class="content-box-tabs">
        <li><a href="<?php echo url_for('membresia/new') ?>" class="button">Nuevo miembro</a></li>
      </ul>

      <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

      <div class="tab-content default-tab" id="tab1" style="display: block; ">

        <table class="listados">
          <thead>
            <tr>
              <th>Nombre completo</th>
              <th>Instituci&oacute;n</th>
              <th>Email</th>
              <th>Celular</th>
              <th>Opciones</th>
            </tr>
          </thead>

          <tbody>
          <?php foreach ($pager->getResults() as $miembro): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo $miembro->getNombreCompleto() ?></td>
              <td><?php echo $miembro->getEmpresa() ?></td>
              <td><?php echo $miembro->getEmail() ?></td>
              <td><?php echo $miembro->getCelular() ?></td>
              <td>
                <!-- Icons -->
              <?php echo link_to(image_tag('icons/pencil.png', array('alt' => 'Editar', 'title' => 'Editar')), 'membresia/edit?id=' . $miembro->getId()) ?>
              <?php echo link_to(image_tag('icons/cross.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), 'membresia/delete?id=' . $miembro->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
            </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
        
        <?php if ($pager->haveToPaginate()): ?>
        <tfoot>
          <tr>
            <td colspan="5">
              <div class="pagination">
                <?php echo link_to('« Primera', 'membresia/index?page='.$pager->getFirstPage()) ?>
                <?php echo link_to('« Anterior', 'membresia/index?page='.$pager->getPreviousPage()) ?>

                <?php foreach ($pager->getLinks() as $page): ?>
                  <?php if ($page == $pager->getPage()): ?>
                    <a href="<?php echo url_for('membresia/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
                  <?php else: ?>
                    <a href="<?php echo url_for('membresia/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
                  <?php endif; ?>
                <?php endforeach; ?>

                <?php echo link_to('Siguiente »', 'membresia/index?page='.$pager->getNextPage()) ?>
                <?php echo link_to('&Uacute;ltima »', 'membresia/index?page='.$pager->getLastPage()) ?>
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