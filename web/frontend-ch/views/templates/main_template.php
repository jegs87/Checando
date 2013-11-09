<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es" class="ie ie9"> <!--<![endif]-->
<!-- <html lang="es"> -->
<head>
    <base href="<?php echo base_url();?>" />
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple_icons_114x114.png">
    <title><?php echo $titulo; ?></title>
    <?php echo $meta_tags; ?>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width">
    <!-- CSS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bs_grid.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/theme_settings.css">
    <link rel="stylesheet" type="text/css" href="css/color_theme.css" id="theme_color">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <link rel="stylesheet" href="css/jquery.countdown.css">
    <link rel="stylesheet" href="css/main.css">
    <?php echo $css; ?>
    <!-- Favicons -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php echo $fjs; ?>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <?php  echo modules::run('headder/headder/index'); ?>
    <?php  echo $contenido; ?>
    <?php  echo modules::run('footer/footer/index'); ?>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/theme.js"></script>
    <?php echo $js; ?>
</body>
</html>