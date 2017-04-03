<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manifestation
 *
 * @ORM\Table(name="manifestation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ManifestationRepository")
 */
class Manifestation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireDebut", type="time")
     */
    private $horaireDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireFin", type="time")
     */
    private $horaireFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbParticipant", type="integer")
     */
    private $nbParticipant;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Client")
     */
    private $client;

    /**
     * @var int
     *
     * @ORM\Column(name="arr", type="integer")
     */
    private $arr;

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
     * @return Manifestation
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Manifestation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Manifestation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set horaireDebut
     *
     * @param \DateTime $horaireDebut
     *
     * @return Manifestation
     */
    public function setHoraireDebut($horaireDebut)
    {
        $this->horaireDebut = $horaireDebut;

        return $this;
    }

    /**
     * Get horaireDebut
     *
     * @return \DateTime
     */
    public function getHoraireDebut()
    {
        return $this->horaireDebut;
    }

    /**
     * Set horaireFin
     *
     * @param \DateTime $horaireFin
     *
     * @return Manifestation
     */
    public function setHoraireFin($horaireFin)
    {
        $this->horaireFin = $horaireFin;

        return $this;
    }

    /**
     * Get horaireFin
     *
     * @return \DateTime
     */
    public function getHoraireFin()
    {
        return $this->horaireFin;
    }

    /**
     * Set etat
     *
     * @param integer etat
     *
     * @return Manifestation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get arr
     *
     * @return int
     */
    public function getArr()
    {
        return $this->arr;
    }

    /**
     * Set arr
     *
     * @param integer arr
     *
     * @return Manifestation
     */
    public function setArr($arr)
    {
        $this->arr = $arr;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set nbParticipant
     *
     * @param integer $nbParticipant
     *
     * @return Manifestation
     */
    public function setNbParticipant($nbParticipant)
    {
        $this->nbParticipant = $nbParticipant;

        return $this;
    }

    /**
     * Get nbParticipant
     *
     * @return int
     */
    public function getNbParticipant()
    {
        return $this->nbParticipant;
    }
}

