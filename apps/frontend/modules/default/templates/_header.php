<header>
    <p class="h1">
        <a href="<?php echo url_for("@homepage") ?>"><img class="logo" src="/images/header-logo.png" alt="Latitudes nord" /></a> - <?php include_slot('pageTitle', 'default') ?>
    </p>
    <hr />
    <p class="headline"><?php if(!include_slot('pageHeadline')): ?>
    <b>Michael Charavin</b> - <b>Guide spécialiste des régions polaires</b>, vous présente
    ses photographies <img src="/images/picto-carnet-photos.png" alt="carnet photos" /> et ses expéditions
    <img src="/images/picto-carnet-expe.png" alt="carnet expéditions" />
    <?php endif; ?></p>
</header>