<?php

class ClasePapa {

	final public function metodoFinal() {
		var_dump('metodoFinal() en clase padre');
	}

}

class ClaseHija extends ClasePapa {

	public function metodoFinal() {
		var_dump('metodoFinal() en clase hija');
	}

}

$oClaseHija = new ClaseHija();

// Esto no se puede hacer porque no se puede hacer override a metodo final en clase papa
//PHP Fatal error:  Cannot override final method ClasePapa::metodoFinal()
var_dump($oClaseHija->metodoFinal());

?>