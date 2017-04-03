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

    if(!(isAlreadyUsed($_POST['e_mail']))){
        //Utilisateur::creer_compte($_POST['nom'], $_POST['prenom'], $_POST['pseudo'],  $_POST['e_mail'], $_POST['password'],
        /*$_POST['adresse'], $_POST['code_postal'], $_POST['ville'], $_POST['pays']);
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['mail'] = $_POST['e_mail'];
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['adresse'] = $_POST['adresse'];
        $_SESSION['code_postal'] = $_POST['code_postal'];
        $_SESSION['ville'] = $_POST['ville'];
        $_SESSION['pays'] = $_POST['pays'];
        $_SESSION['is_connect'] = true;*/
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