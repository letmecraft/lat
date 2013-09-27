<?php use_helper('I18N', 'Date') ?>
<?php include_partial('journey/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Journey', array(), 'messages') ?></h1>

  <?php include_partial('journey/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('journey/form_header', array('journey' => $journey, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('journey/form', array('journey' => $journey, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('journey/form_footer', array('journey' => $journey, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
