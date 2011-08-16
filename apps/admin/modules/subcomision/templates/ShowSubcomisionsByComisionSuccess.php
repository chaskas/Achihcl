<div class="content-box">

  <div class="content-box-header">

    <h3 style="cursor: s-resize; ">
      <?php echo link_to('Comisiones','comision/index'); ?>
      &nbsp;»&nbsp;
      <?php echo link_to($comision->getNombre(),'subcomision/ShowSubcomisionsByComision?id='.$comision->getId()); ?>
      &nbsp;»&nbsp;
      Subcomisiones
    </h3>

    <ul class="content-box-tabs">
      <li><a href="<?php echo url_for('subcomision/new?cid='.$comision->getId()) ?>" class="button">Agregar Subcomisi&oacute;n</a></li>
    </ul>

    <div class="clear"></div>

  </div> <!-- End .content-box-header -->

  <div class="content-box-content">

    <div class="tab-content default-tab" id="tab1" style="display: block; ">

      <table  class="listados">
        <thead>
          <tr>
            <th></th>
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($subcomisions as $subcomision): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td></td>
              <td><?php echo $subcomision->getNombre() ?></td>
              <td><?php echo tools::getResumeShort(strip_tags($subcomision->getRawValue()->getDescripcion())) ?></td>
              <td>
                <!-- Icons -->
                <?php echo link_to(image_tag('icons/pencil.png',array('alt'=>'Editar','title'=>'Editar')), 'subcomision/edit?id='.$subcomision->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png',array('alt'=>'Eliminar','title'=>'Eliminar')), 'subcomision/delete?id='.$subcomision->getId().'&cid='.$comision->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
                <?php echo link_to(image_tag('icons/hammer_screwdriver.png',array('alt'=>'Ver Foros','title'=>'Ver Foros')), 'foro/ShowForosBySubcomision?scid='.$subcomision->getId()) ?>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->
  
</div>
<?php echo link_to('Volver a Listar Comisiones','comision/index'); ?>