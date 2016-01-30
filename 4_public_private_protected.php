<?php

class FatherClass {

	public function publicMethod() {
		return 'FatherClass::publicMethod()';
	}

	private function privateMethod() {
		return 'FatherClass::privateMethod()';
	}

	protected function protectedMethod() {
		return 'FatherClass::protectedMethod()';
	}

	public function printPrivateMethod() {
		return $this->privateMethod();
	}

}

class ChildClass extends FatherClass {

	public function printProtectedMethod() {
		return $this->protectedMethod();
	}

}

$oFatherClass = new FatherClass();
$oChildClass  = new ChildClass();

var_dump($oChildClass->publicMethod());
var_dump($oFatherClass->publicMethod());
//var_dump($oChildClass->privateMethod()); //PHP Fatal error:  Call to private method FatherClass::privateMethod()
//var_dump($oFatherClass->privateMethod()); //PHP Fatal error:  Call to private method FatherClass::privateMethod()
var_dump($oFatherClass->printPrivateMethod());
//var_dump($oChildClass->protectedMethod()); //PHP Fatal error:  Call to protected method FatherClass::protectedMethod()
//var_dump($oFatherClass->protectedMethod()); //PHP Fatal error:  Call to protected method FatherClass::protectedMethod()
var_dump($oChildClass->printProtectedMethod());

?>