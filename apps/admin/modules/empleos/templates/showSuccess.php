<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $empleo->getId() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $empleo->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $empleo->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Ciudad:</th>
      <td><?php echo $empleo->getCiudad() ?></td>
    </tr>
    <tr>
      <th>Region:</th>
      <td><?php echo $empleo->getRegion() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $empleo->getDuracion() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $empleo->getTipo() ?></td>
    </tr>
    <tr>
      <th>Sueldo:</th>
      <td><?php echo $empleo->getSueldo() ?></td>
    </tr>
    <tr>
      <th>Empresa:</th>
      <td><?php echo $empleo->getEmpresa() ?></td>
    </tr>
    <tr>
      <th>Nombre contacto:</th>
      <td><?php echo $empleo->getNombreContacto() ?></td>
    </tr>
    <tr>
      <th>Telefono contacto:</th>
      <td><?php echo $empleo->getTelefonoContacto() ?></td>
    </tr>
    <tr>
      <th>Email contacto:</th>
      <td><?php echo $empleo->getEmailContacto() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $empleo->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $empleo->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('empleos/edit?id='.$empleo->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('empleos/index') ?>">List</a>
