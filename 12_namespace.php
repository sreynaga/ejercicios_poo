<?php

use \primerNamespace\claseHola as Hola;

class jcClass {

	public function halba() {
		return Hola::cholo();
	}

}

$oJc = new jcClass();
var_dump($oJc->halba());