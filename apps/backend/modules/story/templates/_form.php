<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@story') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('story/form_fieldset', array('story' => $story, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    <div class="sf_admin_form_row sf_admin_foreignkey story_map_position">
      <label>Position sur la carte</label>
      <div class="content"><img class="pin" src="/images/backend/pin.png" alt="0"><img class="map" src="/images/map.jpg" alt="Carte des carnets" /></div>
    </div>

    <?php include_partial('story/form_actions', array('story' => $story, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
