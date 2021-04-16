<?php

interface iCarre {
	public function perimeter();
}


// class Carre implements iCarre {
class Carre {

	public static $count = 0;

	public $side;
	protected $side2;
	private $side3;

	function __construct($side)
	{
		$this->side = $side;
		self::$count += 1;
	}

	public function perimeter()
	{
		return $this->side * 4;
	}

	// visibilité "public" = 
	// utilisable de partout
	public function printMe()
	{
		echo($this->side);
	}

	// visibilité "protected" = 
	// utilisable de la classe ET des classes enfants
	protected function printMe2()
	{
		echo($this->side);	
	}

	// visibilité "private" = 
	// utilisable de la classe uniquement
	private function printMe3()
	{
		echo($this->side);	
	}
}

class Rectangle extends Carre {

	function __construct($side, $grand)
	{
		parent::__construct($side);
		$this->grand = $grand;
	}

	public function printMe()
	{
		echo( $this->side . " " . $this->grand );
	}

}