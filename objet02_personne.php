<?php

class Personne
{
	public $nom;
	public $prenom;

	public function __construct( $noml, $prel )
	{
		$this->nom = $noml;
		$this->prenom = $prel;
	}

	public function show()
	{
		echo "<br>\n";
		echo "je m'appelle  ".$this->prenom." ".$this->nom."<br>\n";
	}
}

class Boulanger extends Personne
{
	public function show()
	{
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





	$p1 = new Personne( "dupont", "jean");
	$p2 = new Personne( "durand", "luc");
	$b1 = new Boulanger( "Farineux", "Henri");
	$m1 = new Mecanicien( "lotto", "philippe");

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




?>