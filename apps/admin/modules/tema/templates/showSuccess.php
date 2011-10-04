<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $tema->getId() ?></td>
    </tr>
    <tr>
      <th>First post:</th>
      <td><?php echo $tema->getFirstPostId() ?></td>
    </tr>
    <tr>
      <th>Foro:</th>
      <td><?php echo $tema->getForoId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $tema->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $tema->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $tema->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $tema->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tema/edit?id='.$tema->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tema/index') ?>">List</a>
