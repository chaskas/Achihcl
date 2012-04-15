<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">Banners</h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('banner/new') ?>" class="button">Nuevo</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table class="listados">
        <thead>
          <tr>
            <th style="width: 100px;">Publicado el</th>
            <th style="width: 250px;">Miniatura</th>
            <th>T&iacute;tulo</th>
            <th style="width: 100px;">Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($banners as $banner): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td style="vertical-align: middle;"><?php echo tools::formatDate($banner->getCreatedAt()) ?></td>
              <td><img src="<?php echo $banner->getImageSrc('slide', 'mini') ?>" alt="Slide" /></td>
              <td style="vertical-align: middle;"><?php echo link_to($banner->getTitulo(),'banner/edit?id='.$banner->getId()); ?></td>
              <td style="vertical-align: middle;">
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'banner/edit?id='.$banner->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'banner/delete?id='.$banner->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>