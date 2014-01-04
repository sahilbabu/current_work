<?php
// $Id: page--blog.tpl.php,v 1.17.2.4 2013/08/19 14:42:44 sahilbabu Exp $
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
global $base_path, $base_url;
// die($base_url);
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
        <?php if ($breadcrumb): ?>
            <!--            <nav id="breadcrumb" >
            <?php // print $breadcrumb; ?>
                            <a href="http://demo.krownthemes.com/goodwork"><i class="icon-home"></i></a> <span>></span> Homepage 
                        </nav>-->
        <?php endif; ?>

    </header>

    <!-- Header End -->
    <?php if ($type == 'blog'):  ?>  
            <div id="pageTitle" class="clearfix">
                <h1>What We Think</h1>
                <?php  if ($view_mode == 'full'):  ?>
                <nav class="postsNav">
				<span class="prev">
                                    <a rel="prev" href="<?php echo $base_url; ?>/blog">Back to Blog </a>
                                </span>				
                </nav>
                  <?php  endif; ?>
            </div>
      
    <!-- Content Wrapper Start -->

    <article id="content" class="clearfix"> 
        <div class="postsContainer classic">

            <?php print render($page['content']); ?>

        </div>
    </article>
    <?php else:  ?> 
     <?php print render($page['content']); ?>
    <?php endif; ?>

    <!-- Content Wrapper End -->

    <!-- Sidebars -->

    <aside id="sidebarRight" class="sidebar">
        <section id="text-9" class="widget sidebox widget_text clearfix"><div class="widget_title"><h4>About The Blog</h4></div>			<div class="textwidget">Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aene modo ligula eget dolor. Aenean massa um sociis natoque penatib us. Dolor sitamet nec.</div>
        </section>
        <section id="archives-4" class="widget sidebox widget_archive clearfix"><div class="widget_title"><h4>Archives</h4></div>		<ul>
                <li><a href='http://demo.krownthemes.com/goodwork/2013/01/' title='January 2013'>January 2013</a></li>
                <li><a href='http://demo.krownthemes.com/goodwork/2012/12/' title='December 2012'>December 2012</a></li>
                <li><a href='http://demo.krownthemes.com/goodwork/2012/10/' title='October 2012'>October 2012</a></li>
                <li><a href='http://demo.krownthemes.com/goodwork/2012/09/' title='September 2012'>September 2012</a></li>
                <li><a href='http://demo.krownthemes.com/goodwork/2012/08/' title='August 2012'>August 2012</a></li>
            </ul>
        </section>
        <section id="categories-4" class="widget sidebox widget_categories clearfix"><div class="widget_title"><h4>Categories</h4></div>		<ul>
                <li class="cat-item cat-item-3"><a href="http://demo.krownthemes.com/goodwork/category/inspiration/" title="View all posts filed under Inspiration">Inspiration</a> (4)
                </li>
                <li class="cat-item cat-item-5"><a href="http://demo.krownthemes.com/goodwork/category/media/" title="View all posts filed under Media">Media</a> (6)
                </li>
                <li class="cat-item cat-item-13"><a href="http://demo.krownthemes.com/goodwork/category/music/" title="View all posts filed under Music">Music</a> (2)
                </li>
                <li class="cat-item cat-item-10"><a href="http://demo.krownthemes.com/goodwork/category/paper/" title="View all posts filed under Paper">Paper</a> (3)
                </li>
                <li class="cat-item cat-item-8"><a href="http://demo.krownthemes.com/goodwork/category/words/" title="View all posts filed under Words">Words</a> (4)
                </li>
            </ul>
        </section>
        <section id="text-10" class="widget sidebox widget_text clearfix"><div class="widget_title"><h4>Most Popular</h4></div>			<div class="textwidget"><section class="rbCustomPosts clearfix popular"><article>
                        <a href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/" class="clearfix"><img width="150" height="150" src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide2@2x1-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="First Gallery" /><h4>Example Post With Gallery</h4>
                            <span class="time">21 January 2013</span>
                        </a></article><article>
                        <a href="http://demo.krownthemes.com/goodwork/media/post-with-self-hosted-video/" class="clearfix"><img width="150" height="150" src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide2@2x-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="slide2@2x" /><h4>This Is Video Post</h4>
                            <span class="time">19 January 2013</span>
                        </a></article><article>
                        <a href="http://demo.krownthemes.com/goodwork/music/post-with-audio/" class="clearfix"><img width="150" height="150" src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/02/project_13@2x-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="project_13@2x" /><h4>Post With Audio Player</h4>
                            <span class="time">13 January 2013</span>
                        </a></article></section></div>
        </section>
        <section id="text-11" class="widget sidebox widget_text clearfix"><div class="widget_title"><h4>Most Commented</h4></div>			<div class="textwidget"><section class="rbCustomPosts clearfix commented"><article>
                        <a href="http://demo.krownthemes.com/goodwork/words/here-is-a-post-with-link/" class="clearfix"><span class="comments"><i class="icon-comment"></i><strong>8</strong></span><h4>Check This Out (link)</h4>
                            <span class="time">5 January 2013</span>
                        </a></article><article>
                        <a href="http://demo.krownthemes.com/goodwork/inspiration/single-image-post/" class="clearfix"><span class="comments"><i class="icon-comment"></i><strong>6</strong></span><h4>Single Image Post</h4>
                            <span class="time">30 December 2012</span>
                        </a></article><article>
                        <a href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/" class="clearfix"><span class="comments"><i class="icon-comment"></i><strong>3</strong></span><h4>Example Post With Gallery</h4>
                            <span class="time">21 January 2013</span>
                        </a></article></section> </div>
        </section>
        <section id="text-12" class="widget sidebox widget_text clearfix"><div class="widget_title"><h4>Twitter Feed</h4></div>			<div class="textwidget"><section class="rbTwitter clearfix">
                    <a href="https://twitter.com/rubenbristian"><img src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/03/gbwixdlgv7iu8rop7tzx.jpeg" alt="Ruben Bristian" /></a>
                    <a href="https://twitter.com/rubenbristian"><h5>Ruben Bristian</h5></a>
                    <a href="https://twitter.com/rubenbristian"><span>@rubenbristian</span></a>
                    <iframe src="//platform.twitter.com/widgets/follow_button.html?show_screen_name=false&lang=en&show_count=false&screen_name=rubenbristian" style="width:100px; height:24px;"></iframe>
                    <ul><li>
                            <p class="body">Glowing Plants: Natural Lighting with no Electricity by Antony Evans — Kickstarter <a href="http://t.co/bsLVaUxWa7">http://t.co/bsLVaUxWa7</a> via <a href="https://twitter.com/@kickstarter">@kickstarter</a></p>
                            <a class="time" href="https://twitter.com/rubenbristian/status/333904178529325056">13 May 2013 at 11:18 AM</a>
                            <div class="intents">
                                <a class="popup reply" data-name="Post a Tweet on Twitter" data-width="400" data-height="200" href="https://twitter.com/intent/tweet?in_reply_to=333904178529325056">Reply</a>
                                <a class="popup retweet" data-name="Retweet" data-width="400" data-height="200" href="https://twitter.com/intent/retweet?tweet_id=333904178529325056">Retweet</a>
                                <a class="popup favorite" data-name="Favorite" data-width="400" data-height="200" href="https://twitter.com/intent/favorite?tweet_id=333904178529325056">Favorite</a>
                            </div>
                        </li><li>
                            <p class="body">Ghost: Just a Blogging Platform by John O'Nolan — Kickstarter <a href="http://t.co/Fa6kguO8aO">http://t.co/Fa6kguO8aO</a> via <a href="https://twitter.com/@kickstarter">@kickstarter</a></p>
                            <a class="time" href="https://twitter.com/rubenbristian/status/332791887238950914">10 May 2013 at 9:39 AM</a>
                            <div class="intents">
                                <a class="popup reply" data-name="Post a Tweet on Twitter" data-width="400" data-height="200" href="https://twitter.com/intent/tweet?in_reply_to=332791887238950914">Reply</a>
                                <a class="popup retweet" data-name="Retweet" data-width="400" data-height="200" href="https://twitter.com/intent/retweet?tweet_id=332791887238950914">Retweet</a>
                                <a class="popup favorite" data-name="Favorite" data-width="400" data-height="200" href="https://twitter.com/intent/favorite?tweet_id=332791887238950914">Favorite</a>
                            </div>
                        </li><li>
                            <p class="body">GoodWork 1.0.5 was just released! New features and issues fixed! Check it out here: <a href="http://t.co/zWa4C7I8J1">http://t.co/zWa4C7I8J1</a></p>
                            <a class="time" href="https://twitter.com/rubenbristian/status/332055371961217026">8 May 2013 at 8:52 AM</a>
                            <div class="intents">
                                <a class="popup reply" data-name="Post a Tweet on Twitter" data-width="400" data-height="200" href="https://twitter.com/intent/tweet?in_reply_to=332055371961217026">Reply</a>
                                <a class="popup retweet" data-name="Retweet" data-width="400" data-height="200" href="https://twitter.com/intent/retweet?tweet_id=332055371961217026">Retweet</a>
                                <a class="popup favorite" data-name="Favorite" data-width="400" data-height="200" href="https://twitter.com/intent/favorite?tweet_id=332055371961217026">Favorite</a>
                            </div>
                        </li><li>
                            <p class="body">GoodWork 1.0.3 was just released! Critical bugs have been fixed, so for all who have bought the file, please update! <a href="http://t.co/klO92vHrPZ">http://t.co/klO92vHrPZ</a></p>
                            <a class="time" href="https://twitter.com/rubenbristian/status/331310599709532160">6 May 2013 at 7:32 AM</a>
                            <div class="intents">
                                <a class="popup reply" data-name="Post a Tweet on Twitter" data-width="400" data-height="200" href="https://twitter.com/intent/tweet?in_reply_to=331310599709532160">Reply</a>
                                <a class="popup retweet" data-name="Retweet" data-width="400" data-height="200" href="https://twitter.com/intent/retweet?tweet_id=331310599709532160">Retweet</a>
                                <a class="popup favorite" data-name="Favorite" data-width="400" data-height="200" href="https://twitter.com/intent/favorite?tweet_id=331310599709532160">Favorite</a>
                            </div>
                        </li><li>
                            <p class="body">After a lot of hard work, i proudly present GoodWork - the incredible all in one WordPress theme : <a href="http://t.co/7ccD2wsDwT">http://t.co/7ccD2wsDwT</a></p>
                            <a class="time" href="https://twitter.com/rubenbristian/status/329641202829897728">1 May 2013 at 4:59 PM</a>
                            <div class="intents">
                                <a class="popup reply" data-name="Post a Tweet on Twitter" data-width="400" data-height="200" href="https://twitter.com/intent/tweet?in_reply_to=329641202829897728">Reply</a>
                                <a class="popup retweet" data-name="Retweet" data-width="400" data-height="200" href="https://twitter.com/intent/retweet?tweet_id=329641202829897728">Retweet</a>
                                <a class="popup favorite" data-name="Favorite" data-width="400" data-height="200" href="https://twitter.com/intent/favorite?tweet_id=329641202829897728">Favorite</a>
                            </div>
                        </li><li>
                            <p class="body">RT 12 Blurred Backgrounds via <a href="https://twitter.com/@IconDeposit">@IconDeposit</a> -  <a href="http://t.co/4DDCszOaKT">http://t.co/4DDCszOaKT</a></p>
                            <a class="time" href="https://twitter.com/rubenbristian/status/329257697004367872">30 April 2013 at 3:35 PM</a>
                            <div class="intents">
                                <a class="popup reply" data-name="Post a Tweet on Twitter" data-width="400" data-height="200" href="https://twitter.com/intent/tweet?in_reply_to=329257697004367872">Reply</a>
                                <a class="popup retweet" data-name="Retweet" data-width="400" data-height="200" href="https://twitter.com/intent/retweet?tweet_id=329257697004367872">Retweet</a>
                                <a class="popup favorite" data-name="Favorite" data-width="400" data-height="200" href="https://twitter.com/intent/favorite?tweet_id=329257697004367872">Favorite</a>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </section>			
    </aside>


</div>

<!-- Main Wrapper End -->
<?php include 'page-footer.tpl.php'; ?>