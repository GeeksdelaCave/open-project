<?php
/** Fichier JSON gérant la connexion de l'utilisateur au site
 * @author Thibaud CENENT
 * @version 1.1
 */

require_once '../modele/bdd.php';
require_once '../modele/user.php';
require_once '../header.php';

$message = false;
$retour = new stdClass();
if(isset($_POST['mail']) && isset($_POST['password'])){
    $user = new User($_POST['mail'], $_POST['password']);
    if($user->isAvailable()) {
        $message = true;
        $_SESSION['user'] = $user;
        $_SESSION['is_connect'] = true;
    }
}
$retour->message = $message;

//Envoie résultat

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 4 Sep 2017 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($retour);