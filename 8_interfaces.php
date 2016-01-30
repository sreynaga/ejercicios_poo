<?php

interface Chargeable {

	public function getPrice();

}

class ShopProduct implements Chargeable {

	public $price = 0;

	public function getPrice() {
		return 'Value 1';
	}

}

?>