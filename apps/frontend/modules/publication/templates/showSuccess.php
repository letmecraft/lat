<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $publication->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $publication->getTitle() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $publication->getType() ?></td>
    </tr>
    <tr>
      <th>Cover:</th>
      <td><?php echo $publication->getCover() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $publication->getDescription() ?></td>
    </tr>
    <tr>
      <th>Published at:</th>
      <td><?php echo $publication->getPublishedAt() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $publication->getSlug() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $publication->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $publication->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('publication/edit?id='.$publication->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('publication/index') ?>">List</a>
