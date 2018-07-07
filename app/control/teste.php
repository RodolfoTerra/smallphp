<?php

	namespace App\Control;

	/**
	 * Control Teste
	 *
	 */

	use App\Config\Router as Router;

	class Teste
	{
		/* Router */
		private $router = '';
		private $returnMin = "";
		private $returnMax = "";


		function __construct ()
		{

			$this->router = new Router;
			$this->method = $this->router->routerMethod;

		}


		private function postTeste ()
		{


		}


		private function getTeste ()
		{


		}

	}
