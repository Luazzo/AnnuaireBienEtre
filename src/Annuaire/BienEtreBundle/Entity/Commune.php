<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table("comunne")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\CommuneRepository")
 */
class Commune {

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
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    public function getId() {
        return $this->id;
    }

    /**
     * Set commune
     *
     * @param string $commune
     * @return Commune
     */
    public function setCommune($commune) {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string 
     */
    public function getCommune() {
        return $this->commune;
    }

}
