<?php

class Annonce
{
	private $titre;
	private $description;
	private $image;
	private $prix;
	protected $section;

	public function __construct( $tit, $desc, $img, $prx )
	{
		$this->titre = $tit ;
		$this->description = $desc ;
		$this->image = $img ;
		$this->prix= $prx;

	}

	public function show()
	{
		echo "<h2>".$this->titre."</h2>\n";
		echo "<p>".$this->description."</p>\n";
		echo "<img src='".$this->image."'>"."<br>\n";
		echo "<p>".$this->prix."€"."</p>"."<br>\n";			
	}
}

class bateau extends Annonce
{
	private $longueur;

	public function __construct( $tit, $desc, $img, $longueur, $prx )
	{
		parent::__construct( $tit, $desc, $img , $prx );
		$this->longueur = $longueur;
	}

	public function show()
	{
		parent::show();
		echo "longueur :".$this->longueur."m"."<br>\n";
	}
}

class voiture extends Annonce
{
	private $puissance;

	public function __construct( $tit, $desc, $img, $p, $prx )
	{
		parent::__construct( $tit, $desc, $img, $prx );
		$this->puissance=$p;
	}

	public function show()
	{
		parent::show();
		echo "puissance :".$this->puissance."<br>\n";
	}
}



	$a1 = new Annonce( 	"Maison"	, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi est dicta eaque nobis deleniti ullam voluptas, libero vero sequi esse non dolor exercitationem repudiandae ratione dolore! Quidem laboriosam repellat quod." ,"https://i.pinimg.com/564x/4d/58/f0/4d58f0daa45792580dddca3b28fe04fb.jpg" , 200000  ,    "" );
	
	$b1 = new Bateau( 	"Bateau"	, "un superbe voilier...", "", "200", 1200 );

	$v1 = new Voiture( 	"Voiture"	, "une superbe voiture..."	, "https://cars.usnews.com/dims4/USNEWS/90799e2/2147483647/resize/640x420%3E/format/jpeg/quality/85/?url=https%3A%2F%2Fcars.usnews.com%2Fstatic%2Fimages%2Farticle%2F202006%2F128503%2F216702_New_Volvo_XC40_-_exterior_640x420.jpg" , 70, 20000 );

	
	$a1->show(); 
	$b1->show();
	$v1->show();

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