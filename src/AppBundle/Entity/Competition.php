<?php

namespace AppBundle\Entity;

/**
 * Competition
 */
class Competition
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

    private $local;
    
    private $competition;
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
     * @return Competition
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
     * Constructor
     */
    public function __construct()
    {
        $this->competition = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set local
     *
     * @param \AppBundle\Entity\Local $local
     *
     * @return Competition
     */
    public function setLocal(\AppBundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \AppBundle\Entity\Local
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Add competition
     *
     * @param \AppBundle\Entity\Team $competition
     *
     * @return Competition
     */
    public function addCompetition(\AppBundle\Entity\Team $competition)
    {
        $this->competition[] = $competition;

        return $this;
    }

    /**
     * Remove competition
     *
     * @param \AppBundle\Entity\Team $competition
     */
    public function removeCompetition(\AppBundle\Entity\Team $competition)
    {
        $this->competition->removeElement($competition);
    }

    /**
     * Get competition
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetition()
    {
        return $this->competition;
    }
}
