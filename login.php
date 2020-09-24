<?php
include ( 'L_fonctions_generales.php');

<?php
include (L_fonctions_generales.php);

session start();
$user = $_SESSION['users'];
$users = $_SESSION['users'];



echo " votre login est $user ";


if($_POST)
    if (isset($_POST|'login')) && isset($_POST['pwd'])
    {
        $nom = $_POST['nom'];
        $pwd = $_POST['password'];
        $_SESSION['user'] = $login;

        return( [ $nom, $pwd]);
    }


?>
