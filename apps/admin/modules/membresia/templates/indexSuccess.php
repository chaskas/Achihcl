<h1>Miembros List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Nacimiento at</th>
      <th>Rut</th>
      <th>Nacionalidad</th>
      <th>Profesion</th>
      <th>Institucion</th>
      <th>Direccion</th>
      <th>Comuna</th>
      <th>Ciudad</th>
      <th>Pais</th>
      <th>Telefono</th>
      <th>Fax</th>
      <th>Email</th>
      <th>Empresa</th>
      <th>Cargo</th>
      <th>Direccion empresa</th>
      <th>Comuna empresa</th>
      <th>Ciudad empresa</th>
      <th>Pais empresa</th>
      <th>Telefono empresa</th>
      <th>Fax empresa</th>
      <th>Email empresa</th>
      <th>Is aprobado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($miembros as $miembro): ?>
    <tr>
      <td><a href="<?php echo url_for('membresia/show?id='.$miembro->getId()) ?>"><?php echo $miembro->getId() ?></a></td>
      <td><?php echo $miembro->getNombre() ?></td>
      <td><?php echo $miembro->getApellido() ?></td>
      <td><?php echo $miembro->getNacimientoAt() ?></td>
      <td><?php echo $miembro->getRut() ?></td>
      <td><?php echo $miembro->getNacionalidad() ?></td>
      <td><?php echo $miembro->getProfesion() ?></td>
      <td><?php echo $miembro->getInstitucion() ?></td>
      <td><?php echo $miembro->getDireccion() ?></td>
      <td><?php echo $miembro->getComuna() ?></td>
      <td><?php echo $miembro->getCiudad() ?></td>
      <td><?php echo $miembro->getPais() ?></td>
      <td><?php echo $miembro->getTelefono() ?></td>
      <td><?php echo $miembro->getFax() ?></td>
      <td><?php echo $miembro->getEmail() ?></td>
      <td><?php echo $miembro->getEmpresa() ?></td>
      <td><?php echo $miembro->getCargo() ?></td>
      <td><?php echo $miembro->getDireccionEmpresa() ?></td>
      <td><?php echo $miembro->getComunaEmpresa() ?></td>
      <td><?php echo $miembro->getCiudadEmpresa() ?></td>
      <td><?php echo $miembro->getPaisEmpresa() ?></td>
      <td><?php echo $miembro->getTelefonoEmpresa() ?></td>
      <td><?php echo $miembro->getFaxEmpresa() ?></td>
      <td><?php echo $miembro->getEmailEmpresa() ?></td>
      <td><?php echo $miembro->getIsAprobado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('membresia/new') ?>">New</a>
