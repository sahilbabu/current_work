<?php

// $Id: preprocess.inc,v 1.9.2.3 2013/07/25 01:16:24 sahilbabu Exp $

/**
 * @file
 * Preprocess functions.
 */

/**
 * Preprocess function for html.tpl.php
 *
 * @param array $vars
 *   Array of variables.
 */
function al_saif_preprocess_html(array &$vars) {
    $item = menu_get_item();
    unset($vars['classes_array']);
    $vars['classes_array'][] = 'vc_responsive';
    $vars['classes_array'][] = 'page';
   // if (isset($item['path']) && $item['path'] == 'blog' && !drupal_is_front_page()) {
    if (!drupal_is_front_page()) {
        $vars['classes_array'][] = 'right-sidebar';
    }
    // print "<pre>"; print_r($shoo[$key]['body']['#object']->type); exit('======');
    // Add conditional stylesheets for IE
//  drupal_add_css(
//    drupal_get_path('theme', 'lc3_clean') . '/css/ie.css',
//    array(
//      'group'      => CSS_THEME,
//      'browsers'   => array('IE' => 'lte IE 7', '!IE' => FALSE),
//      'preprocess' => FALSE,
//    )
//  );
    // Add jquery.blockUI.js (should be in directory sites/all/libraries)
//  if (file_exists(path_to_theme() . '/js/jquery.blockUI.js')) {
//    // Added for backward compatibility
//    drupal_add_js(path_to_theme() . '/js/jquery.blockUI.js');
//  }
//  elseif (function_exists('libraries_get_path')) {
//    drupal_add_js(libraries_get_path('jquery.blockUI.js'));
//  }
    // Add a special CSS class to the page when there no breadcrumb is going to be displayed
//    if (2 > count(drupal_get_breadcrumb())) {
//        $vars['classes_array'][] = 'no-breadcrumbs';
//    }
}

/**
 * Add conditional JavaScript for IE.
 *
 * @param array $vars
 *   Array of variables.
 */
function al_saif_process_html(array &$vars) {

    $vars['scripts'] .= '<!--[if lt IE 9]><script src="' . base_path() . path_to_theme() . '/js/html5.js"></script><![endif]-->' . "\n";
}

/**
 * Preprocess function for page.tpl.php
 *
 * @param array $vars
 *   Array of variables.
 */
function al_saif_preprocess_page(array &$vars) {
   // $shoo = $vars['page']['content']['system_main']['nodes'];
   // $key = key($shoo);
   // $type = $shoo[$key]['body']['#object']->type;
   // $view_mode = $shoo[$key]['body']['#view_mode'];
   // $vars['type'] = $type;
   // $vars['view_mode'] = $view_mode;
    if (!drupal_is_front_page()) {
        $vars['blog_data'][] = al_saif_get_blog();
    }
    

    //  print "<pre>"; print_r($vars); exit('======');
    // Render social links
    $twitter = check_plain(theme_get_setting('theme_social_link_twitter'));
    $facebook = check_plain(theme_get_setting('theme_social_link_facebook'));
    $google_plus = check_plain(theme_get_setting('theme_social_link_google'));
    $behance = check_plain(theme_get_setting('theme_social_link_behance'));
    $linkedin = check_plain(theme_get_setting('theme_social_link_linkedin'));
    $rss_url = check_plain(theme_get_setting('theme_social_link_rss'));
    $contact_mail = check_plain(theme_get_setting('theme_contact_mail'));
    $contact_phone = check_plain(theme_get_setting('theme_contact_phone'));

    $vars['twitter'] = $twitter ? 'http://www.twitter.com/#!/' . $twitter : '';
    $vars['facebook'] = $facebook ? 'http://www.facebook.com/' . $facebook : '';
    $vars['google_plus'] = $google_plus ? 'https://plus.google.com/' . $google_plus : '';
    $vars['behance'] = $behance ? 'http://www.behance.net/' . $behance : '';
    $vars['linkedin'] = $linkedin ? $linkedin : '';
    $vars['rss_url'] = $rss_url ? base_path() . $rss_url : '';
    $vars['contact_mail'] = $contact_mail ? $contact_mail : '';
    $vars['contact_phone'] = $contact_phone ? $contact_phone : '';

    // Viewport for mobile devices.
    drupal_add_html_head(
            array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'author',
            'content' => 'www.alsaifprofessionals.com',
        )
            ), 'viewport');
    // Viewport for mobile devices.
    drupal_add_html_head(
            array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no',
        )
            ), 'viewport');
    // Viewport for mobile devices
    drupal_add_html_head(
            array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'format-detection',
            'content' => 'telephone=no',
        )
            ), 'viewport');
// ------------------------------------------------------------------------------------------------//
// $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    // $main_menu_tree =   menu_tree_all_data('main-menu');
    // $menu =    menu_tree_output($main_menu_tree);
    // $tree = menu_tree_all_data('main-menu');
    //     menu_tree_add_active_path($tree);
    // print drupal_render(menu_tree_output($tree)); exit('%%%%%%');
    //print "<pre/>"; print_r($menu); exit('</pre> (o)(o)');
// ------------------------------------------------------------------------------------------------//
    // Render the main menu
    if ($vars['main_menu'] && ($pid = menu_tree_all_data('main-menu'))) {
        $vars['main_menu']['header'] = array(
            '#markup' => '<p class="responsive">' . t('Main Navigation') . '</p>',
        );

        //  print "<pre/>"; print_r(menu_tree($pid)); exit('</pre> (o)(o)');
        $vars['main_menu']['tree'] = main_menu_classes_alter($pid);
        $vars['main_menu']['tree']['#attributes'] = array(
            'id' => 'main-menu',
            'class' => 'clearfix',
        );
    }

    // Add a hidden title for accessibility reasons
//  if ($vars['page']['search']) {
//    $vars['page']['search'] = array_merge(
//      array(
//        'header' => array('#markup' => '<h2 class="element-invisible">' . t('Search') . '</h2>'),
//      ),
//      $vars['page']['search']
//    );
//  }
}

function main_menu_classes_alter($menu_name) {
    return menu_tree_output_alter($menu_name);
}

function menu_tree_output_alter($tree) {
    $build = array();
    $items = array();
    // Pull out just the menu links we are going to render so that we
    // get an accurate count for the first/last classes.
    foreach ($tree as $data) {
        if ($data['link']['access'] && !$data['link']['hidden']) {
            $items[] = $data;
        }
    }
    // print "<pre/>"; print_r($tree); exit('</pre> (o)(o)'); 
    $router_item = menu_get_item();

    $num_items = count($items);
    $plid = 0;
    foreach ($items as $i => $data) {

        $class = array();
        if ($i == 0) {
            $class[] = 'first';
        }
        if ($i == $num_items - 1) {
            $class[] = 'last';
        }
        // Set a class for the <li>-tag. Since $data['below'] may contain local
        // tasks, only set 'expanded' class if the link also has children within
        // the current menu.
        if ($data['link']['has_children'] && $data['below']) {
            $class[] = 'expanded-main';
        } elseif ($data['link']['has_children']) {
            $class[] = 'collapsed-main';
        } else {
            $class[] = 'menu-item';
        }
        if ($data['link']['depth'] == 1) {
            $class[] = 'parent';
        }
        if ($_GET['q'] == $data['link']['link_path']) {
            $class[] = 'selected';
            // $mlid = $data['link']['mlid'];
            //  $plid = $data['link']['plid'];
        }
//        if($data['link']['mlid'] == $plid){
//             $class[] = 'selected';
//        }
        // Set a class if the link is in the active trail.
        if ($data['link']['in_active_trail']) {
            $class[] = 'active-trail';
            $data['link']['localized_options']['attributes']['class'][] = 'active-trail';
        }

        // Allow menu-specific theme overrides.
        $element['#theme'] = 'menu_link__' . strtr($data['link']['menu_name'], '-', '_');
        $element['#attributes']['class'] = $class;
        $element['#title'] = $data['link']['title'];
        $element['#href'] = $data['link']['href'];
        $element['#localized_options'] = !empty($data['link']['localized_options']) ? $data['link']['localized_options'] : array();
        $element['#below'] = $data['below'] ? menu_tree_output_alter($data['below']) : $data['below'];
        $element['#original_link'] = $data['link'];
        // Index using the link's unique mlid.
        $build[$data['link']['mlid']] = $element;
    }
    if ($build) {
        // Make sure drupal_render() does not re-order the links.
        $build['#sorted'] = TRUE;
        // Add the theme wrapper for outer markup.
        // Allow menu-specific theme overrides.
        $build['#theme_wrappers'][] = 'menu_tree__' . strtr($data['link']['menu_name'], '-', '_');
    }

    return $build;
}

/**
 * Preprocess function for node.tpl.php
 *
 * @param array $vars
 *   Array of variables.
 */
function al_saif_preprocess_node(array &$vars) {
    // var_dump($vars); die('----');
    // Display only the first uploaded image in teasers
    if (!empty($vars['teaser']) && isset($vars['content']['field_image'])) {
        $vars['content']['field_image']['#items'] = array($vars['content']['field_image'][0]);
    }

    // Reorder and rename node links
    if (!empty($vars['teaser'])) {
        // Move "Read more" link to the end of the list
        if (isset($vars['content']['links']['node'])) {
            $node = $vars['content']['links']['node'];
            unset($vars['content']['links']['node']);
            $vars['content']['links']['node'] = $node;
        }
    }

    // Render the comment count as a link.
    // NOTE: do not change "!=" to the "!==" operator:
    // it's compared string and integer values here
    if (defined('COMMENT_NODE_CLOSED') && COMMENT_NODE_CLOSED != $vars['node']->comment) {
        $vars['linked_comment_count'] = (isset($vars['comment_count'])) ? l(
                        format_plural(
                                $vars['comment_count'], '1<span> comment</span>', '@count<span> comments</span>'
                        ), 'node/' . $vars['node']->nid, array(
                    'html' => TRUE,
                    'attributes' => array(
                        'title' => format_plural($vars['comment_count'], '1 comment', '@count comments'),
                        'class' => array('comment-count'),
                    ),
                        ), '#comments'
                ) : '';
    } else {
        $vars['linked_comment_count'] = '';
    }

    $comment_location = variable_get('comment_form_location_' . $vars['node']->type, COMMENT_FORM_BELOW);

    // Link "Add new comment" to the form on the node page
    if (isset($vars['content']['links']['comment']['#links']['comment-add']) && COMMENT_FORM_SEPARATE_PAGE !== $comment_location) {

        if (!empty($vars['node']->teaser)) {
            $vars['content']['links']['comment']['#links']['comment-add']['href'] = drupal_lookup_path('alias', 'node/' . $vars['node']->nid);
        } elseif ('forum' !== $vars['node']->type) {
            // Remove the link if it is the node page
            unset($vars['content']['links']['comment']['#links']['comment-add']);
        }
    }
    // SAHIL BABU //
    if ('blog' == $vars['node']->type) {
        // var_dump($vars['content']);
        // print "<pre>"; print_r($vars); die("</pre>"); 
        $vars['blog_category'] = (isset($vars['field_category'])) ? (isset($vars['field_category']['und'])) ? $vars['field_category']['und'] : $vars['field_category']  : array();
        $vars['blog_image'] = (isset($vars['field_image'])) ? (isset($vars['field_image']['und'])) ? $vars['field_image']['und'] : $vars['field_image']  : array();
        $vars['date'] = date("jS F Y", $vars['node']->created);
        if ('full' == $vars['view_mode']) {
            //  $vars['content'] = $vars['content']['body']['#object']->body['und'][0]['value'];
        }
        //  var_dump($vars['date']);
    }
    // Forum nodes
    if ('forum' == $vars['node']->type) {

        $vars['classes_array'][] = 'forum-post';
        $vars['classes_array'][] = 'forum-top';
        $vars['classes_array'][] = 'comment';

        $vars['submitted'] = '<span>' . t('Posted:') . '</span> ' . format_date($vars['node']->created, 'custom', 'M j, Y, H:i');

        if (isset($vars['content']['links']['comment']['#links']['comment-add'])) {
            $vars['content']['links']['comment']['#links']['comment-add']['title'] = t('Reply');
        }
    } else {
        // Render the submission date in a custom format
        $vars['submitted'] = t(
                'Submitted by !username on !datetime', array(
            '!username' => $vars['name'],
            '!datetime' => format_date($vars['node']->created, 'custom', 'M j, Y &\n\d\a\s\h; H:i'),
                )
        );
    }
//    print '<pre> node --- '; print_r($vars); exit('</pre>');
}

/**
 * Preprocess function for comment.tpl.php
 *
 * @param array $vars
 *   Array of variables.
 */
function al_saif_preprocess_comment(array &$vars) {
    $vars['title_attributes_array']['class'][] = 'subject';
    $vars['title'] = variable_get('comment_subject_field_' . $vars['node']->type, 1) ? $vars['comment']->subject : '';

    if (!$vars['title']) {
        $vars['classes_array'][] = 'comment-no-subject';
    }

    $uri = entity_uri('comment', $vars['comment']);
    $uri['options'] += array('attributes' => array('class' => 'permalink', 'rel' => 'bookmark'));
    $vars['permalink'] = l(t('#'), $uri['path'], $uri['options']);

    $vars['submitted'] = '<span>' . t('Posted:') . '</span> ' . format_date($vars['comment']->created, 'custom', 'M j, Y, H:i');
}

/**
 * Preprocess forum topic list.
 *
 * @param array $vars
 *   Array of variables.
 */
function al_saif_preprocess_forum_topic_list(array &$vars) {

    // Remove the first "icon" column header because now icons are inside the title column

    global $forum_topic_list_header;

    $forum_topic_list_header = array(
        array('data' => t('Topic'), 'field' => 'n.title'),
        array('data' => t('Replies'), 'field' => 'l.comment_count'),
        array('data' => t('Last reply'), 'field' => 'l.last_comment_timestamp'),
    );

    $ts = tablesort_init($forum_topic_list_header);
    $header = '';

    foreach ($forum_topic_list_header as $cell) {
        $cell = tablesort_header($cell, $forum_topic_list_header, $ts);
        $header .= _theme_table_cell($cell, TRUE);
    }

    $vars['header'] = $header;

    // Display topic creation dates differently
    if (!empty($vars['topics'])) {
        $row = 0;

        foreach ($vars['topics'] as $id => $topic) {
            $created = isset($topic->created) ? format_interval(REQUEST_TIME - $topic->created) : '';
            $user = user_load($vars['topics'][$id]->uid);

            $vars['topics'][$id]->created = t(
                    'Created !date by !user', array(
                '!date' => '<span class="submitted-date">' . $created . '</span> ago',
                '!user' => l($user->name, drupal_lookup_path('alias', 'user' . $user->uid)),
                    )
            );
        }
    }
}
