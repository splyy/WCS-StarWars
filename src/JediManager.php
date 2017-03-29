<?php

namespace wcs;

class JediManager {

    /**
     * @var BddManager
     */
    private $bdd;

    private $firstName;
    private $lastName;
    private $sexe;
    private $faction;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $this->escapeFields($firstName);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $this->escapeFields($lastName);
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $this->escapeFields($sexe);
    }

    /**
     * @return mixed
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * @param mixed $faction
     */
    public function setFaction($faction)
    {
        $this->faction = $this->escapeFields($faction);
    }

    /**
     * JediManager constructor.
     * @param BddManager $bdd
     */
    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    /**
     * @param string $firstname , string $lastname, string $sexe, string $faction
     */
    public function addJedi()
    {
        $sql = "INSERT INTO jedi (nom, prenom, sexe, faction) VALUES('$this->firstName', '$this->lastName', '$this->sexe', '$this->faction');";
        $this->bdd->execSql($sql);
    }

    /**
     * @param integer $id , string $firstname, string $lastname, string $sexe, string $faction
     */
    public function updateJedi($id)
    {
        $sql = "UPDATE jedi SET nom = '$this->firstName', prenom = '$this->lastName', sexe = '$this->sexe', faction = '$this->faction' WHERE id=" . $id;
        $this->bdd->execSql($sql);
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function removeJedi($id) {
        $sql = "DELETE FROM jedi WHERE id=".$id;
        return $this->bdd->execSql($sql);
    }

    /**
     * @return mixed
     */
    public function listJedi() {
        $sql = "SELECT * FROM jedi";
        return $this->bdd->execSql($sql);
    }

    /**
     * @param integer $id
     * @return array|null
     */
    public function getJedi($id)
    {
        $sql = "SELECT * FROM jedi WHERE id = " . $id;
        $result = $this->bdd->execSql($sql);
        return mysqli_fetch_assoc($result);
    }

    private function escapeFields($field)
    {
        return mysqli_real_escape_string($this->bdd->getConnection(), $field);
    }
}