<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $comision->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $comision->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $comision->getRawValue()->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comision/edit?id='.$comision->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comision/index') ?>">List</a>
