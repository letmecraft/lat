<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($story->getId(), 'story_edit', $story) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $story->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $story->getType() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_published">
  <?php echo get_partial('story/list_field_boolean', array('value' => $story->getIsPublished())) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_started_at">
  <?php echo false !== strtotime($story->getStartedAt()) ? format_date($story->getStartedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_ended_at">
  <?php echo false !== strtotime($story->getEndedAt()) ? format_date($story->getEndedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cover">
  <?php echo $story->getCover() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_place">
  <?php echo $story->getPlace() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $story->getContent() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_pos_x">
  <?php echo $story->getPosX() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_pos_y">
  <?php echo $story->getPosY() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($story->getCreatedAt()) ? format_date($story->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($story->getUpdatedAt()) ? format_date($story->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $story->getSlug() ?>
</td>
