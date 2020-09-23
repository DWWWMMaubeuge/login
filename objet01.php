<?php

class Point
{
	public $x;
	public $y;

	public function __construct( $xl, $yl )
	{
		$this->x = $xl;
		$this->y = $yl;
	}

	public function show()
	{
		echo "(".$this->x.", ".$this->y.")<br>\n";
	}

}


	$p1 = new Point(3, 8);

	$p1->show(); 

?>