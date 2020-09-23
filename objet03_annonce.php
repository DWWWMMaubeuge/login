<?php

class Annonce
{
	private       $titre;
	private $description;
	private       $image;
	private       $prix;

	public function __construct( $tit, $desc, $img ,$pr)
	{
		$this->titre      =  $tit  ;
		$this->description=  $desc ;
		$this->image      =  $img  ;
		$this->prix       =  $pr  ;
	}

	public function show()
	{
		echo "<h2>"  .$this->titre."</h2>\n";	
		echo "<p>"   .$this->description."</p>\n";
		echo "<img>" .$this->image ;
		echo "<strong>" .$this->prix ;"</strong>\n";
	}
}




class Bateau extends Annonce
{
	private $longueur;

	public function __construct( $tit, $desc, $img, $longueur, $pr )
	{
		parent::__construct( $tit, $desc, $img ,$pr);
		$this->longueur = $longueur;
	}

	public function show()
	{
		//echo "<h2>Bateau</h2>\n";
		parent::show();
		echo "<br>longueur :".$this->longueur."<br>\n";
		
	}
}






class voiture extends Annonce
{
	private $puissance;

	public function __construct( $tit, $desc, $img, $p, $pr )
	{
		parent::__construct( $tit, $desc, $img, $pr );
	   $this->puissance=$p;
	}   

	public function show()
	{
		//echo "<h2>voiture</h2>\n";
		parent::show();
		echo "<br>puissance :".$this->puissance."<br>\n";
	}
}




class Moto extends Annonce
{
	private $puissance;

	public function __construct( $tit, $desc, $img, $p, $pr )
	{
		parent::__construct( $tit, $desc, $img, $pr );
	   $this->puissance=$p;
	}   

	public function show()
	{
		//echo "<h2>voiture</h2>\n";
		parent::show();
		echo "<br>puissance :".$this->puissance."<br>\n";
	}
}






	$a1 = new Annonce( 		"Maison"	, 
							" une belle maison de charme {11 Pièces,7 Chambres Terrain de 16953 m² Piscine 1 Terrasse,	769 000 €}",
							 "<img src='https://i.pinimg.com/564x/4d/58/f0/4d58f0daa45792580dddca3b28fe04fb.jpg'>	",
							 400
						);
	
	$b1 = new Bateau( 		"Bateau"	, 
							"un super Bateau...",	        
							"<img src='data:image/jpeg;base64,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'>" , 
							"12m" , 
							200
						);

	$v1 = new Voiture(  	"voiture"  , 
							" une super voiture ....",     
							"<img src='https://cap.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcap.2F2019.2F10.2F23.2F50e48e37-e7a4-42ff-adb4-487b0e750368.2Ejpeg/750x375/background-color/ffffff/focus-point/889%2C618/quality/70/lexus-devoile-sa-vision-de-la-voiture-du-futur-a-lhorizon-2030-1353540.jpg'>",
							"150",
							1254 );
	
	$M1 = new Moto(     	"Moto" , 
							" une belle Moto........",        
							"<img src='https://i.pinimg.com/originals/c1/f9/1c/c1f91c16e17005cb7413bfd5530cef34.jpg'>", 
							120 ,
							300);
	

	
	$a1->show(); 
	$b1->show(); 
	$v1->show();
	$M1->show();
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
