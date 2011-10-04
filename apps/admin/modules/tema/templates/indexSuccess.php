<h1>Temas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First post</th>
      <th>Foro</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($temas as $tema): ?>
    <tr>
      <td><a href="<?php echo url_for('tema/show?id='.$tema->getId()) ?>"><?php echo $tema->getId() ?></a></td>
      <td><?php echo $tema->getFirstPostId() ?></td>
      <td><?php echo $tema->getForoId() ?></td>
      <td><?php echo $tema->getCreatedAt() ?></td>
      <td><?php echo $tema->getUpdatedAt() ?></td>
      <td><?php echo $tema->getCreatedBy() ?></td>
      <td><?php echo $tema->getUpdatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tema/new') ?>">New</a>
