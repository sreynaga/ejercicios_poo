<?php

class MyClass {

	public function __construct() {
		var_dump('construct');
	}

	public function myMethod() {
		return 'myMethod()';
	}

	public function __destruct() {
		var_dump('destruct');
	}

}

$oMyClass = new MyClass();
var_dump($oMyClass->myMethod());


class Person {

	private $name;
	private $age;
	private $id;

	function __construct( $name, $age ) {
		$this->name = $name;
		$this->age  = $age;
	}

	function setId( $id ) {
		$this->id = $id;
	}

	function __destruct() {
		if ( ! empty( $this->id ) ) {
			// save Person data
			print "saving person\n";
		}
	}

}

$person = new Person( "bob", 44 );
$person->setId( 343 );
unset( $person );

?>