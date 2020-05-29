<?php
/* Registerar meny */
add_action('init', 'register_my_menu');

function register_my_menu() {
  register_nav_menu('main-nav', __('Huvudmeny') );
}

/* Läser in JavaScript-filen */
function my_theme_scripts_function() {

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script( 'store-js', get_template_directory_uri() . '/js/store.js');
  
  }
  
add_action('wp_enqueue_scripts','my_theme_scripts_function');

/* För logo-bild */
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


?>