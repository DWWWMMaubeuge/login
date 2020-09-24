<?php

class Figure
{
	public $surface;

	public function show()
	{
		echo "figure : none m2<br>";
	}
}


class Carre extends Figure
{
	private $cote;

	public function __construct( $co )
	{
		$this->cote = $co;
		$this->surface = $co * $co;
	}

	public function show()
	{
		echo "carré : ".$this->surface." m2<br>";
	}
}

class Cercle extends Figure
{

	private $rayon;

	public function __construct( $r )
	{
		$this->rayon = $r;
		$this->surface = $r * $r * 3.14;
	}
	
	public function show()
	{
		echo "cercle : ".$this->surface." m2<br>";
	}

}

class Triangle extends Figure
{

	private $base;
	private $hauteur;

	public function __construct( $b, $h )
	{
		$this->base = $b ;

		$this->hauteur = $h ;
		$this->surface = $b*$h/2 ;
	}
	
	
	public function show()

	{
		echo "triangle : ".$this->surface." m2<br>";
	}

}


$c1 = new Carre(  5 );
$c1->show();
// carré : 25 m2

$c2 = new Cercle( 1 );
$c2->show();
// cercle : 3,14 m2 

$t1 = new Triangle( 2, 3 );
$t1->show();
// cercle : 3 m2 

?>