<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table("localite")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\LocaliteRepository")
 */
class Localite {

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
     * @ORM\Column(name="localite", type="string", length=255)
     */
    private $localite;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set localite
     *
     * @param string $localite
     * @return Localite
     */
    public function setLocalite($localite) {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string 
     */
    public function getLocalite() {
        return $this->localite;
    }

}
