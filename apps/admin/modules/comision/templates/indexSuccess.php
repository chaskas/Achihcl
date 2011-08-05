<div class="content-box"><!-- Start Content Box -->

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Comisiones</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('comision/new') ?>" class="button">Crear comisi&oacute;n</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table>
        <thead>
          <tr>
            <th></th>
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($comisions as $comision): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td></td>
              <td><?php echo $comision->getNombre() ?></td>
              <td><?php echo $comision->getRawValue()->getDescripcion() ?></td>
              <td>
                <!-- Icons -->
                <a href="<?php echo url_for('comision/edit?id=' . $comision->getId()) ?>" title="Editar"><?php echo image_tag('icons/pencil.png', 'alt=Editar'); ?></a>
                <?php echo link_to('<img src="/images/icons/cross.png" alt="Eliminar" />', 'comision/delete?id='.$comision->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>