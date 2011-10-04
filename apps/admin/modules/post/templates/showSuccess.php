<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $post->getId() ?></td>
    </tr>
    <tr>
      <th>Asunto:</th>
      <td><?php echo $post->getAsunto() ?></td>
    </tr>
    <tr>
      <th>Cuerpo:</th>
      <td><?php echo $post->getCuerpo() ?></td>
    </tr>
    <tr>
      <th>Tema:</th>
      <td><?php echo $post->getTemaId() ?></td>
    </tr>
    <tr>
      <th>Foro:</th>
      <td><?php echo $post->getForoId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $post->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $post->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $post->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $post->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('post/edit?id='.$post->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">List</a>
