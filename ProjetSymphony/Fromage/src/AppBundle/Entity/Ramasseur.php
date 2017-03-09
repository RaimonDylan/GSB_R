<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ramasseur
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $adrRue1;

    /**
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $adrRue2;

    /**
     * @ORM\Column(type="integer", length=5, nullable=false)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="Ramassage", mappedBy="ramasseur")
     */
    private $ramassage;

    /**
     * @ORM\OneToOne(targetEntity="Producteur", mappedBy="ramasseur")
     */
    private $producteur;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur", inversedBy="ramasseur")
     * @ORM\JoinColumn(name="secteur_id", referencedColumnName="id", nullable=false)
     */
    private $secteur;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ramassage = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Ramasseur
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
     * Set adrRue1
     *
     * @param string $adrRue1
     *
     * @return Ramasseur
     */
    public function setAdrRue1($adrRue1)
    {
        $this->adrRue1 = $adrRue1;

        return $this;
    }

    /**
     * Get adrRue1
     *
     * @return string
     */
    public function getAdrRue1()
    {
        return $this->adrRue1;
    }

    /**
     * Set adrRue2
     *
     * @param string $adrRue2
     *
     * @return Ramasseur
     */
    public function setAdrRue2($adrRue2)
    {
        $this->adrRue2 = $adrRue2;

        return $this;
    }

    /**
     * Get adrRue2
     *
     * @return string
     */
    public function getAdrRue2()
    {
        return $this->adrRue2;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Ramasseur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Ramasseur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Add ramassage
     *
     * @param \AppBundle\Entity\Ramassage $ramassage
     *
     * @return Ramasseur
     */
    public function addRamassage(\AppBundle\Entity\Ramassage $ramassage)
    {
        $this->ramassage[] = $ramassage;

        return $this;
    }

    /**
     * Remove ramassage
     *
     * @param \AppBundle\Entity\Ramassage $ramassage
     */
    public function removeRamassage(\AppBundle\Entity\Ramassage $ramassage)
    {
        $this->ramassage->removeElement($ramassage);
    }

    /**
     * Get ramassage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRamassage()
    {
        return $this->ramassage;
    }

    /**
     * Set producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     *
     * @return Ramasseur
     */
    public function setProducteur(\AppBundle\Entity\Producteur $producteur = null)
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

    /**
     * Set secteur
     *
     * @param \AppBundle\Entity\Secteur $secteur
     *
     * @return Ramasseur
     */
    public function setSecteur(\AppBundle\Entity\Secteur $secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \AppBundle\Entity\Secteur
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
}
