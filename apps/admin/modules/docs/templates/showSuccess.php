<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $doc->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $doc->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $doc->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Archivo:</th>
      <td><?php echo $doc->getArchivo() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $doc->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $doc->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('docs/edit?id='.$doc->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('docs/index') ?>">List</a>
