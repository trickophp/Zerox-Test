<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

// Include constants
require_once 'inc/constants.php';

/**
 * Register menu in Appearance
 */
function zerox_register_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'zerox_register_menu' );

/**
 * Create custom fields
 */
function zerox_setup_custom_fields()
{
    require_once INC_FOLDER . '/setup-custom-fields.php';
}
add_action( 'acf/init', 'zerox_setup_custom_fields' );

function zerox_enqueue_assets() {
    wp_register_style('main_style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('main_style');

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'zerox_enqueue_assets' );