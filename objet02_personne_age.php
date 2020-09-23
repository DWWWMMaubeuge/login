<?php

class Personne
{
	private $nom;
	private $prenom;
	protected $age;

	public function __construct( $noml, $prel, $annaissance )
	{
		$this->nom = $noml;
		$this->prenom = $prel;
		$this->calculeAge( $annaissance );
	}

	public function show()
	{
		echo "<br>\n";
		echo "je m'appelle  ".$this->prenom." ".$this->nom."<br>\n";		
		echo "j'ai ".$this->age." ans<br>\n";
	}

	private function calculeAge( $dn )
	{
		$this->age = 2020 - $dn;	
	}

	public function changeAge( $age )
	{
		$this->age = $age; 
	}	

	public function changeDN( $dn )
	{
		$this->calculeAge( $dn ); 
	}	

}

class Boulanger extends Personne
{
	public function show()
	{
		$this->age = 34;
		parent::show();
		echo "je suis boulanger<br>\n";
	}
}

class Mecanicien extends Personne
{
	public function show()
	{
		parent::show();
		echo "je suis mecanicien<br>\n";
	}
}





	$p1 = new Personne( 	"dupont"	, "jean"		, 2000 );
	$p2 = new Personne( 	"durand"	, "luc"			, 1997 );
	$b1 = new Boulanger( 	"Farineux"	, "Henri"		, 2005 );
	$m1 = new Mecanicien( 	"lotto"		, "philippe"	, 2002 );

	/*
	$p1->show(); 
	$p2->show(); 
	$b1->show(); 
	$m1->show(); 
	*/

	$tableau = array();

	array_push( $tableau, $p1 );
	array_push( $tableau, $p2 );
	array_push( $tableau, $b1 );
	array_push( $tableau, $m1 );

	foreach ($tableau as $obj ) 
	{
		$obj->show();
	}


	echo "<br>";


	$p1->show();
	$p1->changeAge( 14 );
	//$p1->calculeAge( 2000 );
	$p1->show();

	$p1->changeDN( 1975 );
	$p1->show();



?>