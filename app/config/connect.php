<?php 

namespace App\Model;

/**
 * Connect MySql
 */


class Base
{

	private $conn = array(
				'driver' 	=> 'pdo_mysql',
				'host' 		=> '172.17.0.1',
				'user'     	=> 'api_user',
				'password' 	=> 'snx2584',
				'dbname'   	=> 'teste_api',
			);

	private $mysqli;


	function __construct()
	{
		$this->mysqli = mysqli_connect($this->conn['host'], $this->conn['user'], $this->conn['password'], $this->conn['dbname']);


		if (!$this->mysqli) {

			echo "<br>** MySQL Connection ERROR **";
		    echo "<br>Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "<br>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "<br>Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;

		}
	}


	public function getBase($query)
	{
		$return = $this->mysqli->query($query);
		mysqli_close($this->mysqli);

		return $return;
	}


	public function persistModel($query)
	{
	
    	$this->mysqli->query($query);
    	mysqli_close($this->mysqli);
	}
}
