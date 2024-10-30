<?php 
/**
* Plugin Name: Calorie Calculator
* Description: For Using This Plugin you Can Know That How Many calories You burn daily
* Version: 1.0
* Copyright: 2023
* Text Domain: calorie-calculator
*/


if (!defined('ABSPATH')) {
    die('-1');
}


// define for base name
if(!defined('CCFW_BASE_NAME')){
    define('CCFW_BASE_NAME', plugin_basename(__FILE__));
}

// define for plugin file
if(!defined('ccfw_plugin_file')){
    define('ccfw_plugin_file', __FILE__);
}

// define for plugin dir path
if(!defined('CCFW_PLUGIN_DIR')){
    define('CCFW_PLUGIN_DIR',plugins_url('', __FILE__));
}

// Include function files
include_once('inc/ccfw_backend.php');
include_once('inc/ccfw_fronted.php');

function cfw_load_script_style(){
    wp_enqueue_script( 'jquery-calculator', CCFW_PLUGIN_DIR . '/asset/js/ccfw_custom.js', array('jquery'), '2.0');
    wp_enqueue_style( 'jquery-calculator-style', CCFW_PLUGIN_DIR. '/asset/css/ccfw_style.css', '', '3.0' );
}
add_action( 'wp_enqueue_scripts', 'cfw_load_script_style' );

function WPB_load_admin_script(){
    wp_enqueue_script('jquery', false, array(), false, false);
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-alpha', CCFW_PLUGIN_DIR . '/asset/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '3.0.2', true );
    wp_add_inline_script(
        'wp-color-picker-alpha',
        'jQuery( function() { jQuery( ".color-picker" ).wpColorPicker(); } );'
    );
    wp_enqueue_script( 'wp-color-picker-alpha' );
    wp_enqueue_style( 'jquery-admin-style', CCFW_PLUGIN_DIR. '/asset/css/ccfw_admin.css', '', '1.0' );
    wp_enqueue_script( 'jquery-admin-js', CCFW_PLUGIN_DIR. '/asset/js/ccfw_admin.js', '', '1.0' );
}
add_action( 'admin_enqueue_scripts', 'WPB_load_admin_script' );

?>