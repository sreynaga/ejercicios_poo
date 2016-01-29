<?php

trait PriceUtilities {
	private $taxrate = 17;

	function calculateTax( $price ) {
		return ( ( $this->taxrate/100 ) * $price );
	}

	// other utilities
}

trait IdentityTrait {

	public function generateId() {
		return uniqid();
	}

}


class ShopProduct {

	use PriceUtilities;

}

abstract class Service {

	// service oriented stuff

}

class UtilityService extends Service {

	use PriceUtilities, IdentityTrait;

}

$p = new ShopProduct();
var_dump($p->calculateTax( 100 ));

$u = new UtilityService();
var_dump($u->calculateTax( 100 ));

var_dump($u->generateId());

?>