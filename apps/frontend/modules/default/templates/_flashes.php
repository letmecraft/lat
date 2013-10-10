<?php if($sf_user->hasFlash('notice') !== false): ?>
<div class="flash notice"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif ?>

<?php if($sf_user->hasFlash('error') !== false): ?>
<div class="flash error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif ?>