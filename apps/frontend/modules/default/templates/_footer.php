<footer>
    <ul>
        <?php $ac = get_slot('bodyClass', 'default') ?>
        <li><a href="<?php echo url_for("@homepage") ?>" <?php if($ac == "home" || $ac == "story") echo 'class="active"' ?>>Carnets d'expéditions & photographies</a></li>
        <li><a href="<?php echo url_for("@bio") ?>" <?php if($ac == "bio") echo 'class="active"' ?>>Bio</a></li>
        <!--<li><a href="<?php echo url_for("@publication") ?> <?php if($ac == "publication") echo 'class="active"' ?>">Publications</a></li>-->
        <li><a href="<?php echo url_for("@journey_index") ?>" <?php if($ac == "journey") echo 'class="active"' ?>>Séjours encadrés</a></li>
        <li><a href="<?php echo url_for("@contact") ?>" <?php if($ac == "contact") echo 'class="active"' ?>>Contact</a></li>
        <li class="colophon">Tout droit reservés<br /><span class="credits">Crédits : <a target="_blank" href="http://www.ostrogo.fr/">Ostrogo</a> + <a target="_blank" href="http://letmecraft.com">Letmecraft</a></span></li>
    </ul>

    <div class="fb-like-wrapper"><div class="fb-like" data-href="https://www.facebook.com/michaelcharavin" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-width="100" data-action="like" data-show-faces="true" data-send="false"></div></div>

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
