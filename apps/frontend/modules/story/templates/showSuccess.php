<?php slot('bodyClass', 'story') ?>
<?php slot('pageTitle', 'Carnets d\'expéditions et photographies') ?>
<?php setlocale(LC_TIME, "fr_FR"); ?>

<div id="content">

    <section id="content-header">
        <div class="filters">
            <a class="active" data-filter="all" href="#"><img src="/images/filter-all.png" alt="texte + images" /></a>
            <span class="separator"></span>
            <a class="text" data-filter="text" href="#"><img src="/images/filter-text.png" alt="texte" /></a>
            <span class="separator"></span>
            <a class="images" data-filter="image" href="#"><img src="/images/filter-images.png" alt="images" /></a>
        </div>
        
        <h1 class="h2"><?php echo $story->title ?></h1>
    </section>

    <section id="frame">
        <ul class="slidee">

            

            <?php echo $story->getRawValue()->getContent() ?>
            
            <li class="type-text insert">
                <h2 class="h3">Pour aller plus loin</h2>
                <ul>
                    <li><a href="#">Les ailes de Kyte, fsdfsd sdfsdf</a></li>
                    <li><a href="#">Les ailes de Kyte, fsdfsd sdfsdf</a></li>
                    <li><a href="#">Les ailes de Kyte, fsdfsd sdfsdf</a></li>
                    <li><a href="#">Les ailes de Kyte, fsdfsd sdfsdf</a></li>
                </ul>
            </li>
            <li class="type-empty"></li>
        </ul>
    </section>

    <section id="controls">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>
    </section>
</div>