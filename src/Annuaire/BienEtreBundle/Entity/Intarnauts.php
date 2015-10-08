<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\User;

/**
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\IntarnautsRepository")
 */
class Intarnauts extends User {

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsLetter", type="boolean")
     */
    protected $newsLetter;

    public function setNewsLetter($newsLetter) {
        $this->newsLetter = $newsLetter;

        return $this;
    }

    /**
     * Get newsLetter
     *
     * @return boolean 
     */
    public function getNewsLetter() {
        return $this->newsLetter;
    }

}
