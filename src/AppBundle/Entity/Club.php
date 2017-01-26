<?php

namespace AppBundle\Entity;

/**
 * Club
 */
class Club
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var int
     */
    private $nbrJoueurs;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Club
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set nbrJoueurs
     *
     * @param integer $nbrJoueurs
     *
     * @return Club
     */
    public function setNbrJoueurs($nbrJoueurs)
    {
        $this->nbrJoueurs = $nbrJoueurs;

        return $this;
    }

    /**
     * Get nbrJoueurs
     *
     * @return int
     */
    public function getNbrJoueurs()
    {
        return $this->nbrJoueurs;
    }
}
