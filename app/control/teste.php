<?php

	namespace App\Control;

	/**
	 * Control Teste
	 *
	 */

	use App\Config\Router as Router;

	class Teste
	{

		function __construct ()
		{

			$rt = new Router;
			$rt = $rt->getModel();
			$model = new $rt;

			/* Modulo de teste  */
			echo 'control';

			$model->setTeste('INSERT INTO teste (nome) VALUES ("Russo4")');

			$modelView = $model->getTeste('SELECT * FROM teste');

			while($li = mysqli_fetch_assoc($modelView)){

				echo '<table><tr>';
				echo '<td>'.$li['id'] .'</td>';
				echo '<td>'.$li['nome'] .'</td>';
				echo '</tr></table>';
			}

		}

	}
