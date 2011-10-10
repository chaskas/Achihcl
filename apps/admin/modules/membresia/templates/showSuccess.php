<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $miembro->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $miembro->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $miembro->getApellido() ?></td>
    </tr>
    <tr>
      <th>Nacimiento at:</th>
      <td><?php echo $miembro->getNacimientoAt() ?></td>
    </tr>
    <tr>
      <th>Rut:</th>
      <td><?php echo $miembro->getRut() ?></td>
    </tr>
    <tr>
      <th>Nacionalidad:</th>
      <td><?php echo $miembro->getNacionalidad() ?></td>
    </tr>
    <tr>
      <th>Profesion:</th>
      <td><?php echo $miembro->getProfesion() ?></td>
    </tr>
    <tr>
      <th>Institucion:</th>
      <td><?php echo $miembro->getInstitucion() ?></td>
    </tr>
    <tr>
      <th>Direccion:</th>
      <td><?php echo $miembro->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Comuna:</th>
      <td><?php echo $miembro->getComuna() ?></td>
    </tr>
    <tr>
      <th>Ciudad:</th>
      <td><?php echo $miembro->getCiudad() ?></td>
    </tr>
    <tr>
      <th>Pais:</th>
      <td><?php echo $miembro->getPais() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $miembro->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Fax:</th>
      <td><?php echo $miembro->getFax() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $miembro->getEmail() ?></td>
    </tr>
    <tr>
      <th>Empresa:</th>
      <td><?php echo $miembro->getEmpresa() ?></td>
    </tr>
    <tr>
      <th>Cargo:</th>
      <td><?php echo $miembro->getCargo() ?></td>
    </tr>
    <tr>
      <th>Direccion empresa:</th>
      <td><?php echo $miembro->getDireccionEmpresa() ?></td>
    </tr>
    <tr>
      <th>Comuna empresa:</th>
      <td><?php echo $miembro->getComunaEmpresa() ?></td>
    </tr>
    <tr>
      <th>Ciudad empresa:</th>
      <td><?php echo $miembro->getCiudadEmpresa() ?></td>
    </tr>
    <tr>
      <th>Pais empresa:</th>
      <td><?php echo $miembro->getPaisEmpresa() ?></td>
    </tr>
    <tr>
      <th>Telefono empresa:</th>
      <td><?php echo $miembro->getTelefonoEmpresa() ?></td>
    </tr>
    <tr>
      <th>Fax empresa:</th>
      <td><?php echo $miembro->getFaxEmpresa() ?></td>
    </tr>
    <tr>
      <th>Email empresa:</th>
      <td><?php echo $miembro->getEmailEmpresa() ?></td>
    </tr>
    <tr>
      <th>Is aprobado:</th>
      <td><?php echo $miembro->getIsAprobado() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('membresia/edit?id='.$miembro->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('membresia/index') ?>">List</a>
