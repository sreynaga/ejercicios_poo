<?php

class MagicMethods {

	private $name = 'Sergio Reynaga';

	public function __construct() {
		var_dump('construct');
	}

	public function __destruct() {
		var_dump('destruct');
	}

	public function getName() {
		return $this->name;
	}

	public function __get( $strPropertyName ) {
		var_dump($strPropertyName);
		$method = 'get' . ucfirst($strPropertyName);
		var_dump($method);
		return $this->$method();
	}

}

$oMagicMethods = new MagicMethods();
var_dump($oMagicMethods->name);

?>