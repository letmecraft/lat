<footer>
    <ul>
        <?php $ac = get_slot('bodyClass', 'default') ?>
        <li><a href="<?php echo url_for("@homepage") ?>" <?php if($ac == "home" || $ac == "story") echo 'class="active"' ?>>Carnets d'expéditions & photographies</a></li>
        <li><a href="<?php echo url_for("@bio") ?>" <?php if($ac == "bio") echo 'class="active"' ?>>Bio</a></li>
        <!--<li><a href="<?php echo url_for("@publication") ?> <?php if($ac == "publication") echo 'class="active"' ?>">Publications</a></li>-->
        <li><a href="<?php echo url_for("@journey_index") ?>" <?php if($ac == "journey") echo 'class="active"' ?>>Séjours encadrés</a></li>
        <li><a href="<?php echo url_for("@contact") ?>" <?php if($ac == "contact") echo 'class="active"' ?>>Contact</a></li>
        <li>
            <form action="<?php echo url_for("newsletter") ?>" method="post">
                <input type="text" id="email" name="email" value="S'inscrire à la newsletter..." data-value="S'inscrire à la newsletter..." />
                <input type="submit" href="#" class="button" value="" />
            </form>
        </li>
        <!--<li class="colophon">Tout droit reservés<br /><span class="credits">Crédits : <a target="_blank" href="http://www.ostrogo.fr/">Ostrogo</a> + <a target="_blank" href="http://letmecraft.com">Letmecraft</a></span></li>-->
    </ul>



    <div class="fb-like-wrapper"><div class="fb-like" data-href="https://www.facebook.com/michaelcharavin" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-width="100" data-action="like" data-show-faces="true" data-send="false"></div></div>

</footer>
   
