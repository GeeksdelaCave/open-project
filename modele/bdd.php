<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 19/03/2017
 * Time: 14:13
 */



function connexionBD() {
    $bdd = new PDO('mysql:host=dropcorp.eu;dbname=open_project;charset=utf8', 'openproject', 'mdp');
    return $bdd;
}

function isAlreadyUsed($email) {

    $bdd = connexionBD();
    $req = $bdd->prepare('SELECT * FROM users WHERE mail = ?');
    $req->execute(array($email));
    while($donnees = $req->fetch()) {

        return true;

    }

    return false;


}