<?php slot('bodyClass', 'journey') ?>
<?php slot('pageTitle', 'Voyage en partance') ?>
<?php setlocale(LC_TIME, "fr_FR"); ?>
<?php use_helper('Text') ?>

<div id="content">

    <section id="content-header">
        <h2 class="h2">Prochains départs</h2>
    </section>

    <section id="frame">
        <ul class="slidee">

            <li class="type-text">
                <h3 class="h3">Fil rouge de mes voyages</h3>
                Des destinations atypiques & et des voyages inédits ; <br />
                Des expéditions & des thématiques spécifiques (itinérance, autonomie, snowkite, rando-voile) ;
                Un co-encadrement et/ou des petits groupes. Votre voyage révé n'est pas ci-dessus. Parlons en !
            </li>

            <?php foreach ($years as $year=>$seasons): ?>
            <?php foreach($seasons as $season=>$journeys): ?>
            <li class="type-text">
                <h3 class="h3">Voyages <?php echo Journey::$seasons[$season] . " " . $year ?></h3>

                <table>
                    <?php foreach ($journeys as $journey): ?>
                    <tr>
                        <td class="image"><img src="/ups/images/journey/<?php echo $journey->id ?>/<?php echo $journey->cover ?>" alt="Vignette" /></td>
                        <td class="title">
                        <?php echo $journey['title'] ?><br /><span class="details">
                        <?php if($journey['from_date'] != '0000-00-00 00:00:00'): ?>
                        Du <?php echo strftime('%d %B', strtotime($journey['from_date'])) ?> au <?php echo strftime('%d %B %G', strtotime($journey['to_date'])) ?></span>
                        <?php else: ?>
                        (date à définir)
                        <?php endif ?><br />
                        </td>
                        <td class="details"><?php echo $journey->Place ?></td>
                        <td class="file"><a target="_blank" href="/ups/files/journey/<?php echo $journey->id ?>/<?php echo $journey->doc ?>"><img src="/images/file.png" alt="Présentation"</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>

            </li>
            <?php endforeach ?>
            <?php endforeach ?>

            <li class="type-empty"></li>
    </ul>
</section>


<section id="controls">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>
    </section>
</div>