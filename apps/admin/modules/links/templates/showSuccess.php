<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $link->getId() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $link->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $link->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Link:</th>
      <td><?php echo $link->getLink() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('links/edit?id='.$link->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('links/index') ?>">List</a>
