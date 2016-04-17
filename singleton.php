<?php

class Singleton {

	private function __construct() {
		var_dump('construct');
	}

}

$oSingleton = new Singleton();