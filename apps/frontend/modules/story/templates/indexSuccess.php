<?php slot('bodyId', '') ?>
<?php slot('pageTitle', 'Carnets d\'expéditions et photographies') ?>


<h1>Storys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Type</th>
      <th>Is published</th>
      <th>Started at</th>
      <th>Ended at</th>
      <th>Cover</th>
      <th>Pos x</th>
      <th>Pos y</th>
      <th>Slug</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($storys as $story): ?>
    <tr>
      <td><a href="<?php echo url_for('story/show?id='.$story->getId()) ?>"><?php echo $story->getId() ?></a></td>
      <td><?php echo $story->getTitle() ?></td>
      <td><?php echo $story->getType() ?></td>
      <td><?php echo $story->getIsPublished() ?></td>
      <td><?php echo $story->getStartedAt() ?></td>
      <td><?php echo $story->getEndedAt() ?></td>
      <td><?php echo $story->getCover() ?></td>
      <td><?php echo $story->getPosX() ?></td>
      <td><?php echo $story->getPosY() ?></td>
      <td><?php echo $story->getSlug() ?></td>
      <td><?php echo $story->getCreatedAt() ?></td>
      <td><?php echo $story->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('story/new') ?>">New</a>
