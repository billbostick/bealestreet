<?php
// $Id: template.php,v 1.3 2007/09/11 16:45:36 roopletheme Exp $
// www.roopletheme.com

if (is_null(theme_get_setting('bealestreet_style'))) {
  global $theme_key;
  // Save default theme settings
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
    'bealestreet_suckerfish' => 0,
  );

  variable_set(
    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
    array_merge(theme_get_settings($theme_key), $defaults)
  );
  // Force refresh of Drupal internals
  theme_get_setting('', TRUE);
}

function bealestreet_regions() {
  return array(
     'sidebar_left' => t('left sidebar'),
     'sidebar_right' => t('right sidebar'),
     'content_top' => t('content top'),
     'content_bottom' => t('content bottom'),
     'header' => t('header'),
     'banner' => t('banner'),
	   'suckerfish_menu' => t('suckerfish menu'),
	   'user1' => t('user1'),
	   'user2' => t('user2'),
	   'user3' => t('user3'),
	   'user4' => t('user4'),
	   'user5' => t('user5'),
	   'user6' => t('user6'),
	   'user7' => t('user7'),
	   'user8' => t('user8'),
	   'user9' => t('user9'),
	   'user10' => t('user10'),
	   'user11' => t('user11'),
	   'user12' => t('user12'),
     'footer' => t('footer')
  );
} 
 
$style = theme_get_setting('bealestreet_style');
if (!$style)
{
   $style = 'blue';
}

if (isset($_COOKIE["bealestyle"])) {
   $style = $_COOKIE["bealestyle"];
}

drupal_add_css(drupal_get_path('theme', 'bealestreet') . '/css/' . $style . '.css', 'theme');

if (theme_get_setting('bealestreet_suckerfish')) {
   drupal_add_js(drupal_get_path('theme', 'bealestreet') . '/js/suckerfish.js', 'theme');
   drupal_add_css(drupal_get_path('theme', 'bealestreet') . '/css/suckerfish_'  . $style . '.css', 'theme');
}

if (theme_get_setting('bealestreet_iepngfix')) {
   drupal_add_js(drupal_get_path('theme', 'bealestreet') . '/js/jquery.pngFix.js', 'theme');
}


if (theme_get_setting('bealestreet_themelogo'))
{
   function _phptemplate_variables($hook, $variables = array()) {
     $variables['logo'] = drupal_get_path('theme', 'bealestreet') . '/images/' . theme_get_setting('bealestreet_style') . '/logo.png';
     return $variables;
   }
}

if (theme_get_setting('bealestreet_uselocalcontent'))
{
   $local_content = drupal_get_path('theme', 'bealestreet') . '/' . theme_get_setting('bealestreet_localcontentfile');
	 if (file_exists($local_content)) {
	    drupal_add_css($local_content, 'theme');
	 }
}



