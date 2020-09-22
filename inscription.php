<?php
<<<<<<< HEAD
$__TEST = false;

include ("L_fonctions_generales.php");

login("inscription.php");

saisie_formulaire();
=======
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();

$newUser = new User();

if ( isset($_POST['ok']) )
{
    $newUser->parsePost();
    $newUser->save();

    $_SESSION['user']  = $newUser;
    header ('location: page_membre.php');
}
$newUser->form();
?>
>>>>>>> 1fc3c01120bffe7747fe06c7f1ac7c5af9c4bf58
