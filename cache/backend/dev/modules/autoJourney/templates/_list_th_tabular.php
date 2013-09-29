<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_title">
  <?php if ('title' == $sort[0]): ?>
    <?php echo link_to(__('Titre', array(), 'messages'), '@journey', array('query_string' => 'sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Titre', array(), 'messages'), '@journey', array('query_string' => 'sort=title&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>