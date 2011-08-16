<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $foro->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $foro->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $foro->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Ntopics:</th>
      <td><?php echo $foro->getNtopics() ?></td>
    </tr>
    <tr>
      <th>Nposts:</th>
      <td><?php echo $foro->getNposts() ?></td>
    </tr>
    <tr>
      <th>Subcomision:</th>
      <td><?php echo $foro->getSubcomisionId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $foro->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $foro->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $foro->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $foro->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('foro/edit?id='.$foro->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('foro/index') ?>">List</a>
