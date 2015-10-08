<?php

namespace Annuaire\BienEtreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\BienEtreBundle\Entity\User;
/**
 * Notes
 *
 * @ORM\Table("notes")
 * @ORM\Entity(repositoryClass="Annuaire\BienEtreBundle\Entity\NotesRepository")
 */
class Notes
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
     * @ORM\Column(name="idPrestataire", type="string", length=255)
     */
    private $idPrestataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\User")
     */
    private $prestataireId;
      /**
     * @ORM\ManyToOne(targetEntity="Annuaire\BienEtreBundle\Entity\User")
     */
    private $intarnautId;

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
     * Set idPrestataire
     *
     * @param string $idPrestataire
     * @return Notes
     */
    public function setIdPrestataire($idPrestataire)
    {
        $this->idPrestataire = $idPrestataire;

        return $this;
    }

    /**
     * Get idPrestataire
     *
     * @return string 
     */
    public function getIdPrestataire()
    {
        return $this->idPrestataire;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Notes
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Notes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
