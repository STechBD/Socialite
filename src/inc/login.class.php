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
 * Created: May 26, 2023
 * Updated: May 28, 2023
 */


/**
 * The login class file.
 */

namespace Socialite;

class Login
{
	public string $type;

	/**
	 * @param string $type
	 * @throws \Facebook\Exceptions\FacebookSDKException
	 */
	public function __construct(string $type)
	{
		$this -> type = $type;

		switch($this->type)
		{
			case 'twitter':
				$this -> twitter();
				break;
			case 'google':
				$this -> google();
				break;
			default:
				$this -> facebook();
				break;
		}
	}

	/**
	 * @return string
	 * @throws \Facebook\Exceptions\FacebookSDKException
	 */
	private function facebook(): string
	{
		$fb = new \Facebook\Facebook(
		[
			'app_id' => '{app-id}',
			'app_secret' => '{app-secret}',
			'default_graph_version' => 'v2.10',
			//'default_access_token' => '{access-token}', // optional
		]);

		// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
		//   $helper = $fb->getRedirectLoginHelper();
		//   $helper = $fb->getJavaScriptHelper();
		//   $helper = $fb->getCanvasHelper();
		//   $helper = $fb->getPageTabHelper();

		try
		{
			// Get the \Facebook\GraphNodes\GraphUser object for the current user.
			// If you provided a 'default_access_token', the '{access-token}' is optional.
			$response = $fb->get('/me', '{access-token}');
		}
		catch(\Facebook\Exceptions\FacebookResponseException $e)
		{
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		}
		catch(\Facebook\Exceptions\FacebookSDKException $e)
		{
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}

		$me = $response->getGraphUser();
		return $me->getName();
	}

	private function twitter(): void
	{
		// To be added later
	}

	private function google(): void
	{
		// To be added later
	}
}