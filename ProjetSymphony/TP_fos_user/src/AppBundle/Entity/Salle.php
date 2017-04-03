<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalleRepository")
 */
class Salle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;

    /**
     * @var int
     *
     * @ORM\Column(name="tempsNettoyage", type="integer")
     */
    private $tempsNettoyage;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxLocation", type="integer")
     */
    private $tauxLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxVas", type="integer")
     */
    private $tauxVas;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxNettoyage", type="integer")
     */
    private $tauxNettoyage;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Salle
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set tempsNettoyage
     *
     * @param integer $tempsNettoyage
     *
     * @return Salle
     */
    public function setTempsNettoyage($tempsNettoyage)
    {
        $this->tempsNettoyage = $tempsNettoyage;

        return $this;
    }

    /**
     * Get tempsNettoyage
     *
     * @return int
     */
    public function getTempsNettoyage()
    {
        return $this->tempsNettoyage;
    }

    /**
     * Set tauxLocation
     *
     * @param integer $tauxLocation
     *
     * @return Salle
     */
    public function setTauxLocation($tauxLocation)
    {
        $this->tauxLocation = $tauxLocation;

        return $this;
    }

    /**
     * Get tauxLocation
     *
     * @return int
     */
    public function getTauxLocation()
    {
        return $this->tauxLocation;
    }

    /**
     * Set tauxVas
     *
     * @param integer $tauxVas
     *
     * @return Salle
     */
    public function setTauxVas($tauxVas)
    {
        $this->tauxVas = $tauxVas;

        return $this;
    }

    /**
     * Get tauxVas
     *
     * @return int
     */
    public function getTauxVas()
    {
        return $this->tauxVas;
    }

    /**
     * Set tauxNettoyage
     *
     * @param integer $tauxNettoyage
     *
     * @return Salle
     */
    public function setTauxNettoyage($tauxNettoyage)
    {
        $this->tauxNettoyage = $tauxNettoyage;

        return $this;
    }

    /**
     * Get tauxNettoyage
     *
     * @return int
     */
    public function getTauxNettoyage()
    {
        return $this->tauxNettoyage;
    }
}

