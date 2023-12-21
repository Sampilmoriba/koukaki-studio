<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  // Enqueue child theme style
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', array('parent-style'), wp_get_theme()->get('Version'));

  // Enqueue custom scroll script
    wp_enqueue_script('custom-scroll', get_stylesheet_directory_uri() . '/js/scroll.js', array('jquery'), '0.1', true);


}

