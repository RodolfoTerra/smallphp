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

			define('VERSION', '1.0');
			define('KEY', '1fAB7d427a34ca2');

			define('__APP_ROOT__', dirname(__DIR__));
			define('WWW_ROOT', dirname(__FILE__));
			define('DS', DIRECTORY_SEPARATOR);

			/* For router */
			define('DOMAIN', $_SERVER['HTTP_HOST']);
			define('URL', (isset($_SERVER['HTTPS']) ? "https" : "http") ."://". DOMAIN. $_SERVER['REQUEST_URI']);
			define('VIEW_PATH', "app/view/");
			define('CONTROL_PATH', "app/control/");
			define('USER_AGENT', $_SERVER['HTTP_USER_AGENT']);

			define('IP_CLIENT', $_SERVER["REMOTE_ADDR"]);

			define('MOMENT', date('Y-m-d H:i:s'));
			define('MOMENT_RATE', 3600);
			
			define('LIMIT_MAX_QUERY', '5000');
		}

	}
