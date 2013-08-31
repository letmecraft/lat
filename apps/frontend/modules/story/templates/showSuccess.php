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

            <li class="type-image cover">
                <div class="stamp">
                    <span class="separator top">_</span>
                    <span class="date"><br />Du <?php echo strftime('%d %B', strtotime($story->started_at)) ?> au <?php echo strftime('%d %B %G', strtotime($story->ended_at)) ?></span><br />
                    <span class="title"><?php echo $story->title ?><br /></span><br />
                    <span class="separator bottom">_</span>
                </div>
                <img src="<?php echo $story->cover ?>" alt="" />
            </li>

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