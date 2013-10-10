<?php slot('bodyClass', 'contact') ?>
<?php slot('pageTitle', 'Contact') ?>
<?php setlocale(LC_TIME, "fr_FR"); ?>

<div id="content">

    <section id="content-header">
        <h2 class="h2">Contact</h2>
    </section>

    <section id="frame">
        <ul class="slidee">
            <li class="type-default">
                
                <h2 class="h3">Message</h2>

                <form method="post" action="<?php url_for("@contact") ?>">
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

            <li class="type-default">
                <h2 class="h3">Coordonnées</h2>
                <blockquote>Michael Charavin, La Touisse, 05380 Chateauroux-les-Alpes, FR<br />
                michael.charavin[at]gmail.com<br />+33 (0)6 13 93 72 95</blockquote>
            </li>
        </ul>
    </section>

    <section id="controls">
        <div id="scrollbar">
            <div class="handle"></div>
        </div>
    </section>
</div>