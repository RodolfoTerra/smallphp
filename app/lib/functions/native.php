<?php

	namespace App\Lib\Functions;

	/**
	 * Lib Functions Default
	 *
	 */

	class Native
	{
		/**/
		public function upperString($str, $length) {

		    $fc = mb_strtoupper(mb_substr($str, 0, $length));

		    return $fc.mb_substr($str, $length);
		}		

	}
