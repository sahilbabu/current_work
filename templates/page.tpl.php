<?php
// $Id: page.tpl.php,v 1.17.2.4 2013/08/19 14:42:44 sahilbabu Exp $

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<!-- Main Wrapper Start -->

<div class="wrapper clearfix tttrue">

    <!-- Header Start -->

    <header id="mainHeader" class="f_height dark_menu logo_left">

        <?php if ($logo): ?>
            <div id="logo" class="clearfix">
                <a href="<?php print $front_page; ?>" style="width: 169px;" rel="home">
                        <!-- 	<img class="default" src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2012/12/logo1.png" alt="GoodWork" />  -->
                    <img class="default" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> 
                    <?php // print t('Home'); ?>
                </a>
            </div>
        <?php endif; ?>
        <div id="headerWidgets" class="clearfix">
            <div class="left clearfix">
                <?php if ($contact_mail): ?>
                    <div id="email-widget-2" class="widget sidebox email">
                        <a href="mailto:<?php print $contact_mail; ?>"><i class="icon-email"></i><?php print $contact_mail; ?></a>
                    </div>
                <?php endif; ?>
                <?php if ($contact_phone): ?>
                    <div id="phone-widget-2" class="widget sidebox phone">
                        <a href="tel:<?php print $contact_phone; ?>"><i class="icon-phone"></i> <?php print $contact_phone; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="right clearfix">
                <div id="text-13" class="widget sidebox widget_text">
                    <div class="textwidget">
                        <div class="clearfix">
                            <section class="rbSocial clearfix notli icons">
                                <ul>
                                    <li class="i-square icon-twitter"><a href="<?php print $twitter; ?>">#</a></li>
                                    <li class="i-square icon-facebook-squared"><a href="<?php print $facebook; ?>">#</a></li>
                                    <li class="i-square icon-gplus"><a href="<?php print $google_plus; ?>">#</a></li>
                                    <!-- <li class="i-square icon-linkedin"><a href="#">#</a></li> -->
                                    <li class="i-square icon-behance"><a href="<?php print $behance; ?>">#</a></li>
                                    <li class="i-square icon-rss"><a href="<?php print $rss_url; ?>">#</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav id="menu">
            <?php if ($main_menu): ?>
                    <?php  print render($main_menu); ?>
                <?php endif; ?>
            <form role="search" method="get" id="searchform" action="http://demo.krownthemes.com/goodwork/">
                <div>
                    <input type="text" value="Search the site" name="s" id="s" />
                    <div class="holder">
                        <input type="submit" id="searchsubmit" value="Search" /> <i	class="icon-search"></i>
                    </div>
                </div>
            </form>
        </nav>
        <?php if ($breadcrumb): ?>
<!--            <nav id="breadcrumb" >
                <?php // print $breadcrumb; ?>
                <a href="http://demo.krownthemes.com/goodwork"><i class="icon-home"></i></a> <span>></span> Homepage 
            </nav>-->
          <?php endif; ?>
        
    </header>

    <!-- Header End -->

    <!-- Content Area -->
    <?php   print render($page['content']); ?>
    <!-- Content Area End -->


</div>

<!-- Main Wrapper End -->

<!-- Footer #1 Wrapper Start -->


<footer id="footer1" class="clearfix">

    <div class="row-fluid">

        <div class="column_container span3 clearfix">
            <section id="meta-3" class="widget widget_meta clearfix">
                <div class="widget_title"><h5>Pages</h5></div>
                <ul>
                    <li><a href="why-us.html">Why Us</a></li>
                    <li><a href="icon.html" title="Syndicate ">Entries <abbr	title="Really Simple Syndication">icon</abbr></a></li>
                    <li><a href="#" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
                </ul>
            </section>
        </div>

        <div class="column_container span3 clearfix">
            <section id="meta-3" class="widget widget_meta clearfix">
                <div class="widget_title"><h5>Services</h5></div>
                <ul>
                    <li><a href="web-development.html" title=" ">Web <abbr title="Development">Development</abbr></a></li>
                    <li><a href="mobile-development.html">Mobile Development</a></li>
                    <li><a href="developer-work-cycle.html" title="Developer ">Developer <abbr title="Work Cycle ">Work Cycle</abbr></a></li>
                    <li><a href="#" title="Powered  ">WordPress.org</a></li>
                </ul>
            </section>
        </div>

        <div class="column_container span3 clearfix">
            <section id="meta-3" class="widget widget_meta clearfix">
                <div class="widget_title"><h5>Portfolio</h5></div>
                <ul>
                    <li><a href="#">Log in</a></li>
                    <li><a href="#" title="Syndicate this site using RSS 2.0">Entries <abbr	title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
                </ul>
            </section>
        </div>

        <div class="column_container span3">
            <section id="text-18" class="widget widget_text clearfix">
                <div class="widget_title">
                    <h5>Get in touch</h5>
                </div>
                <div class="textwidget">
                    <section class="rbContactInfo  autop">
                        <ul>
                            <li class="address">Jacky George St. 158-56, EastLondon,
                                NF1561, UK</li>
                            <li class="phone">+460 123 456 789</li>
                            <li class="email"><a href="mailto:hello@showcase.me">hello@showcase.me</a></li>
                            <li class="flag"><a
                                    href="http://demo.krownthemes.com/goodwork/contact-us-2/">Find
                                    us on the map</a></li>
                        </ul>
                    </section>
                </div>
            </section>
            <section id="text-19" class="widget widget_text clearfix">
                <div class="widget_title">
                    <h5>Get in touch</h5>
                </div>
                <div class="textwidget">
                    <section class="rbForm minimal autop">
                        <form method="POST"
                              action="http://demo.krownthemes.com/goodwork/wp-content/themes/goodwork/includes/contact-form.php">
                            <input type="text" name="name" class="name" value="Name" /> <input
                                type="email" name="email" class="email" value="Email" /> <input
                                type="text" name="subject" value="Subject Here!"
                                class="subject hidden" />
                            <textarea name="message" class="message">Message</textarea>
                            <input type="text" name="fred" class="fred hidden" value="" />
                            <input type="submit" class="submit" value="Send" /> <input
                                type="hidden" name="dlo128" class="hidden dlo128"
                                value="me@rubenbristian.com" />
                        </form>
                        <p class="hidden successMessage">Your message was
                            successfully sent! We will contact you back as soon as possible!</p>
                        <p class="hidden errorMessage">Complete all the fields</p>
                    </section>
                </div>
            </section>
        </div>



    </div>

</footer>


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
                                href="#">Showcase © 2013</a></li>
                        <li id="menu-item-198"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-198"><a
                                href="#">Legal Notice</a></li>
                        <li id="menu-item-199"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-199"><a
                                href="#">Terms</a></li>
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
                                <li class="i-square icon-twitter"><a href="#">#</a></li>
                                <li class="i-square icon-facebook-squared"><a href="#">#</a></li>
                                <li class="i-square icon-dribbble"><a href="#">#</a></li>
                                <li class="i-square icon-linkedin"><a href="#">#</a></li>
                                <li class="i-square icon-cloud"><a href="#">#</a></li>
                                <li class="i-square icon-rss"><a href="#">#</a></li>
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
        var revapi1;

        tpj(document).ready(
        function() {

            if (tpj.fn.cssOriginal != undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            if (tpj("#rev_slider_1_1").revolution == undefined)
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            else
                revapi1 = tpj("#rev_slider_1_1").show().revolution(
            {
                delay: 6000,
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

            tpj.restyleRevo(revapi1, tpj("#rev_slider_1_1")
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