<?php

class ShopProduct {
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;
	public $numPages;
	public $playLength;

	public function __construct( $title, $firstName, $mainName, $price, $numPages = 0, $playLength = 0 ) {
		$this->title             = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName  = $mainName;
		$this->price             = $price;
		$this->numPages          = $numPages;
		$this->playLength        = $playLength;
	}

	public function getProducer() {
		return "{$this->producerFirstName}" . " {$this->producerMainName}";
	}

	public function getSummaryLine() {
		$base = "$this->title ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		
		return $base;
	}

}

class CdProduct extends ShopProduct {

	public function getPlayLength() {
		return $this->playLength;
	}

	public function getSummaryLine() {
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		$base .= ": playing time - {$this->playLength}";
		
		return $base;
	}

}

class BookProduct extends ShopProduct {
	 
	public function getNumberOfPages() {
		return $this->numPages;
	}

	public function getSummaryLine() {
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		$base .= ": page count - {$this->numPages}";
		
		return $base;
	}

}

$product1 = new CdProduct( "Exile on Coldharbour Lane", "The", "Alabama 3", 10.99, null, 60.33 );

print "artist: {$product1->getProducer()}\n";

echo "<hr>";

$product2 = new BookProduct( "My Antonia", "Willa", "Cather", 5.75, null, 20.23 );

print "artist: {$product2->getProducer()}\n";

?>