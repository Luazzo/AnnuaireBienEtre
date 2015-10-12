<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\Localite;
use Annuaire\BienEtreBundle\Entity\CodePostal;
use Annuaire\BienEtreBundle\Entity\Commune;
/*ddsddqdqdqsdqdqdd*/
use Annuaire\BienEtreBundle\Entity\Commentaire;
use Annuaire\BienEtreBundle\Entity\CategoriesDesServices;

/**
 * User
 *
 * @ORM\Table("user")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\UserRepository")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="userType", type="string")
 * @DiscriminatorMap({"prestataire" = "Prestataires", "internaut" = "Internauts"})
 */
class User {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *   
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=255)
     */
    protected $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseN", type="string", length=255)
     */
    protected $adresseN;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseRue", type="string", length=255)
     */
    protected $adresseRue;

    /**
     * @var integer
     *
     * @ORM\Column(name="numEssaiInfect", type="integer")
     */
    protected $numEssaiInfect;

    /**
     * @var boolean
     *
     * @ORM\Column(name="banni", type="boolean")
     */
    protected $banni;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inscripConfig", type="boolean")
     */
    protected $inscripConfig;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\Localite")
     * @ORM\JoinColumn(name="localite", referencedColumnName="id")
     */
    protected $localite;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\CodePostal")
     * @ORM\JoinColumn(name="codePostal", referencedColumnName="id")
     */
    protected $codePostal;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\Commune")
     * @ORM\JoinColumn(name="commune", referencedColumnName="id")
     */
    protected $commune;

    /**
     * @ORM\ManyToMany(targetEntity="Annuaire\BienEtreBundle\Entity\CategoriesDesServices")
     */
    protected $categorie;

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
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     * @return User
     */
    public function setNumTel($numTel) {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string 
     */
    public function getNumTel() {
        return $this->numTel;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set adresseN
     *
     * @param string $adresseN
     * @return User
     */
    public function setAdresseN($adresseN) {
        $this->adresseN = $adresseN;

        return $this;
    }

    /**
     * Get adresseN
     *
     * @return string 
     */
    public function getAdresseN() {
        return $this->adresseN;
    }

    /**
     * Set adresseRue
     *
     * @param string $adresseRue
     * @return User
     */
    public function setAdresseRue($adresseRue) {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    /**
     * Get adresseRue
     *
     * @return string 
     */
    public function getAdresseRue() {
        return $this->adresseRue;
    }

    /**
     * Set numEssaiInfect
     *
     * @param integer $numEssaiInfect
     * @return User
     */
    public function setNumEssaiInfect($numEssaiInfect) {
        $this->numEssaiInfect = $numEssaiInfect;

        return $this;
    }

    /**
     * Get numEssaiInfect
     *
     * @return integer 
     */
    public function getNumEssaiInfect() {
        return $this->numEssaiInfect;
    }

    /**
     * Set banni
     *
     * @param boolean $banni
     * @return User
     */
    public function setBanni($banni) {
        $this->banni = $banni;

        return $this;
    }

    /**
     * Get banni
     *
     * @return boolean 
     */
    public function getBanni() {
        return $this->banni;
    }

    /**
     * Set inscripConfig
     *
     * @param boolean $inscripConfig
     * @return User
     */
    public function setInscripConfig($inscripConfig) {
        $this->inscripConfig = $inscripConfig;

        return $this;
    }

    /**
     * Get inscripConfig
     *
     * @return boolean 
     */
    public function getInscripConfig() {
        return $this->inscripConfig;
    }

    /**
     * Set newsLetter
     *
     * @param boolean $newsLetter
     * @return User
     */
}
