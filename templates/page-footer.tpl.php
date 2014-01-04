<?php
// $Id: page-footer.tpl.php,v 1.17.2.4 2013/08/19 14:42:44 sahilbabu Exp $
?>


<!-- Footer #1 Wrapper Start -->

<!-- Footer #1 Wrapper End -->

<!-- Footer #2 Wrapper Start -->

<footer id="footer2" class="clearfix">

    <div class="clearfix">

        <div class="left clearfix">
            <div id="nav_menu-6" class="widget left widget_nav_menu">
                <div class="menu-footer-menu-container">
                    <ul id="menu-footer-menu" class="menu">
                        <li id="menu-item-197"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-197"><a
                                href="<?php print base_path(); ?>">Al Saif Professionals © <?php print date('Y'); ?></a></li>
                        <li id="menu-item-198"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-198"><a
                                href="mailto:<?php print $contact_mail; ?>"><?php print $contact_mail; ?></a></li>
                        <li id="menu-item-199"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-199"><a
                                href="skype:sahil_babu?call">Developed by: Mudassar Ali</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="right clearfix">
            <div id="text-20" class="widget right widget_text">
                <div class="textwidget">
                    <div class="clearfix">
                        <section class="rbSocial clearfix notli icons">
                            <ul>
                                <li class="i-square icon-twitter"><a href="<?php print $twitter; ?>">#</a></li>
                                    <li class="i-square icon-facebook-squared"><a href="<?php print $facebook; ?>">#</a></li>
                                    <li class="i-square icon-gplus"><a href="<?php print $google_plus; ?>">#</a></li>
                                    <li class="i-square icon-behance"><a href="<?php print $behance; ?>">#</a></li>
                                    <li class="i-square icon-rss"><a href="<?php print $rss_url; ?>">#</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>

<!-- Footer #2 Wrapper End -->

<div id="scripts">

    <script type='text/javascript' src='<?php print path_to_theme(); ?>/js/plugins.min.js'></script>
    <script type='text/javascript' src='<?php print path_to_theme(); ?>/js/scripts.min.js'></script>
    <script type="text/javascript">
        var tpj = jQuery;
        tpj.noConflict();
        var revapi2;

        tpj(document).ready(
                function() {

                    if (tpj.fn.cssOriginal != undefined)
                        tpj.fn.css = tpj.fn.cssOriginal;

                    if (tpj("#rev_slider_2_1").revolution == undefined)
                        revslider_showDoubleJqueryError("#rev_slider_2_1");
                    else
                        revapi2 = tpj("#rev_slider_2_1").show().revolution(
                                {
                                    delay: 5000,
                                    startwidth: 940,
                                    startheight: 400,
                                    hideThumbs: 200,
                                    thumbWidth: 100,
                                    thumbHeight: 50,
                                    thumbAmount: 4,
                                    navigationType: "bullet",
                                    navigationArrows: "verticalcentered",
                                    navigationStyle: "round",
                                    touchenabled: "on",
                                    onHoverStop: "on",
                                    navOffsetHorizontal: 0,
                                    navOffsetVertical: 20,
                                    shadow: 2,
                                    fullWidth: "off",
                                    stopLoop: "off",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                                    shuffle: "off",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0
                                });

                    tpj.restyleRevo(revapi2, tpj("#rev_slider_2_1")
                            .parent().parent());

                }); //ready
    </script>
</div>

<div id="oldie">
    <p>
        This is a unique website which will require a more modern browser to
        work! <a href="https://www.google.com/chrome/" target="_blank">Please
            upgrade today!</a>
    </p>
</div>

<!-- THE CODE BELOW IS NOT AVAILABLE IN THE THEME, SINCE IT'S FOR THE THEME CUSTOMIZER -->