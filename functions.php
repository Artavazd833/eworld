<?php

function load_style_script(){
    /* CSS */
      wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    /* JS */
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script('init_js', get_template_directory_uri() . '/assets/js/main.js');

}
add_action('wp_enqueue_scripts', 'load_style_script');

function register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer  Menu' )
      )
    );
  }
  add_action( 'init', 'register_menus' );

  ?>