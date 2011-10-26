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
          <?php foreach ($empleos as $empleo): ?>
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

      </table>

    </div>

  </div>

</div>