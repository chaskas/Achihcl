<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Post</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('post/new') ?>" class="button">Crear Post</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Asunto</th>
            <th>Creado por</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($posts as $post): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo tools::formatDate($post->getCreatedAt()) ?></td>
              <td><?php echo $post->getAsunto() ?></td>
              <td><?php echo $post->getCreatedBy() ?></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'post/edit?id='.$post->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'post/delete?id='.$post->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div>

  </div>

</div>