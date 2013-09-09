<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>MC Charavin</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="shortcut icon" href="/favicon.ico" />

        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/backend.css">

        <script src="/vendors/modernizr-2.5.3.min.js"></script>
    </head>

    <body>

        <!-- Header -->

        <?php include_partial('default/header') ?>

        <!-- Aside -->

        <?php include_partial('default/menu') ?>

        <!-- Content -->

        <?php echo $sf_content ?>

        <!-- Footer -->

        <?php include_partial('default/footer') ?>

        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/vendors/jquery-2.0.1.min.js"><\/script>')</script>
        <script src="/js/backend.js"></script>
    </body>
</html>