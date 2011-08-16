<h1>Foros List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Ntopics</th>
      <th>Nposts</th>
      <th>Subcomision</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($foros as $foro): ?>
    <tr>
      <td><a href="<?php echo url_for('foro/show?id='.$foro->getId()) ?>"><?php echo $foro->getId() ?></a></td>
      <td><?php echo $foro->getNombre() ?></td>
      <td><?php echo $foro->getDescripcion() ?></td>
      <td><?php echo $foro->getNtopics() ?></td>
      <td><?php echo $foro->getNposts() ?></td>
      <td><?php echo $foro->getSubcomisionId() ?></td>
      <td><?php echo $foro->getCreatedAt() ?></td>
      <td><?php echo $foro->getUpdatedAt() ?></td>
      <td><?php echo $foro->getCreatedBy() ?></td>
      <td><?php echo $foro->getUpdatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('foro/new') ?>">New</a>
