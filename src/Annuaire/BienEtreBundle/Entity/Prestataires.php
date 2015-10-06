<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestataires
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\PrestatairesRepository")
 */
class Prestataires {

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
     * @ORM\Column(name="numTva", type="string", length=255)
     */
    private $numTva;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return User
     */
    public function setSite($site) {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * Set numTva
     *
     * @param string $numTva
     * @return User
     */
    public function setNumTva($numTva) {
        $this->numTva = $numTva;

        return $this;
    }

    /**
     * Get numTva
     *
     * @return string 
     */
    public function getNumTva() {
        return $this->numTva;
    }

}
