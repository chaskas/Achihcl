<div class="content-box">

    <div class="content-box-header">

      <h3 style="cursor: s-resize; ">Postulantes a Socio ACHIH</h3>


      <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

      <div class="tab-content default-tab" id="tab1" style="display: block; ">

        <table class="listados">
          <thead>
            <tr>
              <th></th>
              <th>Nombre completo</th>
              <th>Instituci&oacute;n</th>
              <th>Email</th>
              <th>Tel&eacute;fono</th>
              <th>Opciones</th>
            </tr>
          </thead>

          <tbody>
          <?php foreach ($miembros as $miembro): ?>
          <?php $i = 0; ?>
          <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td>radio</td>
              <td><?php echo $miembro->getNombreCompleto() ?></td>
              <td><?php echo $miembro->getEmpresa() ?></td>
              <td><?php echo $miembro->getEmail() ?></td>
              <td><?php echo $miembro->getTelefono() ?></td>
              <td>
                <?php echo link_to(image_tag('icons/pencil.png', array('alt' => 'Editar', 'title' => 'Editar')), 'membresia/edit?id=' . $miembro->getId()) ?>
                <?php echo link_to(image_tag('icons/cross.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), 'membresia/delete?id=' . $miembro->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?')) ?>
              </td>
          </tr>
          <?php $i++; ?>
<?php endforeach; ?>
        </tbody>

      </table>

    </div> <!-- End #tab1 -->

  </div> <!-- End .content-box-content -->

</div>