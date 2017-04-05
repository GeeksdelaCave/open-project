<?php

include_once "bdd.php";
include_once "tache.php";
include_once "Projet.php";
class User
{
    private $_id;
    private $_first_name;
    private $_second_name;
    private $_email;
    private $_job;
    private $_diplomes;
    private $_available;
    private $_taches;
    private $_projets;

    /**
     * User constructor.
     * @param $_id
     */
    public function __construct($_email, $_password)
    {
        $bdd = connexionBD();
        $req = $bdd->prepare('SELECT * FROM UTILISATEUR WHERE mail = ? AND password = ?');
        $req->execute(array($_email, sha1($_password)));

        while($donnee = $req->fetch()) {

            $this->_available = true;
            $this->_id = $donnee["id_utilisateur"];
            $this->_first_name = $donnee["nom"];
            $this->_second_name = $donnee["prenom"];
            $this->_email = $donnee["mail"];
            $this->_job = $donnee["profession"];
            $this->_diplomes = $donnee["diplome"];

        }

        if(!isset($this->_available)) {
            $this->_available = false;
        }


        if($this->_available) {


            $taches = $bdd->prepare('SELECT * FROM TACHE WHERE id_responsable = ?');
            $taches->execute(array($this->_id));
            while ($donnee = $taches->fetch()) {

                $this->_taches[] = new Tache($donnee['id_tache']);

            }
            $projets = $bdd->prepare('SELECT * FROM PROJET WHERE id_projet = (SELECT projet FROM PARTICIPER WHERE utilisateur = ?)');
            $projets->execute(array($this->_id));
            while ($donnee = $projets->fetch()) {
                $this->_projets[] = new Projet($donnee['id_projet']);

            }


        }



    }

    public function isAvailable() {


        return $this->_available;

    }

    private function saveBD() {


        $bdd = connexionBD();
        $update = $bdd->prepare('UPDATE users SET nom = ?, prenom = ?, age = ?, mail = ?, avatar = ?, diplomes = ?, metier = ? WHERE id_utilisateur = ?');
        $update->execute(array($this->_first_name, $this->_second_name, $this->_age,$this->_email, $this->_avatar,$this->_diplomes, $this->_job, $this->_id));
    }

    public function getProjets()
    {
        return $this->_projets;
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
    public function getDiplomes()
    {
        return $this->_diplomes;
    }

    /**
     * @param mixed $diplomes
     */
    public function setDiplomes($diplomes)
    {
        $this->_diplomes = $diplomes;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getTaches()
    {
        return $this->_taches;
    }

    /**
     * @param mixed $taches
     */
    public function setTaches($taches)
    {
        $this->_taches = $taches;
        $this->saveBD();

    }



    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->_first_name = $first_name;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->_second_name;
    }

    /**
     * @param mixed $second_name
     */
    public function setSecondName($second_name)
    {
        $this->_second_name = $second_name;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->_avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->_avatar = $avatar;
        $this->saveBD();

    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->_job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->_job = $job;
        $this->saveBD();

    }






}