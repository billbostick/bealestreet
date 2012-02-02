<?php
// $Id: settings.php,v 1.3 2007/09/11 16:45:36 roopletheme Exp $
// www.roopletheme.com

function phptemplate_settings($saved_settings) {

  $settings = theme_get_settings('bealestreet');

  $defaults = array(
    'bealestreet_style' => 0,
    'bealestreet_width' => 0,
    'bealestreet_fixedwidth' => '850',
    'bealestreet_fontfamily' => 0,
    'bealestreet_customfont' => '',
    'bealestreet_uselocalcontent' => '0',
    'bealestreet_localcontentfile' => '',
    'bealestreet_breadcrumb' => 0,
    'bealestreet_iepngfix' => 0,
    'bealestreet_themelogo' => 0,
    'bealestreet_leftsidebarwidth' => '210',
    'bealestreet_rightsidebarwidth' => '210',
    'bealestreet_suckerfish' => 0,
  );

  $settings = array_merge($defaults, $settings);

  $form['bealestreet_style'] = array(
    '#type' => 'select',
    '#title' => t('Style'),
    '#default_value' => $settings['bealestreet_style'],
    '#options' => array(
      'blue' => t('Blue'),
      'orange' => t('Orange'),
      'green' => t('Green'),
      'red' => t('Red'),
    ),
  );

  $form['bealestreet_themelogo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Themed Logo'),
    '#default_value' => $settings['bealestreet_themelogo'],
  );

  $form['bealestreet_width'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Fixed Width'),
    '#default_value' => $settings['bealestreet_width'],
  );

  $form['bealestreet_fixedwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Fixed Width Size'),
    '#default_value' => $settings['bealestreet_fixedwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['bealestreet_fontfamily'] = array(
    '#type' => 'select',
    '#title' => t('Font Family'),
    '#default_value' => $settings['bealestreet_fontfamily'],
    '#options' => array(
     'Arial, Verdana, sans-serif' => t('Arial, Verdana, sans-serif'),
     '"Arial Narrow", Arial, Helvetica, sans-serif' => t('"Arial Narrow", Arial, Helvetica, sans-serif'),
     '"Times New Roman", Times, serif' => t('"Times New Roman", Times, serif'),
     '"Lucida Sans", Verdana, Arial, sans-serif' => t('"Lucida Sans", Verdana, Arial, sans-serif'),
     '"Lucida Grande", Verdana, sans-serif' => t('"Lucida Grande", Verdana, sans-serif'),
     'Tahoma, Verdana, Arial, Helvetica, sans-serif' => t('Tahoma, Verdana, Arial, Helvetica, sans-serif'),
     'Georgia, "Times New Roman", Times, serif' => t('Georgia, "Times New Roman", Times, serif'),
     'Custom' => t('Custom (specify below)'),
    ),
  );

  $form['bealestreet_customfont'] = array(
    '#type' => 'textfield',
    '#title' => t('Custom Font-Family Setting'),
    '#default_value' => $settings['bealestreet_customfont'],
    '#size' => 40,
    '#maxlength' => 75,
  );

  $form['bealestreet_uselocalcontent'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include Local Content File'),
    '#default_value' => $settings['bealestreet_uselocalcontent'],
  );

  $form['bealestreet_localcontentfile'] = array(
    '#type' => 'textfield',
    '#title' => t('Local Content File Name'),
    '#default_value' => $settings['bealestreet_localcontentfile'],
    '#size' => 40,
    '#maxlength' => 75,
  );

  $form['bealestreet_breadcrumb'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Breadcrumbs'),
    '#default_value' => $settings['bealestreet_breadcrumb'],
  );

  $form['bealestreet_iepngfix'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use IE PNG Fix'),
    '#default_value' => $settings['bealestreet_iepngfix'],
  );

  $form['bealestreet_leftsidebarwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Left Sidebar Width'),
    '#default_value' => $settings['bealestreet_leftsidebarwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['bealestreet_rightsidebarwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Right Sidebar Width'),
    '#default_value' => $settings['bealestreet_rightsidebarwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['bealestreet_suckerfish'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Suckerfish Menus'),
    '#default_value' => $settings['bealestreet_suckerfish'],
  );

  return $form;
}


