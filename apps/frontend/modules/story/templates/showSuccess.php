<?php slot('bodyClass', 'story') ?>
<?php slot('pageTitle', 'Carnets d\'expéditions et photographies') ?>
<?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>

<div id="content">

    <section id="content-header">
        <!--<div class="filters">
            <a class="active" data-filter="all" href="#"><img src="/images/filter-all.png" alt="texte + images" /></a>
            <span class="separator"></span>
            <a class="text" data-filter="text" href="#"><img src="/images/filter-text.png" alt="texte" /></a>
            <span class="separator"></span>
            <a class="images" data-filter="image" href="#"><img src="/images/filter-images.png" alt="images" /></a>
        </div>-->
        
        <h1 class="h2"><?php echo $story->title ?></h1>
    </section>

    <section id="frame">

        <ul class="slidee">

            <li class="type-image cover">
                <div class="stamp">
                    <span class="separator top">_</span>
                    <span class="date"><br />Du <?php echo strftime('%d %B', strtotime($story->started_at)) ?> au <?php echo strftime('%d %B %G', strtotime($story->ended_at)) ?></span><br />
                    <span class="title"><?php echo $story->title ?><br /></span><br />
                    <span class="separator bottom">_</span>
                </div>

                <img src="/ups/images/story/<?php echo $story->id . "/" . $story->cover ?>" alt="" />
            </li>

            <li class="type-image">
                <img src="/ups/images/story/<?php echo $story->id . "/" . $story->cover ?>" alt="" />
                <p class="caption"><span>C'est sur cette île de l'Atlantique Nord que nous avions jeté notre dévolu pour cette nouvelle expé en terres "polaires". La tentation était grande, pour nous qui arpentions régulièrement la contrée des Elfes et des Trolls, d'y dessiner une trajectoire parfaite</span></p>
            </li>

            <?php echo $story->getRawValue()->getContent() ?>            
            <li class="type-empty"></li>
        </ul>
    </section>

    <section id="controls">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>
    </section>
</div>