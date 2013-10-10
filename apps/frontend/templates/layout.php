<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Latitudes-Nord : <?php echo get_slot("pageTitle", "Michael Charavin, guide spécialiste des régions polaires") ?></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width">

        <!-- Facebook ugly stuff -->
        <meta property="og:image" content="<?php echo get_slot("facebookImage", "http://lat.letmecraft.com/images/mc-portrait.jpg") ?>"/>
        <meta property="og:title" content="<?php echo get_slot("facebookTitle", "Michael Charavin, guide spécialiste des régions polaires") ?>"/>

        <link rel="shortcut icon" href="/favicon.ico" />

        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/frontend.css">

        <script src="/vendors/modernizr-2.5.3.min.js"></script>
    </head>

    <body class="<?php include_slot('bodyClass', 'default') ?>">

        <!-- Flashes -->

        <?php include_partial('default/flashes') ?>

        <!-- Header -->

        <?php include_partial('default/header') ?>

        <!-- Content -->

        <?php echo $sf_content ?>

        <!-- Scroll controls -->

        <?php if(get_slot('controls')) include_partial('default/controls') ?>

        <!-- Footer -->

        <?php include_partial('default/footer') ?>

        <!-- JS -->

        <script>var uriNewsletter = "<?php echo url_for("@newsletter") ?>";</script>
        <script src="/vendors/jquery-2.0.3.min.js"></script>
        <script src="/vendors/sly-1.0.2.min.js"></script>
        <script src="/js/frontend.js"></script>

        <!-- FB -->

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- GAnalytics -->
        <script>
            var _gaq=[['_setAccount','UA-7970141-4'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
       </script>
    </body>
</html>