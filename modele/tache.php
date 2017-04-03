<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 19/03/2017
 * Time: 14:27
 */
include_once "bdd.php";

class Tache {


    private $_id;
    private $_id_respondable;
    private $_id_projet;
    private $_nom;
    private $_date;
    private $_etat;
    private $_description;

    /**
     * Tache constructor.
     * @param $_id_respondable
     */
    public function __construct($_id)
    {

        $bdd = connexionBD();
        $req = $bdd->prepare('SELECT * FROM tache WHERE id = ?');
        $req->execute(array($_id));
        while($donnee = $req->fetch()) {

            $this->_id = $donnee['id_tache'];
            $this->_id_respondable = $donnee['id_responsable'];
            $this->_id_projet = $donnee['id_projet'];
            $this->_nom = $donnee['nom_tache'];
            $this->_date = $donnee['date_butoir'];
            $this->_etat = $donnee['etat'];
            $this->_description = $donnee['description'];

        }


    }

    private function saveBD() {


        $bdd = connexionBD();
        $update = $bdd->prepare('UPDATE tache SET nom_tache = ?, date_butoir = ?, etat = ?, description = ? WHERE id_tache = ?');
        $update->execute(array($this->_nom, $this->_date, $this->_etat,$this->_description, $this->_id));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }


    /**
     * @return mixed
     */
    public function getIdRespondable()
    {
        return $this->_id_respondable;
    }

    /**
     * @param mixed $id_respondable
     */
    public function setIdRespondable($id_respondable)
    {
        $this->_id_respondable = $id_respondable;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->_id_projet;
    }

    /**
     * @param mixed $id_projet
     */
    public function setIdProjet($id_projet)
    {
        $this->_id_projet = $id_projet;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->_date = $date;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->_etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->_etat = $etat;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
        $this->saveBD();

    }




}