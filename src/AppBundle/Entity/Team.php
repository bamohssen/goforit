<?php

namespace AppBundle\Entity;

/**
 * Team
 */
class Team
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $nbrJoueurs;

    /**
     * @var string
     */
    private $libelle;

    
    private $club;


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
     * Set nbrJoueurs
     *
     * @param integer $nbrJoueurs
     *
     * @return Team
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

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Team
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
     * Set club
     *
     * @param \AppBundle\Entity\Club $club
     *
     * @return Team
     */
    public function setClub(\AppBundle\Entity\Club $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \AppBundle\Entity\Club
     */
    public function getClub()
    {
        return $this->club;
    }
}
