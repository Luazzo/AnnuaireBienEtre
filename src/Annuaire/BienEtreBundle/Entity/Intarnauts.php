<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intarnauts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\IntarnautsRepository")
 */
class Intarnauts {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsLetter", type="boolean")
     */
    private $newsLetter;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

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
