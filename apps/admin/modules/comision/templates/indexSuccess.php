<h1>Comisions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comisions as $comision): ?>
    <tr>
      <td><a href="<?php echo url_for('comision/show?id='.$comision->getId()) ?>"><?php echo $comision->getId() ?></a></td>
      <td><?php echo $comision->getNombre() ?></td>
      <td><?php echo $comision->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comision/new') ?>">New</a>
