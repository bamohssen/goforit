<?php

namespace AppBundle\Entity;

/**
 * Local
 */
class Local
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
     * @var string
     */
    private $adress;

    /**
     * @var string
     */
    private $prixMatchCompetition;

    /**
     * @var float
     */
    private $prixMatchUnique;


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
     * @return Local
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
     * Set adress
     *
     * @param string $adress
     *
     * @return Local
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
     * Set prixMatchCompetition
     *
     * @param string $prixMatchCompetition
     *
     * @return Local
     */
    public function setPrixMatchCompetition($prixMatchCompetition)
    {
        $this->prixMatchCompetition = $prixMatchCompetition;

        return $this;
    }

    /**
     * Get prixMatchCompetition
     *
     * @return string
     */
    public function getPrixMatchCompetition()
    {
        return $this->prixMatchCompetition;
    }

    /**
     * Set prixMatchUnique
     *
     * @param float $prixMatchUnique
     *
     * @return Local
     */
    public function setPrixMatchUnique($prixMatchUnique)
    {
        $this->prixMatchUnique = $prixMatchUnique;

        return $this;
    }

    /**
     * Get prixMatchUnique
     *
     * @return float
     */
    public function getPrixMatchUnique()
    {
        return $this->prixMatchUnique;
    }
}
