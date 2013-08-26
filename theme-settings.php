<?php
// $Id: theme-settings.php,v 1.9.2.3 2013/07/25 01:16:24 sahilbabu Exp $

/**
 * @file
 * Custom theme settings.
 */

/**
 * Add custom theme settings.
 *
 * @param array &$form
 *   The form.
 * @param array &$form_state
 *   The form state.
 *
 * @hook   form_FORM_ID_alter
 * @return void
 */
function al_saif_form_system_theme_settings_alter(array &$form, array &$form_state) {

  $form['social_links'] = array(

    '#type'              => 'fieldset',
    '#title'             => t('Social links'),
    '#description'       => t('Enable or disable links to your accounts in social network services'),
    '#weight'            => -10,

    'theme_social_link_facebook' => array(
      '#type'          => 'textfield',
      '#title'         => t('Facebook business page'),
      '#default_value' => theme_get_setting('theme_social_link_facebook'),
      '#description'   => t('Name of your Facebook business page'),
    ),

    'theme_social_link_twitter' => array(
      '#type'          => 'textfield',
      '#title'         => t('Twitter account'),
      '#default_value' => theme_get_setting('theme_social_link_twitter'),
      '#description'   => t('Name of your Twitter account'),
    ),
      
    'theme_social_link_google' => array(
      '#type'          => 'textfield',
      '#title'         => t('Google Plus account'),
      '#default_value' => theme_get_setting('theme_social_link_google'),
      '#description'   => t('Name of your Google Plus account'),
    ),
    'theme_social_link_behance' => array(
      '#type'          => 'textfield',
      '#title'         => t('Behance account'),
      '#default_value' => theme_get_setting('theme_social_link_behance'),
      '#description'   => t('Name of your Behance account'),
    ),
    'theme_social_link_linkedin' => array(
      '#type'          => 'textfield',
      '#title'         => t('Linkedin account'),
      '#default_value' => theme_get_setting('theme_social_link_linkedin'),
      '#description'   => t('Name of your Linkedin account'),
    ),
    'theme_social_link_rss' => array(
      '#type'          => 'textfield',
      '#title'         => t('RSS Feeds Link '),
      '#default_value' => theme_get_setting('theme_social_link_rss'),
      '#description'   => t('Name of your site RSS Feeds Link'),
    ),
    'theme_contact_mail' => array(
      '#type'          => 'textfield',
      '#title'         => t('Contact Email Adress'),
      '#default_value' => theme_get_setting('theme_contact_mail'),
      '#description'   => t('your Contact Email Adress'),
    ),
    'theme_contact_phone' => array(
      '#type'          => 'textfield',
      '#title'         => t('Contact Phone Number'),
      '#default_value' => theme_get_setting('theme_contact_phone'),
      '#description'   => t('your Contact Phone Number'),
    ),

  );
}
