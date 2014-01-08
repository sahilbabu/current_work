<?php
// $Id: template.php,v 1.9.2.3 2013/07/25 01:16:24 sahilbabu Exp $

/**
 * @file
 * Theme functions.
 */
require 'preprocess.inc';

/**
 * Alter HTML head.
 *
 * @param array &$head_elements
 *   Head elements.
 *
 * @hook   html_head_alter
 */
function al_saif_html_head_alter(array &$head_elements) {

    $head_elements['system_meta_content_type']['#attributes'] = array(
        'charset' => 'utf-8'
    );

    $head_elements['al_saif_content_script_type'] = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'http-equiv' => 'Content-Script-Type',
            'content' => 'text/javascript',
        ),
        '#weight' => -1000,
    );

    $head_elements['al_saif_content_style_type'] = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'http-equiv' => 'Content-Style-Type',
            'content' => 'text/css',
        ),
        '#weight' => -1000,
    );

    $head_elements['al_saif_content_ie_compatibility9'] = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'http-equiv' => 'X-UA-Compatible',
            'content' => 'IE=9',
        ),
        '#weight' => -1000,
    );

    $head_elements['al_saif_content_ie_compatibility8'] = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'http-equiv' => 'X-UA-Compatible',
            'content' => 'IE=8',
        ),
        '#weight' => -900,
    );
}

/**
 * Implementats hook_theme().
 * This function provides a one-stop reference for all overriden and custom theme functions.
 *
 * @param array &$existing
 *   An array of existing implementations that may be used for override purposes.
 * @param string $type
 *   What 'type' is being processed: module, base_theme_engine, theme_engine, base_theme, theme.
 * @param string $theme
 *   The actual name of theme that is being being checked (mostly only useful for theme engine).
 * @param string $path
 *   The directory path of the theme or module, so that it doesn't need to be looked up.
 *
 * @hook   theme
 * @return array
 */
function al_saif_theme(array &$existing, $type, $theme, $path) {
    return array(
        // theme wrapper for the main menu
        'menu_tree__main_menu' => array(
            'file' => 'templates/theme.inc',
            'render element' => 'tree',
        ),
        // custom theme function for breadcrumbs
        'breadcrumb' => array(
            'file' => 'templates/theme.inc',
        ),
        // taxonomy tags
        'field__taxonomy_term_reference' => array(
            'file' => 'templates/theme.inc',
        ),
        // popup boxes
        'popup_box' => array(
            'file' => 'templates/theme.inc',
            'render element' => 'popup',
        ),
        // buttons
        'button' => array(
            'file' => 'templates/theme.inc',
            'render element' => 'element',
        ),
        // input with type=password
        'password' => array(
            'file' => 'templates/theme.inc',
            'render element' => 'element',
        ),
        // Drupal pagers
        'pager' => array(
            'file' => 'templates/theme.inc',
        ),
        // popup status messages
        'status_messages' => array(
            'file' => 'templates/theme.inc',
        ),
        // sort indicator for tables
        'user_login' => array(
            'render element' => 'form',
            'path' => drupal_get_path('theme', 'al_saif') . '/templates',
            'template' => 'user-login',
            'preprocess functions' => array(
                'al_saif_preprocess_user_login'
            )
        ),
    );
}

//function al_saif_menu_link(array $variables) {
//  $element = $variables['element'];
//  $sub_menu = '';
//   print "<pre/>"; print_r($element); exit('</pre> (o)(o)');
//  $element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
//  if (
//
//  $element['#below']) {
//    $sub_menu = drupal_render($element['#below']);
//  }
//  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
//}

/**
 * Adds account links to a page.
 *
 * @param array &$page
 *   Structured array defining the page.
 */
function al_saif_page_alter(array &$page) {
    global $user;

    // Remove left sidebar
    if ('store' === arg(0) && isset($page['sidebar_first']) && in_array(arg(1), array('cart', 'checkout', 'product', 'checkoutPayment'))) {
        unset($page['sidebar_first']);
    }

    // Render the account links
    $disabled_popup = 'user' === arg(0) || !empty($user->uid);

    if (!empty($user->uid)) {
        $page['account_links'] = array(
            'greeting-message' => array(
                '#markup' => '<span class="greeting-message"><span>' . t('Hello') . ',</span> ' . check_plain($user->name) . '</span>',
            ),
            'account-links' => array(
                '#theme' => 'links__account_links',
                '#attributes' => array(
                    'class' => array('account-links'),
                ),
                '#links' => array(
                    'account-link-1' => array(
                        'href' => 'user',
                        'title' => t('My account'),
                        'attributes' => array('class' => array('account')),
                    ),
                    'account-link-2' => array(
                        'href' => 'user/logout',
                        'title' => t('Log out'),
                        'attributes' => array('class' => array('log-in')),
                    ),
                ),
            ),
        );
    } else {
        $attributes = $disabled_popup ? array() : array('onclick' => 'javascript: lc3_clean_popup_div("login-popup-box", true); return false;');

        $page['account_links'] = array(
            'account-links' => array(
                '#theme' => 'links__account_links',
                '#attributes' => array(
                    'class' => array('account-links'),
                ),
                '#links' => array(
                    'account-link-1' => array(
                        'href' => 'user',
                        'title' => t('Log in'),
                        'attributes' => $attributes + array('class' => array('log-in')),
                    ),
                    'account-link-2' => array(
                        'href' => 'user/register',
                        'title' => t('Register'),
                        'attributes' => array('class' => array('register')),
                    ),
                ),
            ),
        );
    }

    // Render popup forms
    if (!$disabled_popup) {
        module_load_include('inc', 'user', 'user.pages');

        $page['page_bottom']['blockui-popups'] = array(
            'login-popup' => array(
                '#theme_wrappers' => array('popup_box'),
                '#id' => 'login-popup-box',
                '#subject' => t('User login'),
                'form' => drupal_get_form('user_login', TRUE),
            ),
            'recovery-password-popup' => array(
                '#theme_wrappers' => array('popup_box'),
                '#id' => 'password-popup-box',
                '#subject' => t('Request new password'),
                'form' => drupal_get_form('user_pass'),
            ),
        );

        $page['page_bottom']['blockui-popups']['login-popup']['form']['#action'] = url(
                'user', array('query' => drupal_get_destination())
        );
        $page['page_bottom']['blockui-popups']['recovery-password-popup']['form']['#action'] = url(
                'user/password', array('query' => drupal_get_destination())
        );
    }

    // IE8 compatibility mode
    header('X-UA-Compatible: IE=8');
}

/**
 * Alter the 'user-login' form.
 *
 * @param array &$form
 *   Nested array of form elements that comprise the form.
 * @param array &$form_state
 *    A keyed array containing the current state of the form.
 * @param string $form_id
 *   String representing the name of the form itself.
 *
 * @hook   form_FORM_ID_alter
 *
 * @see hook_form_alter()
 * @see drupal_prepare_form()
 */
function al_saif_form_user_login_alter(array &$form, array &$form_state, $form_id) {

    // Check whether the form is to be displayed in a popup layer
    if ('user' !== arg(0)) {

        // Make the login button larger
        $form['actions']['submit']['#attributes']['class'][] = 'action';

        //Display the button right below the form fields
        $form['actions']['#weight'] = 0.5;

        // Shorten the OpenID field title
        if (isset($form['openid_identifier']['#title'])) {
            $form['openid_identifier']['#title'] = t('OpenID');
        }

        // Add the "recover password" link
        $attributes = array(
            'title' => t('Request new password via e-mail.'),
            'onclick' => "javascript: lc3_clean_popup_div('password-popup-box'); return false;",
        );

        $form['account-links'] = array(
            '#weight' => 2,
            '#theme' => 'item_list',
            '#items' => array(
                array(
                    'data' => l(t('Forgot password?'), 'user/password', array('attributes' => $attributes)),
                    'class' => array('restore-password'),
                ),
            ),
            '#attributes' => array(
                'class' => array('user-account'),
            ),
        );
    }
}

/**
 * Alter the 'user-pass' form.
 *
 * @param array &$form
 *   Nested array of form elements that comprise the form.
 * @param array &$form_state
 *   A keyed array containing the current state of the form.
 * @param string $form_id
 *   String representing the name of the form itself.
 *
 * @hook   form_FORM_ID_alter
 *
 * @see hook_form_alter()
 * @see drupal_prepare_form()
 */
function al_saif_form_user_pass_alter(array &$form, array &$form_state, $form_id) {

    // Make the login button larger
    $form['actions']['submit']['#attributes']['class'][] = 'action';

    // Shorten the label
    $form['name']['#title'] = t('Username or e-mail');
}

/**
 * Alter the 'user-profile' form.
 *
 * @param array &$form
 *   Nested array of form elements that comprise the form.
 * @param array &$form_state
 *   A keyed array containing the current state of the form.
 * @param string $form_id
 *   String representing the name of the form itself.
 *
 * @hook   form_FORM_ID_alter
 *
 * @see hook_form_alter()
 * @see drupal_prepare_form()
 */
function al_saif_form_user_profile_form_alter(array &$form, array &$form_state, $form_id) {

    if (isset($form['picture'])) {
        if (!isset($form['picture']['#attributes'])) {
            $form['picture']['#attributes'] = array();
        }

        if (!isset($form['picture']['#attributes']['class'])) {
            $form['picture']['#attributes']['class'] = array('picture-block');
        } else {
            $form['picture']['#attributes']['class'][] = ' picture-block';
        }
    }

    if (!isset($form['actions']['#attributes'])) {
        $form['actions']['#attributes'] = array();
    }

    if (!isset($form['actions']['#attributes']['class'])) {
        $form['actions']['#attributes']['class'] = array();
    }

    $form['actions']['#attributes']['class'][] = 'buttons-box';
    $form['actions']['#attributes']['class'][] = 'floatable-box';

    if (!isset($form['actions']['submit']['#attributes'])) {
        $form['actions']['submit']['#attributes'] = array();
    }

    if (!isset($form['actions']['submit']['#attributes']['class'])) {
        $form['actions']['submit']['#attributes']['class'] = array();
    }

    $form['actions']['submit']['#attributes']['class'][] = 'action';
}

/**
 * Hook for altering any form.
 *
 * @param array &$form
 *   Nested array of form elements that comprise the form.
 * @param array &$form_state
 *   A keyed array containing the current state of the form.
 * @param string $form_id
 *   String representing the name of the form itself.
 *
 * @hook   form_alter
 *
 * @see hook_form_alter()
 * @see drupal_prepare_form()
 */
function al_saif_form_alter(array &$form, array &$form_state, $form_id) {
    global $user;

    // Alter comment forms when the user is logged in
    if (preg_match('/^comment_node_([\w\d_]+)_form$/', $form_id, $matches) && $user->uid) {

        // Add an extra class to comment forms
        $form['#attributes']['class'][] = 'comment-form-is-logged';

        // Add ":" to the name label
        $form['author']['_author']['#title'] .= ': ';
    }
}

/**
 * Preprocess block.
 *
 * @param array &$vars
 *   Array of variables.
 *
 * @hook   preprocess_block
 */
function al_saif_preprocess_block(array &$vars) {
    if (!$vars['block']->title) {
        $vars['classes_array'][] = 'block-without-title';
    }
}

function al_saif_preprocess_user_login(&$vars) {
    $vars['intro_text'] = t('This is my awesome login form');
    //print_r($vars);
    //alter the login form here
}

function al_saif_preprocess_user_register_form(&$vars) {
    $vars['intro_text'] = t('This is my super awesome reg form');
//  alter the reset password form here
}

/* custom function area */

function al_saif_get_blog() {

    $blog_data = query_get_blog_items();

    print "<pre>";
    print_r($blog_data);
    die('----');
    foreach ($node as $item) {
        
    }
}

function query_get_blog_items() {
    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'node')
            ->entityCondition('bundle', 'blog')
            ->propertyCondition('status', 1)
            // ->fieldCondition('field_news_types', 'value', 'spotlight', '=')
            // ->fieldCondition('field_photo', 'fid', 'NULL', '!=')
            // ->fieldCondition('field_faculty_tag', 'tid', $value)
            //  ->fieldCondition('field_news_publishdate', 'value', $year . '%', 'like')
            //  ->fieldOrderBy('field_photo', 'fid', 'DESC')
            ->range(0, 10)
            ->addMetaData('account', user_load(1)); // Run the query as user 1.
    $result = $query->execute();
    $node = (isset($result['node'])) ? $result['node'] : array();
    $items_nids = array_keys($node);
    $blog_items = entity_load('node', $items_nids);
    return $blog_items;
}



function al_saif_view_blog($node = false, $view = 'classic', $theme_path = '') {

    if (!$artist_url) {
        $artist_url = jgm_build_url(array("title" => $v['node_title']), 'profileartist');
        //'/artist/'.urlsafe().'/pa'.$v['nid'].'/podcast/'.urlsafe($v['podcast_title']);
    }
    switch ($view) {
        case "grid":
            ?>
            

            <?php
            break;

        case "list":
            ?>
           
          
            <?php
            break;
    }
}
