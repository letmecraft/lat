<?php use_helper('I18N', 'Date') ?>
<?php include_partial('story/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Story', array(), 'messages') ?></h1>

  <?php include_partial('story/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('story/form_header', array('story' => $story, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('story/form', array('story' => $story, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('story/form_footer', array('story' => $story, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
