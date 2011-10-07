<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $evento->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $evento->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $evento->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Ubicacion:</th>
      <td><?php echo $evento->getUbicacion() ?></td>
    </tr>
    <tr>
      <th>Inicio at:</th>
      <td><?php echo $evento->getInicioAt() ?></td>
    </tr>
    <tr>
      <th>Fin at:</th>
      <td><?php echo $evento->getFinAt() ?></td>
    </tr>
    <tr>
      <th>Valor:</th>
      <td><?php echo $evento->getValor() ?></td>
    </tr>
    <tr>
      <th>Afiche:</th>
      <td><?php echo $evento->getAfiche() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('eventos/edit?id='.$evento->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('eventos/index') ?>">List</a>
