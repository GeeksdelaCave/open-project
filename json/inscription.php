<?php
    /** Fichier JSON gérant l'inscription de l'utilisateur au site
    * @author Thibaud CENENT
    * @version 1.1
    */
require_once '../header.php';

require_once '../modele/bdd.php';

require_once '../modele/user.php';
$val = new stdClass();
$reponse = 1;

if(isset($_POST['e_mail'])){

    if(!(isAlreadyUsed($_POST['e_mail'])) && addUser($_POST['nom'], $_POST['prenom'], $_POST['e_mail'], $_POST['metier']
            , $_POST['diplome'], $_POST['mot_de_passe']) != null){
        $user = new User($_POST['e_mail'], $_POST['mot_de_passe']);
        $_SESSION['user'] = $user;
        $_SESSION['is_connect'] = true;
        $reponse = 0;
    }
    else
        $reponse = 2;
}
$val->reponse = $reponse;

//Envoie résultat
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 4 Sep 2017 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($val);