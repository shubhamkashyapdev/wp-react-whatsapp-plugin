<?php

/** 
 * Plugin Name: Wp React WhatsApp
 * Author Md: Shubham Kashyap
 * Author URI: https://github.com/shubhamwebdesign
 * Version: 1.0.0
 * Description: WordPress WhatsApp Chat Button - adding additional functionality to the normal whatsapp chat button - like pages - include/exclude with good UI and avalability timing for the plugin - visible/not-visible, custom button styles - with shortcodes etc.
 * Text-Domain: wp-react-whatsapp
 */

if (!defined('ABSPATH')) : exit();
endif; // no direct access allowed 

/**
 * Define Plugins Constants
 */

define('WPRW_PATH', trailingslashit(plugin_dir_path(__FILE__)));

define('WPRW_URL', trailingslashit(plugins_url('/', __FILE__)));

/**
 * Loading Necessary Scripts  
 */

add_action('admin_enqueue_scripts', 'load_scripts');

function load_scripts()
{
  wp_enqueue_script('wp-react-whatsapp', WPRW_URL . 'dist/bundle.js', ['jquery', 'wp-element'], wp_rand(), true);

  wp_localize_script('wp-react-whatsapp', 'appLocalizer', [
    'apiURL' => home_url('/wp-json'),
    'nonce' => wp_create_nonce('wp_rest')
  ]);
}

require_once WPRW_PATH . '/classes/class-create-admin-menu.php';
