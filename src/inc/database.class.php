<?php


/**
 * Project: Socialite
 * Category: WordPress Plugin
 * URL: https://project.stechbd.net/socialite/
 * Description: Socialite is a powerful WordPress plugin that allows users to integrate social media login.
 * Version: 1.0.0
 * Version Code: 1
 * Author: Md. Ashraful Alam Shemul
 * Developer: S Technologies Limited
 * Website: https://www.stechbd.net
 * Email: product@stechbd.net
 * Created: May 28, 2023
 * Updated: May 28, 2023
 */


namespace Socialite;

class Database
{
	/**
	 * @param string $name
	 * @return string|bool
	 */
	public static function info(string $name): string|bool
	{
		global $wpdb;

		$table_name = $wpdb->prefix . 'socialite';

		$sql = 'SELECT * FROM ' . $table_name . ' WHERE name = ' . $name . ' LIMIT 1';

		$result = $wpdb->get_results($sql);

		if(count($result) > 0)
		{
			return $result[0]->value;
		}

		return false;
	}
}