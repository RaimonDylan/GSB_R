<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Producteur
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
     * @ORM\Column(type="integer", nullable=false)
     */
    private $distance;

    /**
     * @ORM\OneToMany(targetEntity="Ramassage", mappedBy="producteur")
     */
    private $ramassage;

    /**
     * 
     * @ORM\JoinColumn(name="ramasseur_id", referencedColumnName="id", nullable=false, unique=true)
     * @ORM\OneToOne(targetEntity="Ramasseur", inversedBy="producteur")
     */
    private $ramasseur;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur", inversedBy="producteur")
     * @ORM\JoinColumn(name="secteur_id", referencedColumnName="id", nullable=false)
     */
    private $secteur;

    /**
     * @ORM\ManyToMany(targetEntity="Producteur", inversedBy="producteur2")
     * @ORM\JoinTable(
     *     name="Distance",
     *     joinColumns={@ORM\JoinColumn(name="producteur_first_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="producteur_second_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $producteur1;

    /**
     * @ORM\ManyToMany(targetEntity="Producteur", mappedBy="producteur1")
     */
    private $producteur2;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ramassage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->producteur1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->producteur2 = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Producteur
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
     * @return Producteur
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
     * @return Producteur
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
     * @return Producteur
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
     * @return Producteur
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
     * Set distance
     *
     * @param integer $distance
     *
     * @return Producteur
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Add ramassage
     *
     * @param \AppBundle\Entity\Ramassage $ramassage
     *
     * @return Producteur
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
     * Set ramasseur
     *
     * @param \AppBundle\Entity\Ramasseur $ramasseur
     *
     * @return Producteur
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
     * Set secteur
     *
     * @param \AppBundle\Entity\Secteur $secteur
     *
     * @return Producteur
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

    /**
     * Add producteur1
     *
     * @param \AppBundle\Entity\Producteur $producteur1
     *
     * @return Producteur
     */
    public function addProducteur1(\AppBundle\Entity\Producteur $producteur1)
    {
        $this->producteur1[] = $producteur1;

        return $this;
    }

    /**
     * Remove producteur1
     *
     * @param \AppBundle\Entity\Producteur $producteur1
     */
    public function removeProducteur1(\AppBundle\Entity\Producteur $producteur1)
    {
        $this->producteur1->removeElement($producteur1);
    }

    /**
     * Get producteur1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducteur1()
    {
        return $this->producteur1;
    }

    /**
     * Add producteur2
     *
     * @param \AppBundle\Entity\Producteur $producteur2
     *
     * @return Producteur
     */
    public function addProducteur2(\AppBundle\Entity\Producteur $producteur2)
    {
        $this->producteur2[] = $producteur2;

        return $this;
    }

    /**
     * Remove producteur2
     *
     * @param \AppBundle\Entity\Producteur $producteur2
     */
    public function removeProducteur2(\AppBundle\Entity\Producteur $producteur2)
    {
        $this->producteur2->removeElement($producteur2);
    }

    /**
     * Get producteur2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducteur2()
    {
        return $this->producteur2;
    }
}
