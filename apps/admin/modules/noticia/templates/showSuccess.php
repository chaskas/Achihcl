<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $noticia->getId() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $noticia->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Cuerpo:</th>
      <td><?php echo $noticia->getCuerpo() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $noticia->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $noticia->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $noticia->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $noticia->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('noticia/edit?id='.$noticia->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('noticia/index') ?>">List</a>
