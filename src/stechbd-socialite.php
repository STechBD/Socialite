<?php


/**
 * Plugin Name: Socialite by STechBD.Net
 * Plugin URI: https://project.stechbd.net/socialite/
 * Description: Socialite is a powerful WordPress plugin that allows users to integrate social media login.
 * Version: 1.0.0
 * Version Code: 1
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Requires at least: 5.0.0
 * Tested up to: 6.2.2
 * Requires PHP: 8.0
 * Created: May 23, 2023
 * Updated: May 27, 2023
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
if(!defined('STECHBD_SOCIALITE_PLUGIN'))
{
	define('STECHBD_SOCIALITE_PLUGIN', plugin_dir_path(__FILE__));
}

// Define the include path.
if(!defined('STECHBD_SOCIALITE_INC'))
{
	define('STECHBD_SOCIALITE_INC', STECHBD_SOCIALITE_PLUGIN . 'includes/');
}

// Include the main plugin class.
require_once STECHBD_SOCIALITE_INC . 'class-stechbd-socialite.php';

// Register activation and deactivation hooks.
register_activation_hook(__FILE__, array('Socialite', 'activate'));
register_deactivation_hook(__FILE__, array('Socialite', 'deactivate'));

// Initialize the plugin.
add_action('plugins_loaded', array('Socialite', 'init'));