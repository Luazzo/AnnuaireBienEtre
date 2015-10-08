<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\User;

/**
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\PrestatairesRepository")
 */
class Prestataires extends User {

    /**
     * @var string
     *
     * @ORM\Column(name="numTva", type="string", length=255)
     */
    protected $numTva;

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
