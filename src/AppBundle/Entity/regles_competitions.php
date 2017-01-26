<?php

namespace AppBundle\Entity;

/**
 * regles_competitions
 */
class regles_competitions
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $etat;

    private $regles;

    private $competitions;


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
     * Set etat
     *
     * @param string $etat
     *
     * @return regles_competitions
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}

