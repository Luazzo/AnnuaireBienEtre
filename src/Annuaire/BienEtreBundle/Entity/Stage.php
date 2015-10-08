<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\User;
/**
 * Stage
 *
 * @ORM\Table("stage")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\StageRepository")
 */
class Stage
{
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
     * @var string
     *
     * @ORM\Column(name="infoComplementaire", type="string", length=255)
     */
    private $infoComplementaire;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="string", length=255)
     */
    private $tarif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affichageDe", type="date")
     */
    private $affichageDe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affichageJusque", type="date")
     */
    private $affichageJusque;

   /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\User")
    * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
   private $user;

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
     * @return Stage
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
     * Set description
     *
     * @param string $description
     * @return Stage
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set infoComplementaire
     *
     * @param string $infoComplementaire
     * @return Stage
     */
    public function setInfoComplementaire($infoComplementaire)
    {
        $this->infoComplementaire = $infoComplementaire;

        return $this;
    }

    /**
     * Get infoComplementaire
     *
     * @return string 
     */
    public function getInfoComplementaire()
    {
        return $this->infoComplementaire;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     * @return Stage
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return Stage
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Stage
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set affichageDe
     *
     * @param \DateTime $affichageDe
     * @return Stage
     */
    public function setAffichageDe($affichageDe)
    {
        $this->affichageDe = $affichageDe;

        return $this;
    }

    /**
     * Get affichageDe
     *
     * @return \DateTime 
     */
    public function getAffichageDe()
    {
        return $this->affichageDe;
    }

    /**
     * Set affichageJusque
     *
     * @param \DateTime $affichageJusque
     * @return Stage
     */
    public function setAffichageJusque($affichageJusque)
    {
        $this->affichageJusque = $affichageJusque;

        return $this;
    }

    /**
     * Get affichageJusque
     *
     * @return \DateTime 
     */
    public function getAffichageJusque()
    {
        return $this->affichageJusque;
    }
}
