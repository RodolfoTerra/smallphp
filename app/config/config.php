<?php

	namespace App\Config;

	/**
	 * Config Sistem
	 *
	 */

	class Configs
	{
		
		function __construct ()
		{
			/* 1 para exibir erros PHP */
			ini_set('display_errors',1);
			header('Access-Control-Allow-Origin: *');
			header("Content-Type: text/html; charset=ISO-8859-1",true);
			date_default_timezone_set('America/Sao_Paulo');
		}
	}
	