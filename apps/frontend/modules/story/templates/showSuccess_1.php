<?php slot('bodyId', 'story') ?>
<?php slot('pageTitle', 'Carnets d\'expéditions et photographies') ?>
<?php slot('controls', true) ?>
<?php slot('pageHeadline') ?>
<a href="<?php echo url_for("@homepage") ?>">Retour à la carte</a> <img src="/images/picto-carnet-photos.png" alt="carnet photos" />
<img src="/images/picto-carnet-expe.png" alt="carnet expéditions" />
<?php end_slot() ?>
<?php setlocale(LC_TIME, "fr_FR"); ?>

<section role="main" id="main" class="has-container">

    <section id="heading">

    </section>

    <div id="filters">
        <a class="active" data-filter="all" href="#"><img src="/images/filter-all.png" alt="texte + images" /></a>
        <span class="separator"></span>
        <a class="text" data-filter="text" href="#"><img src="/images/filter-text.png" alt="texte" /></a>
        <span class="separator"></span>
        <a class="images" data-filter="images" href="#"><img src="/images/filter-images.png" alt="images" /></a>
    </div>

    <h1 class="h2"><?php echo $story->title ?></h1>
    <p><img src="/images/expe-marker.png" alt="marker" /></p>

    <div class="container" class="clearfix">
        <article class="type-image cover">

        <div class="stamp">
            <span class="separator top">_</span>
            <span class="date"><br />Du <?php echo strftime('%d %B', strtotime($story->started_at)) ?> au <?php echo strftime('%d %B %G', strtotime($story->ended_at)) ?></span><br />
            <span class="title"><?php echo $story->title ?><br /></span><br />
            <span class="separator bottom">_</span>
        </div>

        <img src="<?php echo $story->cover ?>" alt="" />
        </article>
        <?php echo $story->getRawValue()->getContent() ?>

        <article class="type-text insert more">
            <h2 class="h2">Pour aller plus loin</h2>
            <ul class="normal">
                <li><a href="#" class="h3">Les ailes de Kyte</a><br/><p>Me projeter... dessiner mon propre cheminenment. Et une fois sur le terrain, </p></li>
                <li><a href="#" class="h3">Les ailes de Kyte</a><br/><p>Me projeter... dessiner mon propre cheminenment. Et une fois sur le terrain, </p></li>
                <li><a href="#" class="h3">Les ailes de Kyte</a><br/><p>Me projeter... dessiner mon propre cheminenment. Et une fois sur le terrain, </p></li>
            </ul>
        <article>
    </div>
    <p><img src="/images/expe-marker.png" alt="marker" /></p>
</section>