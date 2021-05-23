<?php

/**
 * @file
 * Theme settings form for Gevezoue theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function gevezoue_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['gevezoue'] = [
    '#type' => 'details',
    '#title' => t('Gevezoue'),
    '#open' => TRUE,
  ];

  $form['gevezoue']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
