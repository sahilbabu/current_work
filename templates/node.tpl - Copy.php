<?php
// $Id:  node.tpl.php,v 1.17.2.4 2013/08/19 14:42:44 sahilbabu Exp $
?>
<?php if (!$page): ?>
<?php 

?>
<article id="node-<?php print $node->nid; ?>" class="format-gallery category-media <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <a class="pTitle clearfix" href="<?php print $node_url; ?>">
        <h2 class="icon-none"><?php print $title; ?></h2>
    </a>

    <div class="flexslider pMedia folio">
        <ul class="slides"><li data-caption="">
                <img src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide1@2x1-700x350.jpg" width="700" height="350" alt="" />
            </li><li data-caption="">
                <img src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide2@2x1-700x350.jpg" width="700" height="350" alt="" />
            </li><li data-caption="">
                <img src="http://demo.krownthemes.com/goodwork/wp-content/uploads/2013/01/slide3@2x1-700x350.jpg" width="700" height="350" alt="" />
            </li></ul>
    </div>
    <div class="content">

        <ul class="meta">
            <li class="date"><i class="icon icon-calendar-1"></i><span class="p1">21st January 2013</span><span class="pTime p2">21/01/13</span></li>
            <li class="type"><i class="icon icon-tag"></i><a href="http://demo.krownthemes.com/goodwork/type/gallery/">Gallery</a></li>
            <li class="comments"><i class="icon icon-comment-1"></i><a href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/#comments">3</a></li>
        </ul>

        <div class="excerpt">
            <p>
                <?php
                    hide($content['comments']);
                    hide($content['links']);
                    print render($content);
                 ?>
            </p>							
            <a href="http://demo.krownthemes.com/goodwork/media/here-is-a-gallery-post/" class="more nav-next">Read more</a>
        </div>

    </div>

</article>
<?php endif; ?>
