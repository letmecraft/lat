<?php slot('bodyClass', 'journey') ?>
<?php slot('pageTitle', 'Voyage en partance') ?>
<?php setlocale(LC_TIME, "fr_FR"); ?>

<div id="content">

    <section id="content-header">
        <h2 class="h2">Contact et prochains voyages ouverts</h2>
    </section>

    <section id="frame">
        <ul class="slidee">

            <li class="type-text">
                <h3 class="h3">Fil rouge de mes voyages</h3>
                Des destinations atypiques & et des voyages inédits ; <br />
                Des expéditions & des thématiques spécifiques (itinérance, autonomie, snowkite, rando-voile) ;
                Un co-encadrement et/ou des petits groupes. Votre voyage révé n'est pas ci-dessus. Parlons en !
            </li>

            <li class="type-text">
                <h3 class="h3">Voyages été 2013</h3>

            <?php foreach ($seasons as $season): ?>
            <table>
                <?php foreach($season as $journey): ?>
                <tr>
                    <td class="image"><img src="<?php echo "/content/dumb/journey/".$journey['cover'] ?>" alt="photo"</td>
                    <td class="title"><?php echo $journey['title'] ?><br /><span class="details"><?php echo Journey::$seasons[$journey['season']] ?>


                    <?php if($journey['from_date'] != '0000-00-00 00:00:00'): ?>
                            : du <?php echo strftime('%d %B', strtotime($journey['from_date'])) ?> au <?php echo strftime('%d %B %G', strtotime($journey['to_date'])) ?></span></td>
                    <?php else: ?>
                            (date à définir)
                    <?php endif ?>
                    <td class="details"><?php echo $journey['place'] ?></td>
                    <td class="file"><a target="_blank" href="/content/dumb/journey/<?php echo $journey['file'] ?>"><img src="/images/file.png" alt="Présentation"</a></td>
                </tr>
                <?php endforeach ?>
            </table>
        <?php endforeach ?>
        
            </li>

            <li class="type-text">
                <h3 class="h3">Voyages hiver 2014</h3>

            <?php foreach ($seasons as $season): ?>
            <table>
                <?php foreach($season as $journey): ?>
                <tr>
                    <td class="image"><img src="<?php echo "/content/dumb/journey/".$journey['cover'] ?>" alt="photo"</td>
                    <td class="title"><?php echo $journey['title'] ?><br /><span class="details"><?php echo Journey::$seasons[$journey['season']] ?>


                    <?php if($journey['from_date'] != '0000-00-00 00:00:00'): ?>
                            : du <?php echo strftime('%d %B', strtotime($journey['from_date'])) ?> au <?php echo strftime('%d %B %G', strtotime($journey['to_date'])) ?></span></td>
                    <?php else: ?>
                            (date à définir)
                    <?php endif ?>
                    <td class="details"><?php echo $journey['place'] ?></td>
                    <td class="file"><a target="_blank" href="/content/dumb/journey/<?php echo $journey['file'] ?>"><img src="/images/file.png" alt="Présentation"</a></td>
                </tr>
                <?php endforeach ?>
            </table>
        <?php endforeach ?>

            </li>
    </ul>
</section>


<section id="controls">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>
    </section>
</div>