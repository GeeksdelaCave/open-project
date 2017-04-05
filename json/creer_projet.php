<?php

require_once '../header.php';

require_once '../modele/bdd.php';

$val = new stdClass();

$reponse = 1;

if(isset($_POST['name_projet'])){
    addProjet($_POST['name_projet'], $_SESSION['user']->getId(), $_POST['select_type_projet']
        , $_POST['description_projet'], $_POST['objectifs_projet'], $_POST['profils_projet'], false);
    $reponse = 0;
}
$val->reponse = $reponse;

//Envoie résultat
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 4 Sep 2017 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($val);