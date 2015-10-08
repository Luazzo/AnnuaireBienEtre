<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\Images;

/**
 * CategoriesDesServices
 *
 * @ORM\Table("categories_services")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\CategoriesDesServicesRepository")
 */
class CategoriesDesServices {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enAvant", type="boolean")
     */
    private $enAvant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    /**
     * @ORM\OneToOne(targetEntity="Annuaire\BienEtreBundle\Entity\Images")
     *  @ORM\JoinColumn(name="image", referencedColumnName="id")
     */
    private $image;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return CategoriesDesServices
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CategoriesDesServices
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set enAvant
     *
     * @param boolean $enAvant
     * @return CategoriesDesServices
     */
    public function setEnAvant($enAvant) {
        $this->enAvant = $enAvant;

        return $this;
    }

    /**
     * Get enAvant
     *
     * @return boolean 
     */
    public function getEnAvant() {
        return $this->enAvant;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     * @return CategoriesDesServices
     */
    public function setValide($valide) {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean 
     */
    public function getValide() {
        return $this->valide;
    }

}
