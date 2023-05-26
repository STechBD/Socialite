<?php


/**
 * Plugin Name: Socialite by STechBD.Net
 * Plugin URI: https://project.stechbd.net/socialite/
 * Description: Socialite is a powerful WordPress plugin that allows users to integrate social media login, sharing buttons, Facebook comments, and a messenger floating button into their WordPress websites. It provides seamless integration with popular social media platforms like Facebook, Twitter, and Google, making it easy for users to log in, share content, and engage with their audience.
 * Version: 1.0.0
 * Version Code: 1
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Created: May 26, 2023
 * Updated: May 26, 2023
 */


/**
 * The login class file.
 */

class Login
{
	public string $type;

	public function __construct($type)
	{
		$this -> type = $type;
	}
}