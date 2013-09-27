<?php use_helper('I18N', 'Date') ?>
<?php include_partial('place/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Place', array(), 'messages') ?></h1>

  <?php include_partial('place/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('place/form_header', array('place' => $place, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('place/form', array('place' => $place, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('place/form_footer', array('place' => $place, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
