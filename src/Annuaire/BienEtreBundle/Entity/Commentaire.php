<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\User;

/**
 * Commentaire
 *
 * @ORM\Table("commentaires")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\CommentaireRepository")
 */
class Commentaire {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cote", type="integer")
     */
    private $cote;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenue", type="string", length=775)
     */
    private $contenue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endcodage", type="date")
     */
    private $endcodage;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\User")
     *  @ORM\JoinColumn(name="prestataireId", referencedColumnName="id")
     */
    private $prestataireId;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\User")
     *  @ORM\JoinColumn(name="internautId", referencedColumnName="id")
     */
    private $intarnautId;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cote
     *
     * @param integer $cote
     * @return Commentaire
     */
    public function setCote($cote) {
        $this->cote = $cote;

        return $this;
    }

    /**
     * Get cote
     *
     * @return integer 
     */
    public function getCote() {
        return $this->cote;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Commentaire
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set contenue
     *
     * @param string $contenue
     * @return Commentaire
     */
    public function setContenue($contenue) {
        $this->contenue = $contenue;

        return $this;
    }

    /**
     * Get contenue
     *
     * @return string 
     */
    public function getContenue() {
        return $this->contenue;
    }

    /**
     * Set endcodage
     *
     * @param \DateTime $endcodage
     * @return Commentaire
     */
    public function setEndcodage($endcodage) {
        $this->endcodage = $endcodage;

        return $this;
    }

    /**
     * Get endcodage
     *
     * @return \DateTime 
     */
    public function getEndcodage() {
        return $this->endcodage;
    }

}
