<div class="main_wrapper">
<div class="content_wrapper">
<div class="container cbg msp ">
<div class="content_block no-sidebar row">
<div class="fl-container span12">
<div class="row">
<div class="posts-block span12">
<div class="contentarea">
<div class="row-fluid">
    <div class="span12 ">
        <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

        <div class="featured_image_full">
            <div class="slider-wrapper theme-default">
                <div class="nivoSlider">
                    <img src="img/images/slide.jpg" alt="">
                </div>
                <div class="img_inset"></div>
            </div>
        </div>

        <script type="text/javascript">
            //var tpj=jQuery;
            //$.noConflict();
            //<![CDATA[
            $(document).ready(function() {
                $('.rs-fullscreen').css('margin-left' , -1*($(window).width()-$('.container').width())/2+'px').width($(window).width());
                if ($.fn.cssOriginal!=undefined)
                    $.fn.css = $.fn.cssOriginal;
                var api = $('.fullwidthbanner').revolution({
                    delay:5000,
                    startheight:500,
                    startwidth:1170,
                    hideThumbs:200,
                    thumbWidth:100,	// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight:50,
                    thumbAmount:5,
                    navigationType:"none",	//bullet, thumb, none, both (No Thumbs In FullWidth Version !)
                    navigationArrows:"verticalcentered",	//nexttobullets, verticalcentered, none
                    navigationStyle:"round",	//round,square,navbar
                    touchenabled:"on",	// Enable Swipe Function : on/off
                    onHoverStop:"off",	// Stop Banner Timet at Hover on Slide on/off
                    navOffsetHorizontal:0,
                    navOffsetVertical:20,
                    stopAtSlide:-1,	// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                    stopAfterLoops:-1,	// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                    hideCaptionAtLimit:0,	// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                    hideAllCaptionAtLilmit:0,	// Hide all The Captions if Width of Browser is less then this value
                    hideSliderAtLimit:0,	// Hide the whole slider, and stop also functions if Width of Browser is less than this value
                    shadow:0,	//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
                    fullWidth:"on"	// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
                });
                $(document).keyup(function (event) {
                    if ((event.keyCode == 37)) {
                        api.revprev();
                    } else if ((event.keyCode == 39)) {
                        api.revnext();
                    }
                });
            });
            //]]
        </script>
    </div><!--.module_cont -->
    <div class="clear"><!-- ClearFIX --></div>
</div>
<div class="row-fluid">
    <div class="span12 ">

        <div class="text-center">
            <h2>Copa Champagnat  Mérida 2014</h2>
            <h2>Del 26 al 30 de Marzo</h2>
        </div>




    </div><!--.module_cont -->
</div>
<div class="row-fluid">
    <div class="span12 module_cont module_promo_text">

        <div class="text-center">
            <h3>Días para empezar la copa:</h3>
        </div>

        <div class="row-fluid">
            <div class="span12">

                <!--
                <div id="glowingLayout"></div> -->
                <!--
                <div id="defaultCountdown"></div> -->
                <div class="centering">
                    <div id="counter"></div>
                    <div class="desc">
                        <div id="ccdias">Días</div>
                        <div id="cchoras">Horas</div>
                        <div id="ccminutos">Minutos</div>
                        <div id="ccsegundos">Segundos</div>
                    </div>
                </div>

            </div>
        </div><!--.module_cont -->
    </div><!-- .row-fluid -->

    <div class="row-fluid">
        <div class="span12 module_cont module_promo_text ">

            <div class="shortcode_promoblock">
                <div class="promo_text_block">

                    <h4>Entérate de todo lo que está pasando en la copa Champagnat 2014</h4>
                </div>

            </div>
            <a id="anchor7"></a>
        </div><!--.module_cont -->
    </div><!-- .row-fluid -->
    <div class="row-fluid">
        <div class="span12 module_cont module_portfolio module_none_padding">
            <div class="filter_block">
            </div><!-- .filter_block -->

            <div class="portfolio_block image-grid columns3 isotope" id="list" style="position: relative; overflow: hidden; height: 580px;">

                <div data-category="artcore" class="artcore element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                    <div class="filter_img gallery_item">
                        <a href="convocatoria">
                            <img class="gallery-stand-img" src="img/images/1.jpg" alt="" width="570" height="400">
                            <div class="gallery_fadder"></div>
                            <div class="gallery_descr" style="top:72.5px;">
                                <h6 class="gallery_title">Convocatoria</h6>

                            </div>
                        </a>
                    </div>
                </div><!-- .element -->

                <div data-category="illustrations" class="illustrations element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(400px, 0px, 0px);">
                    <div class="filter_img gallery_item">
                        <a href="delegaciones">
                            <img class="gallery-stand-img" src="img/images/2.jpg" alt="" width="570" height="400">
                            <div class="gallery_fadder"></div>
                            <div class="gallery_descr" style="top: 81.5px;">
                                <h6 class="gallery_title">Delegaciones</h6>

                            </div>
                        </a>
                    </div>
                </div><!-- .element -->

                <div data-category="monsters" class="monsters element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(800px, 0px, 0px);">
                    <div class="filter_img gallery_item">
                        <a href="programa">
                            <img class="gallery-stand-img" src="img/images/3.jpg" alt="" width="570" height="400">
                            <div class="gallery_fadder"></div>
                            <div class="gallery_descr" style="top: 81.5px;">
                                <h6 class="gallery_title">Programa</h6>

                            </div>
                        </a>
                    </div>
                </div><!-- .element -->

                <div data-category="artcore" class="artcore element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 290px, 0px);">
                    <div class="filter_img gallery_item">
                        <a href="rol">
                            <img class="gallery-stand-img" src="img/images/4.jpg" alt="" width="570" height="400">
                            <div class="gallery_fadder"></div>
                            <div class="gallery_descr" style="top: 72.5px;">
                                <h6 class="gallery_title">Rol de Juegos</h6>

                            </div>
                        </a>
                    </div>
                </div><!-- .element -->

                <div data-category="illustrations" class="illustrations element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(400px, 290px, 0px);">
                    <div class="filter_img gallery_item">
                        <a href="galeria">
                            <img class="gallery-stand-img" src="img/images/5.jpg" alt="" width="570" height="400">
                            <div class="gallery_fadder"></div>
                            <div class="gallery_descr" style="top: 81.5px;">
                                <h6 class="gallery_title">Galería</h6>

                            </div>
                        </a>
                    </div>
                </div><!-- .element -->

                <div data-category="monsters" class="monsters element isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(800px, 290px, 0px);">
                    <div class="filter_img gallery_item">
                        <a href="informacion">
                            <img class="gallery-stand-img" src="img/images/6.jpg" alt="" width="570" height="400">
                            <div class="gallery_fadder"></div>
                            <div class="gallery_descr" style="top: 81.5px;">
                                <h6 class="gallery_title">Información Turística</h6>

                            </div>
                        </a>
                    </div>
                </div><!-- .element -->
            </div><!-- .portfolio_block -->
            <div class="clear"></div>
        </div><!-- .module_portfolio -->
    </div><!-- .row-fluid -->
    <div class="row-fluid">
        <div class="span12 module_cont module_partners">

            <div class="bg_title"><div class="title_wrapper"><a href="javascript:void(0)" class="btn_carousel_left"></a><h5 class="headInModule">Patrocinadores</h5><a href="javascript:void(0)" class="btn_carousel_right"></a></div></div>
            <div class="module_content sponsors_works carouselslider items4" data-count="4">
                <ul>

                    <li>
                        <div class="item">
                            <img src="img/images/1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <img src="img/images/1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <img src="img/images/1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <img src="img/images/1.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div><!-- .row-fluid -->

</div>
</div>
</div>
<div class="clear"><!-- ClearFix --></div>
</div>
<div class="clear"></div>
</div>
</div>
</div><!-- .container -->
</div><!-- .content_wrapper -->
</div>