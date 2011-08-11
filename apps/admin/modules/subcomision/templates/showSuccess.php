<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $subcomision->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $subcomision->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $subcomision->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Comision:</th>
      <td><?php echo $subcomision->getComisionId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('subcomision/edit?id='.$subcomision->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('subcomision/index') ?>">List</a>
