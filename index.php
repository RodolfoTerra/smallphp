<?php

	require_once 'vendor/autoload.php';

	use App\Config\Configs as Configs;
	use App\Config\Constants as Constants;
	use App\Config\Router as Router;
	use App\Model\Base as ConnectBase;

	$config = new Configs;
	$costants = new Constants;
	$router = new Router;
	$bd = new ConnectBase;

	/* Start Router verification */
	$arrayRouter = $router::getRouter();
	$routerName = $arrayRouter[0];

	if(isset($arrayRouter[1])) { 
		$routerConditions = $arrayRouter[1]; 
	}else{
		$routerConditions = "";
	}
	/* End Router verification */


	/* Dinamic Model */
	$modelVariable = '\App\\Model\\'.$routerName;

	if(class_exists($modelVariable)) {
		$model = new $modelVariable;
		//$model = $routerName;
	}


	/* Dinamic Control */
	$controlVariable = '\App\\Control\\'.$routerName;

	if(class_exists($controlVariable)) {
		$control = new $controlVariable;
	}
	

	/* Dinamic View */
	$viewVariable = '\App\\View\\'.$routerName;

	if(class_exists($viewVariable)) {
		$view = new $viewVariable;
	}

	/* No requisitions */
	if(!isset($control)) {
		echo '<h3>'.date('d/m/Y H:i:s').'</h3>';
		echo '<h2>VERSION: '.VERSION.'</h2>';
		echo '<h1>API smallPHP</h1>';
	}


	$model->setTeste('INSERT INTO teste (nome) VALUES ("Russo4")');

	$modelView = $model->getTeste('SELECT * FROM teste');

	while($li = mysqli_fetch_assoc($modelView)){

		echo '<table><tr>';
		echo '<td>'.$li['id'] .'</td>';
		echo '<td>'.$li['nome'] .'</td>';
		echo '</tr></table>';
	}

	//print_r($control);

	//echo $routerName;
