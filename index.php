<?php


	require_once 'vendor/autoload.php';

	use App\Config\Configs as Configs;
	use App\Config\Constants as Constants;
	use App\Config\Router as Router;

	$config = new Configs;
	$costants = new Constants;
	$router = new Router;

	$requestRouter = $router->getControl();

	/* Requisition */
	if(!isset($requestRouter) || $requestRouter == '\\App\\Control\\') {

		echo '<h3>'.date('d/m/Y H:i:s').'</h3>';
		echo '<h2>VERSION: '.VERSION.'</h2>';
		echo '<h1>API smallPHP</h1>';

	}else{

		$requestRouter = new $requestRouter;

	}


	//print_r($control);

	//echo $routerName;
