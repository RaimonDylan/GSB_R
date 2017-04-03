<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturation
 *
 * @ORM\Table(name="facturation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacturationRepository")
 */
class Facturation
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
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Client")
     */
    private $client;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salle")
     */
    private $salle;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Manifestation")
     */
    private $manifestation;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="integer")
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="vas", type="integer")
     */
    private $vas;

    /**
     * @var int
     *
     * @ORM\Column(name="nettoyage", type="integer")
     */
    private $nettoyage;


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
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Facturation
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idSalle
     *
     * @param integer $idSalle
     *
     * @return Facturation
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    /**
     * Get idSalle
     *
     * @return int
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set idReservation
     *
     * @param integer $idReservation
     *
     * @return Facturation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    /**
     * Get idReservation
     *
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Set location
     *
     * @param integer $location
     *
     * @return Facturation
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set vas
     *
     * @param integer $vas
     *
     * @return Facturation
     */
    public function setVas($vas)
    {
        $this->vas = $vas;

        return $this;
    }

    /**
     * Get vas
     *
     * @return int
     */
    public function getVas()
    {
        return $this->vas;
    }

    /**
     * Set nettoyage
     *
     * @param integer $nettoyage
     *
     * @return Facturation
     */
    public function setNettoyage($nettoyage)
    {
        $this->nettoyage = $nettoyage;

        return $this;
    }

    /**
     * Get nettoyage
     *
     * @return int
     */
    public function getNettoyage()
    {
        return $this->nettoyage;
    }
}

