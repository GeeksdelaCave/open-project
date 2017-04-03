<?php

require_once '../header.php';

/**
 * Fichier JSON vérifiant si l'utilisateur est connecté
 * @author Thibaud CENENT
 * @version 1.0
 */

$rep = false;
$retour = new stdClass();
if(isset($_SESSION['is_connect']))
    $rep = true;

$retour->rep = $rep;
// Envoie du résultat
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 4 Sep 2017 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($retour);