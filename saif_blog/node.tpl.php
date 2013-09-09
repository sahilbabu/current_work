<?php
// $Id:  node.tpl.php,v 1.17.2.4 2013/08/19 14:42:44 sahilbabu Exp $
?>
<?php
//print '<pre>';
//print_r($taxonomy);
//print '</pre>'; exit;
?>
<?php  if ($type == 'blog' && $view_mode == 'teaser'): ?>
<?php   // if (!$page): ?>

    <article id="node-<?php print $node->nid; ?>" class="format-gallery category-media <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

        <a class="pTitle clearfix" href="<?php print $node_url; ?>">
            <h2 class="icon-none"><?php print $title; ?></h2>
        </a>
        <?php
        if (count($blog_image) > 0) {
            ?>
            <div class="flexslider pMedia folio">
                <ul class="slides">
                    <?php
                    foreach ($blog_image as $value) {
                       // $image_url  =   file_create_url($value['uri']);
                        $image_title  =   file_create_url($value['title']);
                        $image_alt  =   file_create_url($value['alt']);
                        $image_url =   image_style_url("blog_list", $value['uri']);
                       //  $options = array('absolute' => TRUE);
                       // $url = url('node/' . $nid, $options);
                    ?>
                        <li data-caption="<?php print $image_title; ?>">
                            <img src="<?php print $image_url; ?>"  alt="<?php print $image_alt; ?>" />
                        </li>
                    <?php      }      ?>
                </ul>
            </div>
                    <?php
                }
                ?>
        <div class="content">

            <ul class="meta">
                <li class="date"><i class="icon icon-calendar-1"></i><?php print $date; ?></li>
                <li class="type"><i class="icon icon-tag"></i><a href="http://demo.krownthemes.com/goodwork/type/gallery/">Gallery</a></li>
                <li class="comments"><i class="icon icon-comment-1"></i><a href="<?php print $node_url; ?>"><?php print $comment_count; ?></a></li>
            </ul>

            <div class="excerpt">
   
                    <?php
                        hide($content['comments']);
                        hide($content['links']);
                        print render($content);
                    ?>
						
                <a href="<?php print $node_url; ?>" class="more nav-next">Read more</a>
            </div>

        </div>

    </article>
<?php else: ?>
<?php  if ($type == 'blog' && $view_mode == 'full'):  ?>
<article class="format-gallery category-media <?php print $classes; ?> clearfix" id="node-<?php print $node->nid; ?>">

    <a href="<?php print $node_url; ?>" class="pTitle clearfix">
        <h2 class="icon-none"><?php print $title; ?></h2>
    </a>
    <?php
       // var_dump($blog_image);
        if (count($blog_image) > 0) {
    ?>
    <div class="flexslider pMedia folio" style="height: auto;">
        
        <div class="flex-viewport" >
            <ul class="slides" >
                <?php
                    foreach ($blog_image as $value) {
                       // $image_url  =   file_create_url($value['uri']);
                        $image_title  =   file_create_url($value['title']);
                        $image_alt  =   file_create_url($value['alt']);
                        $image_url =   image_style_url("blog_list", $value['uri']);
                       //  $options = array('absolute' => TRUE);
                       // $url = url('node/' . $nid, $options);
                    ?>
                <li data-caption="<?php print $image_title; ?>" class="clone" >
                    <img alt="<?php print $image_alt; ?>" src="<?php print $image_url; ?>">
                </li>
                <?php      }      ?>
            </ul>
        </div>
        <ol class="flex-control-nav flex-control-paging">
            <li><a class="">1</a></li>
            <li><a class="flex-active">2</a></li>
            <li><a class="">3</a></li>
        </ol>
        <ul class="flex-direction-nav">
            <li><a href="#" class="flex-prev">Previous</a></li>
            <li><a href="#" class="flex-next">Next</a></li>
        </ul>
    </div>
    <?php      }      ?>
    <section class="content clearfix">

        <ul class="meta">
                <li class="date"><i class="icon icon-calendar-1"></i><?php print $date; ?></li>
                <li class="type"><i class="icon icon-tag"></i><a href="http://demo.krownthemes.com/goodwork/type/gallery/">Gallery</a></li>
                <li class="comments"><i class="icon icon-comment-1"></i><a href="<?php print $node_url; ?>"><?php print $comment_count; ?></a></li>
        </ul>

        <div class="excerpt">
           <?php
                hide($content['comments']);
                hide($content['links']);
                print render($content['body']['#object']->body['und'][0]['value']);
            ?>
        </div>

    </section>

    

</article>
<?php endif; ?>
<?php endif; ?>

<?php /* ?>
<footer>


        <div id="comments">


            <h3 data-no="7" data-hide="Hide Comments" data-show="Show Comments" class="icon-none closed" id="comments-title">Show Comments (7)</h3>


            <div class="hidden" id="commentsShow" style="display: none;">


                <ol class="commentlist" id="singlecomments">
                    <li class="comment clearfix" id="comment-17">


                        <div class="user"><img width="48" height="48" class="avatar avatar-48 photo" src="http://1.gravatar.com/avatar/1d00148ddcc7da659f96d3d7bdcc2fb7?s=48&amp;d=http%3A%2F%2Fdemo.krownthemes.com%2Fgoodwork%2Fwp-content%2Fthemes%2Fgoodwork%2Fimages%2FcustomGravatar.png%3Fs%3D48&amp;r=G" alt=""></div>

                        <div class="message">

                            <a onclick="return addComment.moveForm( & quot; comment - 17 & quot; , & quot; 17 & quot; , & quot; respond & quot; , & quot; 167 & quot; )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=17#respond" class="comment-reply-link">Reply</a>
                            <div class="info">
                                <h4>Jane Doe</h4>
                                <span class="meta">January 17th, 2013 at 10:22 AM</span>
                            </div>

                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>


                        </div>

                    </li>

                    <!-- #comment-## -->

                    <li class="comment clearfix" id="comment-26">


                        <div class="user"><img width="48" height="48" class="avatar avatar-48 photo avatar-default" src="http://0.gravatar.com/avatar/?d=http://demo.krownthemes.com/goodwork/wp-content/themes/goodwork/images/customGravatar.png&amp;s=48" alt=""></div>

                        <div class="message">

                            <a onclick="return addComment.moveForm( & quot; comment - 26 & quot;
                                    , & quot; 26 & quot;
                                    , & quot; respond & quot;
                                    , & quot; 167 & quot;
                                    )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=26#respond" class="comment-reply-link">Reply</a>
                            <div class="info">
                                <h4>Ruben Bristian</h4>
                                <span class="meta">January 17th, 2013 at 10:29 AM</span>
                            </div>

                            <p>Nunc lectus tortor, tincidunt quis fermentum a, posuere et erat.</p>


                        </div>

                    </li>

                    <!-- #comment-## -->

                    <li class="comment clearfix" id="comment-43">


                        <div class="user"><img width="48" height="48" class="avatar avatar-48 photo avatar-default" src="http://0.gravatar.com/avatar/?d=http://demo.krownthemes.com/goodwork/wp-content/themes/goodwork/images/customGravatar.png&amp;s=48" alt=""></div>

                        <div class="message">

                            <a onclick="return addComment.moveForm( & quot; comment - 43 & quot;
                                    , & quot; 43 & quot;
                                    , & quot; respond & quot;
                                    , & quot; 167 & quot;
                                    )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=43#respond" class="comment-reply-link">Reply</a>
                            <div class="info">
                                <h4>Ruben Bristian</h4>
                                <span class="meta">January 25th, 2013 at 1:45 PM</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>


                        </div>

                    </li>

                    <!-- #comment-## -->

                    <li class="comment clearfix" id="comment-55">


                        <div class="user"><img width="48" height="48" class="avatar avatar-48 photo" src="http://1.gravatar.com/avatar/fbaa6f850641d2f082418d571e33d447?s=48&amp;d=http%3A%2F%2Fdemo.krownthemes.com%2Fgoodwork%2Fwp-content%2Fthemes%2Fgoodwork%2Fimages%2FcustomGravatar.png%3Fs%3D48&amp;r=G" alt=""></div>

                        <div class="message">

                            <a onclick="return addComment.moveForm( & quot; comment - 55 & quot;
                                    , & quot; 55 & quot;
                                    , & quot; respond & quot;
                                    , & quot; 167 & quot;
                                    )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=55#respond" class="comment-reply-link">Reply</a>
                            <div class="info">
                                <h4><a class="url" rel="external nofollow" href="http://rkage.com">Ranjeet</a></h4>
                                <span class="meta">May 24th, 2013 at 12:32 PM</span>
                            </div>

                            <p>Test Comment</p>


                        </div>

                    </li>

                    <!-- #comment-## -->

                    <li class="comment clearfix" id="comment-93">


                        <div class="user"><img width="48" height="48" class="avatar avatar-48 photo" src="http://1.gravatar.com/avatar/b2d7d2d13aed54c2ed7feb538b382b42?s=48&amp;d=http%3A%2F%2Fdemo.krownthemes.com%2Fgoodwork%2Fwp-content%2Fthemes%2Fgoodwork%2Fimages%2FcustomGravatar.png%3Fs%3D48&amp;r=G" alt=""></div>

                        <div class="message">

                            <a onclick="return addComment.moveForm( & quot; comment - 93 & quot;
                                    , & quot; 93 & quot;
                                    , & quot; respond & quot;
                                    , & quot; 167 & quot;
                                    )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=93#respond" class="comment-reply-link">Reply</a>
                            <div class="info">
                                <h4>Spam gone wrong</h4>
                                <span class="meta">June 25th, 2013 at 6:32 AM</span>
                            </div>

                            <p>What a stuff of un-ambiguity and preserveness of precious know-how about unexpected<br>
                                emotions.</p>


                        </div>

                    </li>

                    <ul class="children">

                        <li class="comment clearfix" id="comment-126">


                            <div class="user"><img width="48" height="48" class="avatar avatar-48 photo" src="http://1.gravatar.com/avatar/b2d1d0733207651bf1028ebdb8b700bd?s=48&amp;d=http%3A%2F%2Fdemo.krownthemes.com%2Fgoodwork%2Fwp-content%2Fthemes%2Fgoodwork%2Fimages%2FcustomGravatar.png%3Fs%3D48&amp;r=G" alt=""></div>

                            <div class="message">

                                <a onclick="return addComment.moveForm( & quot; comment - 126 & quot;
                                    , & quot; 126 & quot;
                                    , & quot; respond & quot;
                                    , & quot; 167 & quot;
                                    )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=126#respond" class="comment-reply-link">Reply</a>
                                <div class="info">
                                    <h4><a class="url" rel="external nofollow" href="http://demo.krownthemes.com/goodwork/">Ruben Bristian</a></h4>
                                    <span class="meta">July 15th, 2013 at 2:45 PM</span>
                                </div>

                                <p>And this is how you successfully turn a spam comment into a dummy one!</p>


                            </div>

                        </li>

                        <!-- #comment-## -->
                    </ul><!-- .children -->
                    <!-- #comment-## -->

                    <li class="comment clearfix" id="comment-114">


                        <div class="user"><img width="48" height="48" class="avatar avatar-48 photo" src="http://0.gravatar.com/avatar/40cc87079ea92d3f7359c4a5c521ec79?s=48&amp;d=http%3A%2F%2Fdemo.krownthemes.com%2Fgoodwork%2Fwp-content%2Fthemes%2Fgoodwork%2Fimages%2FcustomGravatar.png%3Fs%3D48&amp;r=G" alt=""></div>

                        <div class="message">

                            <a onclick="return addComment.moveForm( & quot; comment - 114 & quot;
                                    , & quot; 114 & quot;
                                    , & quot; respond & quot;
                                    , & quot; 167 & quot;
                                    )" href="/goodwork/media/here-is-a-gallery-post/?replytocom=114#respond" class="comment-reply-link">Reply</a>
                            <div class="info">
                                <h4>AK Elite</h4>
                                <span class="meta">July 12th, 2013 at 6:23 AM</span>
                            </div>

                            <p>Hi, all is going well here and ofcourse every one is sharing<br>
                                facts, that’s genuinely excellent, keep up writing.</p>


                        </div>

                    </li>

                    <!-- #comment-## -->
                </ol>

                <div class="comment-form-wrapper">

                    <div class="comment-respond" id="respond">
                        <h3 class="comment-reply-title" id="reply-title">Add Your Comment <small><a style="display:none;" href="/goodwork/media/here-is-a-gallery-post/#respond" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small></h3>
                        <form class="comment-form" id="comment-form" method="post" action="http://demo.krownthemes.com/goodwork/wp-comments-post.php"><div id="comment-status"></div>
                            <div class="column_container span4 ffirst"><label for="autor">Name<span>  (required)</span></label><input type="text" value="" name="author" id="author"></div>
                            <div class="column_container span4"><label for="email">Email<span>  (required)</span></label><input type="text" value="" name="email" id="email"></div>
                            <div class="column_container span4 flast"><label for="url">Website<span>  (optional)</span></label><input type="text" value="" name="url" id="url"></div>
                            <div class="column_container span12 ffirst flast"><label for="comment">Your Message<span>  (required)</span></label><textarea rows="8" name="comment" id="comment"></textarea></div>												<p class="form-submit">
                                <input type="submit" value="Submit" id="submit" name="submit">
                                <input type="hidden" id="comment_post_ID" value="167" name="comment_post_ID">
                                <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                            </p>
                        </form>
                    </div><!-- #respond -->

                </div>

            </div>	

        </div>

    </footer>
<?php */ ?>