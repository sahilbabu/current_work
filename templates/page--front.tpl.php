<?php
// $Id: page--front.tpl.php,v 1.17.2.4 2013/08/19 14:42:44 sahilbabu Exp $
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
<?php print render($page['content']['metatags']); ?>
<?php // print_r($page); die();?>
<!-- Main Wrapper Start -->

<div class="wrapper clearfix tttrue">

    <!-- Header Start -->

    <header id="mainHeader" class="f_height dark_menu logo_left">

        <?php if ($logo): ?>
            <div id="logo" class="clearfix">
                <a href="<?php print $front_page; ?>" style="width: 169px;" rel="home">
                        <!-- 	<img class="default" src="" alt="GoodWork" />  -->
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
            <form role="search" method="get" id="searchform" action="">
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
    <?php //if ($page['preface']): ?>
        <?php // print render($page['preface']); ?>
        <!--<br class="margin-top-10" />-->
     <?php // endif; ?>

    <header class="rbTagline clearfix wicon">
        <i class="i-medium icon-mic"></i>
        <h1>Hi, there! Welcome to Al Saif Professionals</h1>
        <h2>Where finest codes &amp; coders coincide</h2>
    </header>
    <br class="margin-top-10" />
    <article id="content" class="clearfix">


    <div class="clearfix rev minimal-1">
        <!-- START REVOLUTION SLIDER 2.2.3 -->
        <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper"   style="margin: 0px auto; background-color: #f7f7f7; padding: 0px; margin-top: 0px; margin-bottom: 0px;">
            <div id="rev_slider_2_1" class="rev_slider" >
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

            <header class="sectionTitle clearfix margin-bottom-20">
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

            <header class="sectionTitle clearfix con-fire-station margin-bottom-40" >
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

    <!-- What We've Built  -->
    <br class="margin-top-10" />
    <!-- why us block  -->
    <div class="row-fluid">
        <div class="wpb_content_element span6 column_container">

            <header class="sectionTitle clearfix con-beaker margin-bottom-35">
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

            <header  class="sectionTitle clearfix con-quote-left margin-bottom-38">
                <h3>
                    <i class="i-small icon-quote-left"></i><strong>Testimonials</strong>
                </h3>
            </header>
            <figure class="rbTestimonial light">
                <blockquote>
                    <p>
                        Good workers. very cooperative in fulfilling the requirements of the project we presented them. Deliver work in a timely fashion!
                    </p>

                </blockquote>
                <figcaption>
                    <p>GIintl</p>
                    <span>CEO at Websites International</span>
                </figcaption>
            </figure>
        </div>
        <div class="wpb_content_element span3 column_container">

            <header class="sectionTitle clearfix con-heart-1 margin-bottom-38">
                <h3>
                    <i class="i-small icon-heart-1"></i><strong>We are Social</strong>
                </h3>
            </header>
            <div class="clearfix">
                <section class="rbSocial clearfix notli list">
                    <ul>        
                        <li class="i-square icon-twitter"><a href="<?php print $twitter; ?>"><p>Follow us</p></a></li>
                        <li class="i-square icon-facebook-squared"><a href="<?php print $facebook; ?>"><p>Like us </p></a></li>
                        <li class="i-square icon-gplus"><a href="<?php print $google_plus; ?>"><p>Follow us at gplus</p></a></li>
                        <li class="i-square icon-behance"><a href="<?php print $behance; ?>"><p>View our work</p></a></li>
                        <!-- <li class="i-square icon-rss"><a href="#"><p>Stay up to date</p></a></li> -->

                    </ul>
                </section>
            </div>
        </div>

    </div>
    <br class="margin-top-10" />

    <!-- //why us block  -->

    <!-- Quote line -->
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
    <!-- // Quote line -->


    <!-- Blog block  -->

    <!-- // Blog block  -->



    <br class=" margin-top-80 rbBlankNeg" />


    <!--</article>-->

    <!-- Content Wrapper End -->
    <!-- Content Area End -->


</div>

<!-- Main Wrapper End -->
<?php include 'page-footer.tpl.php'; ?>