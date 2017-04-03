<?php

/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 19/03/2017
 * Time: 14:32
 */
class Projet
{

    private $_id;
    private $_id_chefprojet;
    private $_nom;
    private $_type;
    private $_description;
    private $_objectifs;
    private $_profils_recherches;
    private $_fini;

    /**
     * Projet constructor.
     * @param $_id
     */
    public function __construct($_id)
    {
        $bdd = connexionBD();
        $req = $bdd->prepare('SELECT * FROM projet WHERE id = ?');
        $req->execute(array($_id));
        while($donnee = $req->fetch()) {

            $this->_id = $donnee['id_projet'];
            $this->_id_chefprojet = $donnee['id_chefprojet'];
            $this->_nom = $donnee['nom_projet'];
            $this->_type = $donnee['type_projet'];
            $this->_description = $donnee['description'];
            $this->_objectifs = $donnee['objectifs'];
            $this->_profils_recherches = $donnee['profils_recherches'];
            $this->_fini = $donnee['fini'];

        }
    }

    private function saveBD() {


        $bdd = connexionBD();
        $update = $bdd->prepare('UPDATE projet SET nom_projet = ?, id_chefprojet = ?, type_projet = ?, description = ?, objectifs = ?, profils_recherches = ?, fini = ? WHERE id_projet = ?');
        $update->execute(array($this->_nom, $this->_id_chefprojet, $this->_type,$this->_description, $this->_objectifs, $this->_profils_recherches, $this->_fini, $this->_id));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
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
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
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

    /**
     * @return mixed
     */
    public function getObjectifs()
    {
        return $this->_objectifs;
    }

    /**
     * @param mixed $objectifs
     */
    public function setObjectifs($objectifs)
    {
        $this->_objectifs = $objectifs;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getProfilsRecherches()
    {
        return $this->_profils_recherches;
    }

    /**
     * @param mixed $profils_recherches
     */
    public function setProfilsRecherches($profils_recherches)
    {
        $this->_profils_recherches = $profils_recherches;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getFini()
    {
        return $this->_fini;
    }

    /**
     * @param mixed $fini
     */
    public function setFini($fini)
    {
        $this->_fini = $fini;
        $this->saveBD();

    }




}