<?php slot('bodyClass', 'contact') ?>
<?php slot('pageTitle', 'Voyage en partance') ?>
<?php setlocale(LC_TIME, "fr_FR"); ?>

<div id="content">

    <section id="content-header">
        <h2 class="h2">Contact et prochains voyages ouverts</h2>
    </section>

    <section id="frame">
        <ul class="slidee">
    <li class="type-text">

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
        
        <p class="fil-rouge">Fil rouge de mes voyages :
        Des destinations atypiques & et des voyages inédits ; <br />
        Des expéditions & des thématiques spécifiques (itinérance, autonomie, snowkite, rando-voile) ;<br />
        Un co-encadrement et/ou des petits groupes. Votre voyage révé n'est pas ci-dessus. Parlons en !</p>
    </li>


         <li class="type-text">

              <blockquote>Michael Charavin, La Touisse, 05380 Chateauroux-les-Alpes, Fr<br />
              michael.charavin[at]gmail.com<br />+33 (0)6 13 93 72 95</blockquote>
            
        </blockquote>

              <h2 class="h3">Message</h2>

        <form method="post" action="<?php url_for("@contact") ?>">

            <?php echo $sf_user->getFlash('error') ?>
            <?php echo $form->renderHiddenFields() ?>

            <p>
                <label>Votre nom</label>
                <?php echo $form['sender_name']->render() ?>
            </p>

            <p>
                <label>Votre email</label>
                <?php echo $form['sender_email']->render() ?>
            </p>
            
            <p>
                <label>Le sujet</label>
                <?php echo $form['subject']->render() ?>
            </p>
            <p>
                <label>Votre message</label>
                <?php echo $form['message']->render() ?>
            </p>
            <p class="action"><input type="submit" class="submit" value="Envoyer" /></p>
        </form>
    </li>
    </ul>
</section>


<section id="controls">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>
    </section>
</div>