<?php

interface Chargeable {

	public function getPrice();

}

interface interfaceDos {
	public function getFirst();
}

class ShopProduct implements Chargeable, interfaceDos {

	public $price = 0;

	public function getPrice() {
		return 'Value 1';
	}

	public function getFirst() {
		
	}

}

?>