<?php 

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('custom-logo');


add_action('wp_enqueue_scripts', 'ct_scripts');
function ct_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('ct_scripts', get_theme_file_uri('./dist/index.bundled.js'), array(), '1.0', true);
  wp_enqueue_style('ct_styles', get_theme_file_uri('./dist/index.css'));
}

add_action('after_setup_theme', 'ct_register_menus');
function ct_register_menus() {
  register_nav_menus(array(
    'main_menu' => 'Main Menu',
  ));
}