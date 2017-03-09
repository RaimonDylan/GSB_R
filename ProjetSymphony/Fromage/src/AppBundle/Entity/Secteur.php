<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Secteur
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Ramasseur", mappedBy="secteur")
     */
    private $ramasseur;

    /**
     * @ORM\OneToMany(targetEntity="Producteur", mappedBy="secteur")
     */
    private $producteur;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ramasseur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->producteur = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Secteur
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
     * Add ramasseur
     *
     * @param \AppBundle\Entity\Ramasseur $ramasseur
     *
     * @return Secteur
     */
    public function addRamasseur(\AppBundle\Entity\Ramasseur $ramasseur)
    {
        $this->ramasseur[] = $ramasseur;

        return $this;
    }

    /**
     * Remove ramasseur
     *
     * @param \AppBundle\Entity\Ramasseur $ramasseur
     */
    public function removeRamasseur(\AppBundle\Entity\Ramasseur $ramasseur)
    {
        $this->ramasseur->removeElement($ramasseur);
    }

    /**
     * Get ramasseur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRamasseur()
    {
        return $this->ramasseur;
    }

    /**
     * Add producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     *
     * @return Secteur
     */
    public function addProducteur(\AppBundle\Entity\Producteur $producteur)
    {
        $this->producteur[] = $producteur;

        return $this;
    }

    /**
     * Remove producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     */
    public function removeProducteur(\AppBundle\Entity\Producteur $producteur)
    {
        $this->producteur->removeElement($producteur);
    }

    /**
     * Get producteur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducteur()
    {
        return $this->producteur;
    }
}
