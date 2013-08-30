<footer>
    <ul>
        <?php $ac = get_slot('bodyId', 'default') ?>
        <li><a href="<?php echo url_for("@homepage") ?>" <?php if($ac == "home" || $ac == "story") echo 'class="active"' ?>>Carnets d'expéditions & photographies</a></li>
        <li><a href="<?php echo url_for("@bio") ?>" <?php if($ac == "bio") echo 'class="active"' ?>>Bio</a></li>
        <!--<li><a href="<?php echo url_for("@publication") ?> <?php if($ac == "publication") echo 'class="active"' ?>">Publications</a></li>-->
        <li><a href="<?php echo url_for("@contact") ?>" <?php if($ac == "contact") echo 'class="active"' ?>>Contact</a></li>
        <li class="colophon">Tout droit reservés<br /><span class="credits">Crédits : <a target="_blank" href="http://www.ostrogo.fr/">Ostrogo</a> + <a target="_blank" href="http://letmecraft.com">Letmecraft</a></span></li>
    </ul>
</footer>
   <!-- <form>
        <input type="text" id="email" name="email" value="S'inscrire à la newsletter..." data-value="S'inscrire à la newsletter..." />
        <a href="#" class="button" /></a>
    </form>

    <div class="separator"></div>

    <div class="social">
        <p>Partager :
        <a target="_blank" href="http://www.twitter.com/share?text=Michael Charavin, guide spécialiste des régions polaires, snowkite, VTT. Envie d'explorer les grands nord ?&url=http://latitudes-nord.fr"><img src="/images/footer-twitter-btn.png" /></a>
        <a target="_blank" href="http://facebook.com/michaelcharavin"><img src="/images/footer-fb-btn.png" /></a></p>
    </div>

    <div class="separator"></div>-->
