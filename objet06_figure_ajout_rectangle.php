<?php

class Figure
{
	//protected $surface;
	protected $type_figure;

	public function show()
	{
		//echo $this->type_figure." : ".$this->surface." m2<br>";
		echo $this->type_figure." : ".$this->calculeSurface()." m2<br>";
	}
}


class Carre extends Figure
{
	private $cote;

	public function __construct( $co )
	{
		$this->cote = $co;
		//$this->surface = $co * $co;
		$this->type_figure = "carré";
	}

	public function calculeSurface()
	{
		return $this->cote * $this->cote;
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

	public function calculeSurface()
	{
		return $this->rayon * $this->rayon * 3.14;
	}
}

class Triangle extends Figure
{

	private $base;
	public $hauteur;

	public function __construct( $h, $b )
	{
		$this->base = $b;
		$this->hauteur = $h;
		//$this->surface = $b * $h / 2;
		$this->type_figure = "triangle";
	}

	public function calculeSurface()
	{
		return $this->base * $this->hauteur / 2;
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
$t1->hauteur = 10; 
$t1->show();
// cercle : 3 m2 

?>