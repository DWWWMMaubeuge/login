<?php

$__TEST = true;


function login($cible)
{
echo "<form action=\"$cible\" methode=\"POST\">";
echo "<input type=\"text\" name=\"identifiant\" />"; 
echo "<input type=\"password\" name=\"motdepasse\" />"; 
echo "<input type=\"submit\" value=\"envoyer\" />"; 
echo "</form>"; 
}


function form_inscrip( $cible )
{
    echo "<form method=\"POST\" action=\"$cible\">\n";
    echo "    <input type=\"text\" name=\"titre\" placeholder=\"Veuillez entrer votre nom\">\n";
    echo "    <input type=\"email\" name=\"email\" placeholder=\"Veuillez entrer votre email\">\n";
    echo "    <input type=\"password\" name=\"pass\" placeholder=\"Veuillez entrer votre mot de passe\">\n";
    echo "    <input type=\"password\" name=\"confirmPass\" placeholder=\"Veuillez entrer votre mot de passe\">\n";
    echo "    <input type='submit' name=\"envoi\" value=\"Envoyer\">\n";
    echo "</form>\n";
}


function saisie_formulaire()
{
    if( $_POST ) 
        if( isset($_POST['identifiant']) && $_POST['motdepasse'] != "") 
        {
            $identifiant = $_POST['identifiant'];
            $mdp = $_POST['motdepasse'];
            //echo "titre : $titre<br>\n";

            return( [ $identifiant, $mdp]  );  
        }
    return NULL;
}

function gestionSession()
{
	GLOBAL $formulaires;

	session_start();

	// dictionaire contenant nos annonce
	if ( isset($_SESSION["formulaire"]) )
	{
		//echo "session exist<br>\n";
		$formulaires = $_SESSION["formulaire"];
	}
	else
	{	
		//echo "nouvelle session<br>\n";
		$formulaires = array();
		$_SESSION["formulaire"] = $formulaires;
	}	
	

if ($__TEST)
{

    if(isset($_POST) && !empty($_POST['identifiant'])=== 'admin' && !empty($_POST['motdepasse'])=== 'admin')
    {
            if((($_POST['identifiant'])==='admin') && ($_POST['motdepasse'])==='admin'){


                $erroridentification = 'identifaint exact !!!';
                $errormotdepass = 'Mot de passe exact !!!';
                header("Location: inscription.php"); 
            }
            else
            {
                $erroridentification = 'Indentifiant incorrect'; 
                $errormotdepass = 'Mot de passe incorrect';
            }
    }

    form_inscrip( "L_fonctions_generales.php" );

}
?>

