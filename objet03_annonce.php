<?php

class Annonce
{
	private $titre;
	private $description;
	private  $image;

	public function __construct( $tit, $desc, $img )
	{
		$this->  ;
	}

	public function show()
	{
		echo "<h2>".$this->titre."</h2>\n";		
	}
}

class bateau extends Annonce
{
	private $longueur;

	public function __construct( $tit, $desc, $img, $longueur )
	{
		parent::__construct( $tit, $desc, $img );
		$this->longueur = $longueur;
	}

	public function show()
	{
		echo "<h2>bateau</h2>\n";
		parent::show();
		echo "longueur :".$this->longueur."<br>\n";
	}
}

class voiture extends Annonce
{
	private $puissance;

	public function __construct( $tit, $desc, $img, $p )
	{
		parent::__construct( $tit, $desc, $img );
		$this->
	}

	public function show()
	{
		echo "<h2>voiture</h2>\n";
		parent::show();
		echo "longueur :".$this->longueur."<br>\n";
	}
}



	$a1 = new Annonce( 	"maison"	, "une belle maison de charme"		,	"" );
	
	$b1 = new Bateau( 	"voilier"	, "un superbe voilier..."			, 	"", 12 );

	
	$a1->show(); 
	$b1->show(); 

	/*
	$tableau = array();

	array_push( $tableau, $a1 );
	array_push( $tableau, $b1 );

	foreach ($tableau as $obj ) 
	{
		$obj->show();
	}
	*/
?>