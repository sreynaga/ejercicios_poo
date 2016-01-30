<?php

abstract class ShopProductWriter {

	protected $products = array();
	 
	public function addProduct( ShopProduct $shopProduct ) {
		$this->products[] = $shopProduct;
	}
	 
	abstract public function write();

}

abstract class ErroredWriter extends ShopProductWriter{

	public function write() {

	}

	abstract public function read();

}

class ErroredRead extends ErroredWriter {

	public function read() {

	}

	//Porque no ocupa el metodo abstracto write() de la clase ShopProductWriter?

}

?>