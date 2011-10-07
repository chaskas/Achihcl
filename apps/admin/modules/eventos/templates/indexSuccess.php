<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Eventos</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('eventos/new') ?>" class="button">Crear Evento</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th>Fecha Inicio</th>
            <th>Nombre</th>
            <th>Ubicaci&oacute;n</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($eventos as $evento): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo tools::formatDate($evento->getInicioAt()) ?></td>
              <td><?php echo $evento->getNombre() ?></td>
              <td><?php echo $evento->getUbicacion() ?></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'eventos/edit?id='.$evento->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'eventos/delete?id='.$evento->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>
