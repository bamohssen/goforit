<?php

namespace AppBundle\Entity;

/**
 * Utilisateur
 */
class Utilisateur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomComplet;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $positionTerrain;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Utilisateur
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Utilisateur
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Utilisateur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Utilisateur
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Utilisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set positionTerrain
     *
     * @param string $positionTerrain
     *
     * @return Utilisateur
     */
    public function setPositionTerrain($positionTerrain)
    {
        $this->positionTerrain = $positionTerrain;

        return $this;
    }

    /**
     * Get positionTerrain
     *
     * @return string
     */
    public function getPositionTerrain()
    {
        return $this->positionTerrain;
    }
}
