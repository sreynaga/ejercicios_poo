<?php

class StaticExample {

	const ACTIVE_MEMBER = 1;
	
	public $test = 'Test'; //Si no se especifica el tipo que nivel de acceso por default tiene?
	
	static public $aNum = 0;
	
	static public function sayHello() {
		print "hello";
	}

	public function test() {
		return self::$aNum;
	}

}

var_dump(StaticExample::$aNum);
StaticExample::sayHello();

$oStaticExample = new StaticExample();
var_dump($oStaticExample->test);
var_dump($oStaticExample->test());
var_dump($oStaticExample::ACTIVE_MEMBER); //De esta manera es la unica para acceder a una constante haciendo una instancia?

?>