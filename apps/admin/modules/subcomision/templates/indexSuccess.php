<h1>Subcomisions List</h1>

<table  class="listados">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Comision</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($subcomisions as $subcomision): ?>
    <tr>
      <td><a href="<?php echo url_for('subcomision/show?id='.$subcomision->getId()) ?>"><?php echo $subcomision->getId() ?></a></td>
      <td><?php echo $subcomision->getNombre() ?></td>
      <td><?php echo $subcomision->getDescripcion() ?></td>
      <td><?php echo $subcomision->getComisionId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('subcomision/new') ?>">New</a>
