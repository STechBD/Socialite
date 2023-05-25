<?php


/**
 * Plugin Name: Socialite
 * Plugin URI: https://project.stechbd.net/socialite/
 * Description: Socialite is a powerful WordPress plugin that allows users to integrate social media login, sharing buttons, Facebook comments, and a messenger floating button into their WordPress websites. It provides seamless integration with popular social media platforms like Facebook, Twitter, and Google, making it easy for users to log in, share content, and engage with their audience.
 * Version: 1.0.0
 * Version Code: 1
 * Author: Md. Ashraful Alam Shemul
 * Author URI: https://www.aashemul.com
 * Text Domain: stechbd-socialite
 * Domain Path: /languages
 * License: MIT
 */


// Exit if accessed directly.
if(!defined('ABSPATH'))
{
	exit;
}

// Define the plugin version.
if(!defined('STECHBD_SOCIALITE_VERSION'))
{
	define('STECHBD_SOCIALITE_VERSION', '1.0.0');
}

// Define the plugin path.
if(!defined('STECHBD_SOCIALITE_PLUGIN_DIR'))
{
	define('STECHBD_SOCIALITE_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Include the main plugin class.
require_once STECHBD_SOCIALITE_PLUGIN_DIR . 'includes/class-stechbd-socialite.php';

// Register activation and deactivation hooks.
register_activation_hook(__FILE__, array('Socialite', 'activate'));
register_deactivation_hook(__FILE__, array('Socialite', 'deactivate'));

// Initialize the plugin.
add_action('plugins_loaded', array('Socialite', 'init'));