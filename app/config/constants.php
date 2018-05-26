<?php

	namespace App\Config;

	/**
	 * Constants to Sistem
	 *
	 */

	class Constants
	{
		
		function __construct ()
		{

			define('__APP_ROOT__', dirname(__DIR__));
			define('WWW_ROOT', dirname(__FILE__));
			define('DS', DIRECTORY_SEPARATOR);

			/* For router */
			define('DOMAIN', $_SERVER['HTTP_HOST']);
			define('URL', (isset($_SERVER['HTTPS']) ? "https" : "http") ."://". DOMAIN. $_SERVER['REQUEST_URI']);
			define('VIEW_PATH', "app/view/");
			define('CONTROL_PATH', "app/control/");
			define('USER_AGENT', $_SERVER['HTTP_USER_AGENT']);

		}

	}
