<?php 

/**
 * Class : Algorithm
 * Author : Fahmi Jufri
 * Technical Test for PHP Developer Zakuna.co
 */
class Algorithm {

	/**
	 * function swap, to swap two value
	 * @param  String $a value 1 to swap into value 2 (can using string or integer)
	 * @param  String $b value 2 to swap into value 1 (can using string or integer)
	 * @return array    returning array value of $a and $b
	 */

	function swap($a, $b) {
		$a = $a.$b;
		$b = substr($a, 0, strlen($a)-strlen($b));
		$a = substr($a, strlen($b));

		return array($a, $b);
	}
}

?>