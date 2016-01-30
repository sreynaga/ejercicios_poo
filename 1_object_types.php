<?php

class ShopProduct {
	
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;

	function __construct($title, $firstName, $mainName, $price ) {
		$this->title             = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName  = $mainName;
		$this->price             = $price;
	}

	public function getProducer() {
		return "{$this->producerFirstName}" . " {$this->producerMainName}";
	}

}

class ShopProductWriter {

	public function write( ShopProduct $shopProduct ) {
		$str = "{$shopProduct->title}: " . $shopProduct->getProducer() . " ({$shopProduct->price})\n";
		
		print $str;
	}

	public function setArray( array $storearray ) {
		$this->array = $storearray;
	}

	public function setWriter( ObjectWriter $objWriter = null ) {
		$this->writer = $objWriter;
	}

}

class ShopProductWrong {



}

$oShopProduct       = new ShopProduct( "My Antonia", "Willa", "Cather", 5.99 );
$oShopProductWriter = new ShopProductWriter();
$oShopProductWrong  = new ShopProductWrong();

$oShopProductWriter->write( $oShopProduct );

//Aquí da error porque el metodo write << ShopProductWriter::write() >> solo acepta como parametro una instancia de la clase ShopProduct
$oShopProductWriter->write( $oShopProductWrong );

?>