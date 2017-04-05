<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 19/03/2017
 * Time: 14:13
 */


function connexionBD() {
    $bdd = new PDO('mysql:host=localhost;dbname=open_project;charset=utf8', 'diego', 'ch4ng3m3');
    return $bdd;
}

function isAlreadyUsed($email) {
    try  {
        $bdd = connexionBD();
        $req = $bdd->prepare('SELECT * FROM UTILISATEUR WHERE mail = ?');
        $req->execute(array($email));
        while($donnees = $req->fetch()) {
            return true;
        }
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
    return false;
}

function addUser($firstname, $secondname, $mail, $prefession, $diplome, $password) {

    try  {
        $bdd = connexionBD();
        $req = $bdd->prepare("INSERT INTO UTILISATEUR (nom, prenom, mail, profession, diplome, password) VALUES (?, ?, ?, ?, ?, ?)");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!$req) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
        $req->execute(array($firstname, $secondname, $mail, $prefession, $diplome, sha1($password)));
        return new User($mail, $password);
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
        return null;
    }

}

function addTache($id_responsable, $projet, $nom, $date, $etat, $description) {


    try  {
        $bdd = connexionBD();
        $req = $bdd->prepare('INSERT INTO TACHE (id_responsable, projet, nom, date_butoir, etat, description) VALUES(?, ?, ?, ?, ?, ?)');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!$req) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
        $req->execute(array($id_responsable, $projet, $nom, $date, $etat, $description));

    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }

}

function addProjet($nom_projet, $id_chef, $type, $description, $objectifs, $profils_recherches, $fini) {
    try  {
        $bdd = connexionBD();
        $req = $bdd->prepare('INSERT INTO PROJET (nom_projet, id_chef, type, description, objectifs, profils_recherches, fini) VALUES(?, ?, ?, ?, ?, ?, ?)');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!$req) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
        $req->execute(array($nom_projet, $id_chef, $type, $description, $objectifs, $profils_recherches, $fini));

    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
}