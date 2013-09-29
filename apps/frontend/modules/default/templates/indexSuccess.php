<?php slot('bodyClass', 'home') ?>
<?php slot('pageTitle', 'Carnets d\'expéditions et photographies') ?>

<div id="content">
        <!--<section id="log-list">
        <div class="header">
            <p><img src="/images/log-list/log-list-icon.png" alt="Icône de liste" />Liste des sujets</p>
        </div>
            <div class="wrapper"><div class="content">
            <?php foreach ( $stories as $story ): ?>
            <p>
                <span class="log-country"><?php echo $story->Place ?></span>
                <?php if($story->type == Story::TYPE_EXPE): ?>
                <span class="log-type"><img src="/images/log-list/log-list-expe.png" alt="Carnet d'expédition"/></span>
                <?php else: ?>
                <span class="log-type"><img src="/images/log-list/log-list-photo.png" alt="Carnet d'expédition"/></span>
                <?php endif ?>
                <span class="log-title"><?php echo $story->title ?></span>
            </p>
            <?php endforeach ?>
            <p class="shortener"><a href="#"><img src="/images/log-list/log-list-shortener.png" alt="Réduire" /></a></p>
        </div></div>
    </section>
-->
    <section id="map">
            <?php foreach ( $stories as $story ): ?>
            <li class="pin" style="left:<?php echo $story->pos_x ?>px; top:<?php echo $story->pos_y ?>px;" data-title="Blabla" data-cover="http://inapcache.boston.com/universal/site_graphics/blogs/bigpicture/ramadan2013a/bp1.jpg">
                <a href="<?php echo url_for('story_show', $story) ?>">
                    <?php if($story->type == Story::TYPE_EXPE): ?>
                    <img src="/images/picto-carnet-expe.png" alt="Carnet" />
                    <?php else: ?>
                    <img src="/images/picto-carnet-photos.png" alt="Photos" />
                    <?php endif ?>
                </a>
           </li>
        <?php endforeach ?>
    </section>

</div>