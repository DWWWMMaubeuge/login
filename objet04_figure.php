<?php

class Figure
{
	public $surface;
	public $type_figure;

	public function show()
	{
		echo $this->type_figure." : ".$this->surface." m2<br>";
	}
}


class Carre extends Figure
{
	private $cote;

	public function __construct( $co )
	{
		$this->cote = $co;
		$this->surface = $co * $co;
		$this->type_figure = "carré";
	}
}

class Cercle extends Figure
{

	private $rayon;

	public function __construct( $r )
	{
		$this->rayon = $r;
		$this->surface = $r * $r * 3.14;
		$this->type_figure = "cercle";
	}
}

class Triangle extends Figure
{

	private $base;
	private $hauteur;

	public function __construct( $h, $b )
	{
		$this->base = $b;
		$this->hauteur = $h;
		$this->surface = $b * $h / 2;
		$this->type_figure = "triangle";
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