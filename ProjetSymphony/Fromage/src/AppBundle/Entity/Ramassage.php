<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ramassage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $dateHeure;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $nbBidons;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $nbLitres;

    /**
     * @ORM\Column(type="float", nullable=false)
     */
    private $tauxMatiereGrasse;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $dateRamassage;

    /**
     * @ORM\ManyToOne(targetEntity="Ramasseur", inversedBy="ramassage")
     * @ORM\JoinColumn(name="ramasseur_id", referencedColumnName="id", nullable=false)
     */
    private $ramasseur;

    /**
     * @ORM\ManyToOne(targetEntity="Producteur", inversedBy="ramassage")
     * @ORM\JoinColumn(name="producteur_id", referencedColumnName="id", nullable=false)
     */
    private $producteur;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateHeure
     *
     * @param \DateTime $dateHeure
     *
     * @return Ramassage
     */
    public function setDateHeure($dateHeure)
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    /**
     * Get dateHeure
     *
     * @return \DateTime
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * Set nbBidons
     *
     * @param integer $nbBidons
     *
     * @return Ramassage
     */
    public function setNbBidons($nbBidons)
    {
        $this->nbBidons = $nbBidons;

        return $this;
    }

    /**
     * Get nbBidons
     *
     * @return integer
     */
    public function getNbBidons()
    {
        return $this->nbBidons;
    }

    /**
     * Set nbLitres
     *
     * @param integer $nbLitres
     *
     * @return Ramassage
     */
    public function setNbLitres($nbLitres)
    {
        $this->nbLitres = $nbLitres;

        return $this;
    }

    /**
     * Get nbLitres
     *
     * @return integer
     */
    public function getNbLitres()
    {
        return $this->nbLitres;
    }

    /**
     * Set tauxMatiereGrasse
     *
     * @param float $tauxMatiereGrasse
     *
     * @return Ramassage
     */
    public function setTauxMatiereGrasse($tauxMatiereGrasse)
    {
        $this->tauxMatiereGrasse = $tauxMatiereGrasse;

        return $this;
    }

    /**
     * Get tauxMatiereGrasse
     *
     * @return float
     */
    public function getTauxMatiereGrasse()
    {
        return $this->tauxMatiereGrasse;
    }

    /**
     * Set dateRamassage
     *
     * @param \DateTime $dateRamassage
     *
     * @return Ramassage
     */
    public function setDateRamassage($dateRamassage)
    {
        $this->dateRamassage = $dateRamassage;

        return $this;
    }

    /**
     * Get dateRamassage
     *
     * @return \DateTime
     */
    public function getDateRamassage()
    {
        return $this->dateRamassage;
    }

    /**
     * Set ramasseur
     *
     * @param \AppBundle\Entity\Ramasseur $ramasseur
     *
     * @return Ramassage
     */
    public function setRamasseur(\AppBundle\Entity\Ramasseur $ramasseur)
    {
        $this->ramasseur = $ramasseur;

        return $this;
    }

    /**
     * Get ramasseur
     *
     * @return \AppBundle\Entity\Ramasseur
     */
    public function getRamasseur()
    {
        return $this->ramasseur;
    }

    /**
     * Set producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     *
     * @return Ramassage
     */
    public function setProducteur(\AppBundle\Entity\Producteur $producteur)
    {
        $this->producteur = $producteur;

        return $this;
    }

    /**
     * Get producteur
     *
     * @return \AppBundle\Entity\Producteur
     */
    public function getProducteur()
    {
        return $this->producteur;
    }
}
