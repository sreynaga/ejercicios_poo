<?php
	
class ShopProduct {

	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;
	 
	public function __construct( $title, $firstName, $mainName, $price ) {
		$this->title             = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName  = $mainName;
		$this->price             = $price;
	}
	 
	public function getProducer() {
		return "{$this->producerFirstName}" . " {$this->producerMainName}";
	}
	 
	public function getSummaryLine() {
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
	
		return $base;
	}

}

class CdProduct extends ShopProduct {
	
	public $playLength;
	 
	public function __construct( $title, $firstName, $mainName, $price, $playLength ) {
		parent::__construct( $title, $firstName, $mainName, $price );
		$this->playLength = $playLength;
	}
	 
	public function getPlayLength() {
		return $this->playLength;
	}

	public function getSummaryLine() {
		$base = parent::getSummaryLine();
		$base .= ": playing time - {$this->playLength}";
		
		return $base;
	}
}

class BookProduct extends ShopProduct {
	
	public $numPages;
	 
	public function __construct( $title, $firstName, $mainName, $price, $numPages ) {
		parent::__construct( $title, $firstName, $mainName, $price );
		$this->numPages = $numPages;
	}
	 
	public function getNumberOfPages() {
		return $this->numPages;
	}
	 
	public function getSummaryLine() {
		$base = parent::getSummaryLine();
		$base .= ": page count - $this->numPages";
		
		return $base;
	}

}

$product1 = new CdProduct( "Exile on Coldharbour Lane", "The", "Alabama 3", 10.99, null, 60.33 );

print "artist: {$product1->getProducer()}\n";

echo "<hr>";

$product2 = new BookProduct( "My Antonia", "Willa", "Cather", 5.75, null, 20.23 );

print "artist: {$product2->getProducer()}\n";

?>