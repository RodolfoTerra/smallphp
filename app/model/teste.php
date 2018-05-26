<?php 

	namespace App\Model;

	/**
	 * @Entity
	 * @Table(name="teste")
	 */

	use \App\Model\Base as ConnectBase;


	class Teste
	{

		private $testeId;
		private $testeNome;


		function __construct ($testeId=0, $testeNome="")
		{

			$this->testeId = $testeId;
			$this->testeNome = $testeNome;
		}


	    public function getTesteId()
	    {
	        return $this->testeId;
	    }


	    public function getTesteNome()
	    {
	        return $this->testeNome;
	    }


	    public function setTesteNome($testeNome)
	    {
	        $this->testeNome = $testeNome;
	    }


		public function setTeste($query)
		{
			$bd = new ConnectBase;

			return $bd->persistModel($query);
		}
	}
