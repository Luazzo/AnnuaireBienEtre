<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\User;

/**
 * Favorit
 *
 * @ORM\Table("favourit")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\FavoritRepository")
 */
class Favorit {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Favorit
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

}
