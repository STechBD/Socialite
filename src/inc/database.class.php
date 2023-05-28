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
	public static function install(): bool
	{
		global $wpdb;

		$table_name = $wpdb->prefix . 'socialite_provider';

		$sql = 'CREATE TABLE ' . $table_name . '
		(
			id INT (11) NOT NULL AUTO_INCREMENT,
			name VARCHAR (255) NOT NULL,
			app_id VARCHAR (255) NOT NULL,
			app_secret VARCHAR (255) NOT NULL,
			status VARCHAR (1) NOT NULL DEFAULT `0`,
			PRIMARY KEY (id)
		)';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

		dbDelta($sql);

		return true;
	}

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