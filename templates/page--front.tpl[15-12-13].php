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
                    <img class="default" src="<?php print $logo; ?>" alt="<?php print t('Al Saif Professionals'); ?>" /> 
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
                <?php print render($main_menu); ?>
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
    </header>

    <!-- Header End -->

    <!-- Content Area -->
    <!-- Content Wrapper Start -->

    <header class="rbTagline clearfix wicon">
            <i class="i-medium icon-mic"></i>
            <h1>Hi, there! Welcome to Al Saif Professionals</h1>
            <h2>Where finest codes &amp; coders coincide</h2>
    </header>
    <br class="margin-top-10" />
    <!--<article id="content" class="clearfix">-->


        <div class="clearfix rev minimal-1">
            <!-- START REVOLUTION SLIDER 2.2.3 -->
            <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper"
                 style="margin: 0px auto; background-color: #f7f7f7; padding: 0px; margin-top: 0px; margin-bottom: 0px;">
                <div id="rev_slider_2_1" class="rev_slider" style="display: none; background-image: url(<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x.jpg); background-repeat: no-repeat;">
                    <ul>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x-1024x435.jpg" alt="bg_minimal1@2x-1024x435"> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="42" data-y="120" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="-122" data-y="5" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            <div class="tp-caption randomrotate" data-x="29" data-y="36" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            <div class="tp-caption randomrotate" data-x="109" data-y="203" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            <div class="tp-caption randomrotate" data-x="266" data-y="47" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            <div class="tp-caption randomrotate" data-x="525" data-y="31" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            <div class="tp-caption randomrotate" data-x="562" data-y="149" data-speed="10000" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            </div> 

                            <img src="<?php print path_to_theme(); ?>/images/slider/development/website-development-and-design_png.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="300" data-y="-90" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/website-development-and-design_png.png" alt="Notebook">
                            </div> 
                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x-1024x435.jpg" alt="bg_minimal1@2x-1024x435"> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="42" data-y="120" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="-122" data-y="5" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            <div class="tp-caption randomrotate" data-x="29" data-y="36" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            <div class="tp-caption randomrotate" data-x="109" data-y="203" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            <div class="tp-caption randomrotate" data-x="266" data-y="47" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            <div class="tp-caption randomrotate" data-x="525" data-y="31" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            <div class="tp-caption randomrotate" data-x="562" data-y="149" data-speed="10000" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            </div> 

                            <img src="<?php print path_to_theme(); ?>/images/slider/development/service-web-development.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="150" data-y="20" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/service-web-development.png" alt="Notebook">
                            </div> 

                            <img src="<?php print path_to_theme(); ?>/images/slider/development/web_development2.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="300" data-y="5" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/web_development2.png" alt="Notebook">
                            </div> 
                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x-1024x435.jpg" alt="bg_minimal1@2x-1024x435"> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="42" data-y="120" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="-122" data-y="5" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            <div class="tp-caption randomrotate" data-x="29" data-y="36" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            <div class="tp-caption randomrotate" data-x="109" data-y="203" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            <div class="tp-caption randomrotate" data-x="266" data-y="47" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            <div class="tp-caption randomrotate" data-x="525" data-y="31" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            <div class="tp-caption randomrotate" data-x="562" data-y="149" data-speed="10000" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/development/mobileapp-development.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="80" data-y="55" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/mobileapp-development.png" alt="Notebook">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/development/mobile-development.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="450" data-y="20" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/mobile-development.png" alt="Notebook">
                            </div> 

                        </li>


                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x-1024x435.jpg" alt="bg_minimal1@2x-1024x435"> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="42" data-y="120" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="-122" data-y="5" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            <div class="tp-caption randomrotate" data-x="29" data-y="36" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            <div class="tp-caption randomrotate" data-x="109" data-y="203" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            <div class="tp-caption randomrotate" data-x="266" data-y="47" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            <div class="tp-caption randomrotate" data-x="525" data-y="31" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            <div class="tp-caption randomrotate" data-x="562" data-y="149" data-speed="10000" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/development/wpm-social-media.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="100" data-y="50" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/wpm-social-media.png" alt="Notebook">
                            </div> 

                            <img src="<?php print path_to_theme(); ?>/images/slider/development/mobile-phone-development.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="400" data-y="20" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/mobile-phone-development.png" alt="Notebook">
                            </div>

                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500">
                            <img src="<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x-1024x435.jpg" alt="bg_minimal1@2x-1024x435"> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="42" data-y="120" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="-122" data-y="5" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            <div class="tp-caption randomrotate" data-x="29" data-y="36" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            <div class="tp-caption randomrotate" data-x="109" data-y="203" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            <div class="tp-caption randomrotate" data-x="266" data-y="47" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            <div class="tp-caption randomrotate" data-x="525" data-y="31" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            <div class="tp-caption randomrotate" data-x="562" data-y="149" data-speed="10000" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/development/Web-Design.png" alt="Notebook">
                            <div class="tp-caption lfr" data-x="100" data-y="30" data-speed="500" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/Web-Design.png" alt="Notebook">
                            </div> 

                        </li>



                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-delay="10000">
                            <img src="<?php print path_to_theme(); ?>/images/slider/bg_minimal1@2x-1024x435.jpg" alt="bg_minimal1@2x-1024x435"> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="42" data-y="120" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            <div class="tp-caption randomrotate" data-x="-122" data-y="5" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_many.png" alt="dots many">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            <div class="tp-caption randomrotate" data-x="29" data-y="36" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_1.png" alt="dots 1">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            <div class="tp-caption randomrotate" data-x="109" data-y="203" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_2.png" alt="dots 2">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            <div class="tp-caption randomrotate" data-x="266" data-y="47" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_3.png" alt="dots 3">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            <div class="tp-caption randomrotate" data-x="525" data-y="31" data-speed="10000" data-start="0" data-easing="easeOutQuad">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_4.png" alt="dots 4">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            <div class="tp-caption randomrotate" data-x="562" data-y="149" data-speed="10000" data-start="500" data-easing="easeOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/dots_5.png" alt="dots 5">
                            </div> 
                            <img
                                src="<?php print path_to_theme(); ?>/images/slider/development/build_for.png"
                                alt="build for">
                            <div class="tp-caption sfr" data-x="212" data-y="100"
                                 data-speed="1000" data-start="0" data-easing="easeOutExpo">
                                <img
                                    src="<?php print path_to_theme(); ?>/images/slider/development/build_for.png"
                                    alt="build for">
                            </div> <img
                                src="<?php print path_to_theme(); ?>/images/slider/development/p.png"
                                alt="p">
                            <div class="tp-caption fade" data-x="211" data-y="155"
                                 data-speed="2000" data-start="1000" data-easing="easeOutExpo">
                                <img
                                    src="<?php print path_to_theme(); ?>/images/slider/development/p.png"
                                    alt="p">
                            </div> <img
                                src="<?php print path_to_theme(); ?>/images/slider/development/e.png"
                                alt="e">
                            <div class="tp-caption fade" data-x="307" data-y="154"
                                 data-speed="2000" data-start="1100" data-easing="easeOutExpo">
                                <img
                                    src="<?php print path_to_theme(); ?>/images/slider/development/e.png"
                                    alt="e">
                            </div> <img
                                src="<?php print path_to_theme(); ?>/images/slider/development/o.png"
                                alt="o">
                            <div class="tp-caption fade" data-x="401" data-y="153"
                                 data-speed="2000" data-start="1200" data-easing="easeOutExpo">
                                <img
                                    src="<?php print path_to_theme(); ?>/images/slider/development/o.png"
                                    alt="o">
                            </div> <img
                                src="<?php print path_to_theme(); ?>/images/slider/development/p.png"
                                alt="p">
                            <div class="tp-caption fade" data-x="505" data-y="153"
                                 data-speed="2000" data-start="1300" data-easing="easeOutExpo">
                                <img
                                    src="<?php print path_to_theme(); ?>/images/slider/development/p.png"
                                    alt="p">
                            </div> <img
                                src="<?php print path_to_theme(); ?>/images/slider/development/l.png"
                                alt="l">
                            <div class="tp-caption fade" data-x="605" data-y="120"
                                 data-speed="2000" data-start="1400" data-easing="easeInOutExpo">
                                <img
                                    src="<?php print path_to_theme(); ?>/images/slider/development/l.png"
                                    alt="l">
                            </div> 
                            <img src="<?php print path_to_theme(); ?>/images/slider/development/e.png" alt="e">
                            <div class="tp-caption fade" data-x="634" data-y="154" data-speed="2000" data-start="1500" data-easing="easeInOutExpo">
                                <img src="<?php print path_to_theme(); ?>/images/slider/development/e.png"  alt="e">
                            </div>
                        </li>




                    </ul>
                </div>
            </div>

            <!-- END REVOLUTION SLIDER -->
            <div class="mainControls clearfix">
                <div class="caption"></div>
                <div class="ccontrols clearfix">
                    <span class="arrow back"><a href="#"><span>&larr;</span></a></span>
                    <span class="arrow forward"><a href="#"><span>&rarr;</span></a></span>
                    <div class="ul">                       
                    </div>
                </div>
            </div>
            <ul class="dummy-captions clearfix">
                <li>Building amazing stuff with amazing hands!</li>
                <li>Web Applications Development</li>
                <li>Mobil Applications Development</li> 
                <li>Social Applications Development</li>
                <li>Design Studio</li>
                <li>&nbsp;</li>
            </ul>
        </div>

        <!-- why us block  -->
        <div class="row-fluid">
            <div class="wpb_content_element span9 column_container">

                <header style="margin-bottom: 20px" class="sectionTitle clearfix ">
                    <h3>
                        <i class="i-small icon-delicious"></i> <strong>Our Professional Services!</strong>
                    </h3>
                </header>
                <section class="rbText clearfix autop">
                    <div class="row-fluid">
                        <div class="wpb_content_element span4 column_container">
                            <section class="rbTextIcon clearfix minimal">
                                <a target="_self" href="#" class="clearfix"><i
                                        class="i-default icon-desktop"></i>
                                    <h4>Web Apps Development</h4></a>
                                <div>
                                    <p>We build scalable web applications and turn key SaaS solutions that delight the audiences that use them.</p>
                                    <a href="#" class="more nav-next">Read more</a>
                                </div>
                            </section>
                        </div>
                        <div class="wpb_content_element span4 column_container">
                            <section class="rbTextIcon clearfix minimal">
                                <a target="_self" href="#" class="clearfix"><i
                                        class="i-default icon-mobile"></i>
                                    <h4>Mobile Apps Development</h4></a>
                                <div>
                                    <p>We  develop innovative services strategies in mobile design and development across iOS, Android, and Cross platforms.</p>
                                    <a href="#" class="more nav-next">Read more</a>
                                </div>
                            </section>
                        </div>
                        <div class="wpb_content_element span4 column_container">
                            <section class="rbTextIcon clearfix minimal">
                                <a target="_self" href="#" class="clearfix"><i
                                        class="i-default icon-google-circles"></i>
                                    <h4>Social Apps Development</h4></a>
                                <div>
                                    <p>Social applications developers specialists in designing, developing and deploying custom and native social platforms applications </p>
                                    <a href="#" class="more nav-next">Read more</a>
                                </div>
                            </section>
                        </div>
                    </div>



                </section>
            </div>
            <div class="wpb_content_element span3 column_container">

                <header class="sectionTitle clearfix con-fire-station"
                        style="margin-bottom: 40px">
                    <h3>
                        <i class="i-small icon-sound"></i><strong>METHODOLOGY</strong>
                    </h3>
                </header>
                <section class="rbBox clearfix light autop">
                    <h5>Developer Work cycle</h5>
                    <p>see how projects are assigned to our developers</p>
                    <a target="_self" href="#" class="rbButton dark medium">Click here</a>
                </section>
            </div>

        </div>

        <!-- //why us block  -->

        <!-- What We've Built  -->
        <header style="margin-bottom: 50px;" class="sectionTitle clearfix con-pencil-1">
            <h3>
                <i class="i-small icon-pencil-1"></i><strong>What We've Built</strong>
            </h3>
        </header>

        <section class="rbProjects latestProjects portfolio clearfix  tone cfour afalse autop">
            <ul id="items" class="clearfix">
                <li class="item wp-theme"><a href="#" data-slug="wowway"
                                             class="clearfix"> <img
                            src="<?php print path_to_theme(); ?>/images/projects/project_1@2x-220x165.jpg" width="220"
                            height="165" alt="WowWay" />
                        <div class="caption">
                            <h3>WowWay</h3>
                            <span>WP theme</span>
                        </div>
                    </a></li>
                <li class="item logotype"><a href="#" data-slug="check"
                                             class="clearfix"> <img
                            src="<?php print path_to_theme(); ?>/images/projects/project_2@2x-220x165.jpg" width="220"
                            height="165" alt="Check" />
                        <div class="caption">
                            <h3>Check</h3>
                            <span>Logotype</span>
                        </div>
                    </a></li>
                <li class="item video"><a href="#"
                                          data-slug="tablet-commercial" class="clearfix"> <img
                            src="<?php print path_to_theme(); ?>/images/projects/project_3@2x-220x165.jpg" width="220"
                            height="165" alt="Tablet Commercial" />
                        <div class="caption">
                            <h3>Tablet Commercial</h3>
                            <span>Video</span>
                        </div>
                    </a></li>
                <li class="item print"><a href="#" data-slug="the-master-plan"
                                          class="clearfix"> <img
                            src="<?php print path_to_theme(); ?>/images/projects/project_4@2x-220x165.jpg" width="220"
                            height="165" alt="The Master Plan" />
                        <div class="caption">
                            <h3>The Master Plan</h3>
                            <span>Print</span>
                        </div>
                    </a></li>
                <!-- <li class="item identity logotype"><a href="#" data-slug="new"
                        class="clearfix"> <img
                                src="<?php print path_to_theme(); ?>/images/projects/project_5@2x-220x165.jpg" width="220"
                                height="165" alt="New" />
                                <div class="caption">
                                        <h3>New</h3>
                                        <span>Identity, Logotype</span>
                                </div>
                </a></li>
                <li class="item wp-theme"><a href="#" data-slug="goodwork"
                        class="clearfix"> <img
                                src="<?php print path_to_theme(); ?>/images/projects/project_6@2x-220x165.jpg" width="220"
                                height="165" alt="GoodWork" />
                                <div class="caption">
                                        <h3>GoodWork</h3>
                                        <span>WP theme</span>
                                </div>
                </a></li>
                <li class="item video"><a href="#"
                        data-slug="iphone-app-video-kit" class="clearfix"> <img
                                src="<?php print path_to_theme(); ?>/images/projects/project_8@2x-220x165.jpg" width="220"
                                height="165" alt="iPhone App Video Kit" />
                                <div class="caption">
                                        <h3>iPhone App Video Kit</h3>
                                        <span>Video</span>
                                </div>
                </a></li>
                <li class="item identity logotype video"><a href="#"
                        data-slug="self-hosted" class="clearfix"> <img
                                src="<?php print path_to_theme(); ?>/images/projects/project_7@2x-220x165.jpg" width="220"
                                height="165" alt="Self Hosted" />
                                <div class="caption">
                                        <h3>Self Hosted</h3>
                                        <span>Identity, Logotype, Video</span>
                                </div>
                </a></li>
                --></ul>
            <a href="http://demo.krownthemes.com/goodwork/our-work/" class="btnAll">View all portfolio &rarr;</a>
        </section>
        <!-- What We've Built  -->
         <br class="margin-top-10" />
        <!-- why us block  -->
        <div class="row-fluid">
            <div class="wpb_content_element span6 column_container">

                <header style="margin-bottom: 35px"	class="sectionTitle clearfix con-beaker">
                    <h3>
                        <i class="i-small icon-help"></i><strong>Why choose Al Saif Professionals?</strong>
                    </h3>

                </header>
                <section class="rbText clearfix autop">

                    <p>We are always keen to improve our services, 
                        including professional web design and development services, strategies, practices, 
                        management techniques and Quality Assurance standards to enhance our team’s capabilities 
                        and increase customer satisfaction.

                    </p>

                    <div class="column_container nospace clearfix span6 ffirst">

                        <ul>
                            <li><span class="list1 list3">Customer-Focused Approach</span></li>
                            <li><span class="list1 list3">Business Experience</span></li>
                            <li><span class="list1 list3">Commitment to Quality</span></li>
                            <li><span class="list1 list3">Delivering Business Value</span></li>
                            <li><span class="list1 list3">Process Quality</span></li>
                        </ul>

                    </div>
                    <div class="column_container nospace clearfix span6 flast">

                        <ul>
                            <li><span class="list1 list3">Affordable Rates</span></li>
                            <li><span class="list1 list3">Easy Communication</span></li>
                            <li><span class="list1 list3">Personnel Quality</span></li>
                            <li><span class="list1 list3"> technical innovation</span> </li>
                            <li><span class="list1 list3">Stop-notch experts.</span></li>
                        </ul>

                    </div>

                </section>
            </div>
            <div class="wpb_content_element span3 column_container">

                <header style="margin-bottom: 38px"	class="sectionTitle clearfix con-quote-left">
                    <h3>
                        <i class="i-small icon-quote-left"></i><strong>Testimonials</strong>
                    </h3>
                </header>
                <figure class="rbTestimonial light">
                    <blockquote>
                        <p>
                            Lorem ipsum dolor sit amet nectuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean <a href="#"><strong>www.massaum.com</strong></a>
                            natoque penatibus.
                        </p>

                    </blockquote>
                    <figcaption>
                        <p>John Doe</p>
                        <span>Designer at Guruly.com</span>
                    </figcaption>
                </figure>
            </div>
            <div class="wpb_content_element span3 column_container">

                <header style="margin-bottom: 38px"
                        class="sectionTitle clearfix con-heart-1">
                    <h3>
                        <i class="i-small icon-heart-1"></i><strong>We are Social</strong>
                    </h3>
                </header>
                <div class="clearfix">
                    <section class="rbSocial clearfix notli list">
                        <ul>
                            <li class="i-square icon-twitter"><a href="https://twitter.com/Al_Saif_Org"><p>Follow	us</p></a></li>
                            <li class="i-square icon-facebook-squared"><a href="https://www.facebook.com/al.saif.professionals"><p>Like us </p></a></li>
                            <li class="i-square icon-gplus"><a href="https://plus.google.com/109821853239509152760"><p>Follow us at gplus</p></a></li>
                            <li class="i-square icon-behance"><a href="http://www.behance.net/alsaifprofessionals"><p>View our work</p></a></li>
                            <!-- <li class="i-square icon-rss"><a href="#"><p>Stay up to date</p></a></li> -->

                        </ul>
                    </section>
                </div>
            </div>

        </div>
        <br class="margin-top-10" />

        <!-- //why us block  -->

        <!-- Quote line -->
        <div class="row-fluid">
            <header class="sectionTitle clearfix margin-bottom-45 ">
                <h3>
                    <i class="i-small icon-school"></i> <strong>In a hurry? No problem.</strong>
                </h3>
            </header>
            <section class="rbLine clearfix margin-bottom-30">
                <i class="i-medium icon-megaphone"></i>
                <h2>If you have any Query or want a FREE Quote, Contact us!</h2>
                <h5>We always welcome to client for their project analysis.</h5>
                <a class="rbButton large dark" href="#" target="_self">Get Started</a>
            </section>
        </div>
        <!-- // Quote line -->


        <!-- Blog block  -->
<!--        <div class="row-fluid">
            <div class="wpb_content_element span9 column_container">

                <header style="margin-bottom: 40px"	class="sectionTitle clearfix con-book-open">
                    <h3>
                        <i class="i-small icon-book-open"></i><strong>Latest From Our Blog</strong>
                    </h3>
                </header>
                <section class="rbPosts clearfix jxfalse classic autop" data-no="3"
                         data-more="true">
                    <div class="postsContainer holder classic clearfix">
                        <article id="post-167"
                                 class="post-167 post type-post status-publish format-gallery hentry category-media tag-gallery here-is-a-gallery-post post clearfix">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide2@2x1-220x125.jpg"
                                    width="220" height="125" alt="Example Post With Gallery" /></a>
                            <header>
                                <a class="clearfix gallery"
                                   href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/">
                                    <h3>Example Post With Gallery</h3> <span class="time">21st
                                        January 2013</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. Integer
                                    posuere erat a [...]<a class="more nav-next"
                                                           href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-173"
                                 class="post-173 post type-post status-publish format-video hentry category-media tag-bandwidth tag-headphones post-with-self-hosted-video post clearfix">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/media/post-with-self-hosted-video/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide2@2x-220x125.jpg"
                                    width="220" height="125" alt="This Is Video Post" /></a>
                            <header>
                                <a class="clearfix video"
                                   href="http://demo.krownthemes.com/goodwork/media/post-with-self-hosted-video/">
                                    <h3>This Is Video Post</h3> <span class="time">19th
                                        January 2013</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Et harum quidem rerum facilis est et expedita distinctio. Nam
                                    libero tempore, cum soluta nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod [...]<a class="more nav-next"
                                                                            href="http://demo.krownthemes.com/goodwork/media/post-with-self-hosted-video/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-188"
                                 class="post-188 post type-post status-publish format-audio hentry category-music tag-audio tag-iphone tag-music-2 post-with-audio post clearfix">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/music/post-with-audio/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/02/project_13@2x-220x125.jpg"
                                    width="220" height="125" alt="Post With Audio Player" /></a>
                            <header>
                                <a class="clearfix audio"
                                   href="http://demo.krownthemes.com/goodwork/music/post-with-audio/">
                                    <h3>Post With Audio Player</h3> <span class="time">13th
                                        January 2013</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. Integer
                                    posuere erat a [...]<a class="more nav-next"
                                                           href="http://demo.krownthemes.com/goodwork/music/post-with-audio/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-179"
                                 class="post-179 post type-post status-publish format-quote hentry category-words tag-wise and-this-is-quote post clearfix hidden">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/words/and-this-is-quote/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2012/09/slide1-220x125.jpg"
                                    width="220" height="125" alt="And This is Quote" /></a>
                            <header>
                                <a class="clearfix quote"
                                   href="http://demo.krownthemes.com/goodwork/words/and-this-is-quote/">
                                    <h3>And This is Quote</h3> <span class="time">5th
                                        January 2013</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. Integer
                                    posuere erat a [...]<a class="more nav-next"
                                                           href="http://demo.krownthemes.com/goodwork/words/and-this-is-quote/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-185"
                                 class="post-185 post type-post status-publish format-link hentry category-words tag-books tag-inspiration-2 tag-library tag-words-2 here-is-a-post-with-link post clearfix hidden">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/words/here-is-a-post-with-link/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/i3.jpg"
                                    width="220" height="125" alt="Check This Out (link)" /></a>
                            <header>
                                <a class="clearfix link"
                                   href="http://demo.krownthemes.com/goodwork/words/here-is-a-post-with-link/">
                                    <h3>Check This Out (link)</h3> <span class="time">5th
                                        January 2013</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint
                                    et molestiae non recusandae. Itaque earum rerum hic [...]<a
                                        class="more nav-next"
                                        href="http://demo.krownthemes.com/goodwork/words/here-is-a-post-with-link/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-161"
                                 class="post-161 post type-post status-publish format-standard hentry category-inspiration tag-books tag-inspiration-2 tag-words-2 example-of-a-standard-post post clearfix hidden">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/inspiration/example-of-a-standard-post/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/03/slide4-220x125.jpg"
                                    width="220" height="125" alt="Example of a Standard Post" /></a>
                            <header>
                                <a class="clearfix standard"
                                   href="http://demo.krownthemes.com/goodwork/inspiration/example-of-a-standard-post/">
                                    <h3>Example of a Standard Post</h3> <span class="time">1st
                                        January 2013</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis [...]<a class="more nav-next"
                                                                          href="http://demo.krownthemes.com/goodwork/inspiration/example-of-a-standard-post/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-181"
                                 class="post-181 post type-post status-publish format-image hentry category-inspiration category-paper tag-iphone tag-library single-image-post post clearfix hidden">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/inspiration/single-image-post/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2012/12/image1-220x125.jpg"
                                    width="220" height="125" alt="Single Image Post" /></a>
                            <header>
                                <a class="clearfix image"
                                   href="http://demo.krownthemes.com/goodwork/inspiration/single-image-post/">
                                    <h3>Single Image Post</h3> <span class="time">30th
                                        December 2012</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Praesent vel nulla sed mi semper posuere. Ut odio nibh,
                                    molestie quis feugiat sit amet, tincidunt non magna. Maecenas
                                    nisl est, posuere sit amet feugiat [...]<a
                                        class="more nav-next"
                                        href="http://demo.krownthemes.com/goodwork/inspiration/single-image-post/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-175"
                                 class="post-175 post type-post status-publish format-video hentry category-media tag-iphone tag-media-2 tag-reel embedded-video post clearfix hidden">
                            <a class="ch thumb clearfix"
                               href="http://demo.krownthemes.com/goodwork/media/embedded-video/"><img
                                    src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2012/08/image1-220x125.jpg"
                                    width="220" height="125" alt="Embedded Video" /></a>
                            <header>
                                <a class="clearfix video"
                                   href="http://demo.krownthemes.com/goodwork/media/embedded-video/">
                                    <h3>Embedded Video</h3> <span class="time">28th
                                        December 2012</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    Praesent vel nulla sed mi semper posuere. Ut odio nibh,
                                    molestie quis feugiat sit amet, tincidunt non magna. Maecenas
                                    nisl est, posuere sit amet feugiat [...]<a
                                        class="more nav-next"
                                        href="http://demo.krownthemes.com/goodwork/media/embedded-video/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                        <article id="post-224"
                                 class="post-224 post type-post status-publish format-audio hentry category-music tag-audio tag-iphone tag-music-2 visiting-all-the-areas post clearfix hidden">
                            <header>
                                <a class="clearfix audio"
                                   href="http://demo.krownthemes.com/goodwork/music/visiting-all-the-areas/">
                                    <h3>Visiting All the Areas</h3> <span class="time">24th
                                        December 2012</span>
                                </a>
                            </header>

                            <section>
                                <p>
                                    <a class="more nav-next"
                                       href="http://demo.krownthemes.com/goodwork/music/visiting-all-the-areas/">Read
                                        more</a>
                                </p>
                            </section>

                        </article>
                    </div>
                    <div class="buttons">
                        <a class="btnPrev" href="#"></a><a class="btnNext" href="#"></a>
                    </div>
                </section>
            </div>
            <div class="wpb_content_element span3 column_container">

                <header style="margin-bottom: 40px"
                        class="sectionTitle clearfix con-fire-station">
                    <h3>
                        <i class="i-small icon-fire-station"></i><strong>Special
                            Offer!</strong>
                    </h3>
                </header>
                <section class="rbText clearfix autop">
                    <div class="miniF minis clearfix">
                        <a class="changeLink" href="#"><div class="product-name" style="clear: both;">Mobile App Project</div></a>
                        <div class="product-image-container" style="clear: both;">
                            <img
                                src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/04/slide3@2x2-300x159.jpg" />
                        </div>
                        <div class="morethan">
                            <div class="progress-wrapper" style="clear: both;">
                                <div class="progress-percentage">30.0%</div>
                                <div style="width: 63.47%" class="progress-bar"></div>
                            </div>
                            <span class="helper h1">Save</span>
                            <div class="wrap1 clearfix">
                                <div class="c1">
                                    <span class="product-goal" style="clear: both;">14500</span><span
                                        class="helper">GOAL</span>
                                </div>
                                <div class="c2">
                                    <span class="product_daystogo" style="clear: both;">71</span>
                                    days<span class="helper">TO GO</span>
                                </div>
                            </div>
                            <a class="main-btn changeLink" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="id-widget id-mini">
                        <div class="id-product-infobox">
                            <div class="product-wrapper">
                                <div class="pledge">
                                    <h2 class="id-product-title">
                                        <a
                                            href="http://demo.krownthemes.com/goodwork/crowd-funding-1/">Mobile
                                            App Project</a>
                                    </h2>
                                    <div id="img_cur">
                                        <img
                                            src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/04/slide3@2x2-300x159.jpg"
                                            width="150px;" />
                                    </div>
                                    <div class="price-left">$0</div>
                                    <div class="progress-wrapper">
                                        <div class="progress-percentage">30.0%</div>
                                         end progress-percentage 
                                        <div class="progress-bar" style="width: 30.0%">
                                            
                                        </div>
                                         end progress bar 
                                    </div>
                                     end progress wrapper 
                                </div>

                                 end pledge 

                                <div class="clearing">
                                    
                                </div>
                                <div class="id-product-funding"></div>
                                <div class="id-progress-raised">$9,203</div>
                                <div class="id-product-funding">Pledged of $14,500 Goal</div>
                                <div class="id-product-total">4</div>
                                <div class="id-product-pledges">Pledgers</div>
                                <div class="id-product-days">71</div>
                                <div class="id-product-days-to-go">Days left</div>
                            </div>

                             end product-wrapper 
                            <div class="id-product-proposed-end">
                                Crowdfunding ends on
                                <div id="id-widget-date">
                                    <div id="id-widget-month">July</div>
                                    <div id="id-widget-day">25</div>
                                    <div id="id-widget-year">2013</div>
                                </div>
                            </div>
                            <div>&nbsp;</div>
                            <div id="btn-container">
                                <a href="http://demo.krownthemes.com/goodwork/crowd-funding-1/"
                                   class="learn-more-button">Learn More</a>
                            </div>
                            <div id="poweredbyID">
                                <span><a href="http://ignitiondeck.com"
                                         title="Crowdfunding by IgnitionDeck">Powered By
                                        IgnitionDeck</a></span>
                            </div>

                        </div>

                         end product-infobox 

                    </div>

                     end mini-widget 
                    <p>
                </section>


            </div>
        </div>-->
        <!-- // Blog block  -->



        <br style="margin-top: -80px" class="rbBlankNeg" />


    <!--</article>-->

    <!-- Content Wrapper End -->
    <!-- Content Area End -->


</div>

<!-- Main Wrapper End -->
<?php include 'page-footer.tpl.php';?>