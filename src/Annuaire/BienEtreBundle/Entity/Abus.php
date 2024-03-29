<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\Commentaire;
use Annuaire\BienEtreBundle\Entity\User;

/**
 * Abus
 *
 * @ORM\Table("abus")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\AbusRepository")
 */
class Abus {

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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="encodage", type="date")
     */
    private $encodage;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\Commentaire")
     *  @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $commentaire;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Abus
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
     * Set encodage
     *
     * @param \DateTime $encodage
     * @return Abus
     */
    public function setEncodage($encodage) {
        $this->encodage = $encodage;

        return $this;
    }

    /**
     * Get encodage
     *
     * @return \DateTime 
     */
    public function getEncodage() {
        return $this->encodage;
    }

}
