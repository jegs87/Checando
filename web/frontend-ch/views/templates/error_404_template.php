<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<!-- <html lang="es"> -->
<head>
    <base href="<?php echo base_url();?>" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $titulo; ?></title>
    <?php echo $meta_tags; ?>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <?php echo $css; ?>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon"  href="ico/apple-touch-icon.png">
    <link rel="shortcut icon" href="ico/favicon.png">
    <link rel="shortcut icon" href="ico/favicon.ico">
    <script src="js/bootstrap/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/bootstrap/jquery-1.10.1.min.js"><\/script>')</script>
    <script type="text/javascript">
        $(window).bind("load", function() {
            $(document).ready(function() {
                $('#flexslider-loader').fadeOut(800);
            });
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                pauseOnHover: false,
                controlNav: true,
                directionNav: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){window.scrollTo(0,1);
        }
    </script>
    <?php echo $fjs; ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="bg-1">
    <div class="bg-2">
        <?php echo modules::run('headder/headder/index'); ?>
        <?php echo $contenido; ?>
    </div>
</div>
<?php echo modules::run('footer/footer/index'); ?>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?1WGqXaQaJQGmUjmW40iVzVbzmKQy1hOv';z.t=+new Date;$.
            type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<p id="back-top" style="display: none;">
    <a href="#top"><i class="icon-angle-up"></i></a>
</p>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins/jquery.flexslider.js"></script>
<script type="text/javascript" src="http://malsup.github.io/jquery.cycle2.js"></script>
<script type="text/javascript" src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
<script>
    $.fn.cycle.defaults.autoSelector = '.slideshow';
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slideshow').flexslider({
            animation: "slide",
            prevText: "",
            nextText: "",
            controlNav: false
        });
        $('#myCarousel').flexslider({
            animation: "slide",
            prevText: "",
            nextText: "",
            animationLoop: false,
            itemWidth: 150,
            itemMargin: 50,
            minItems: 3,
            maxItems: 3,
            controlNav: false
        });
    });
</script>
<?php echo $js; ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-43934119-1', 'hussepeninsula.com');
    ga('send', 'pageview');
</script>
</body>
</html>