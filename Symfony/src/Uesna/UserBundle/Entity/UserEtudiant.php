<?php

namespace Uesna\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserEtudiant
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
     * @var integer
     *
     * @ORM\Column(name="Niveau", type="integer")
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="Specialité", type="string", length=255)
     */
    private $specialité;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numcell", type="integer")
     */
    private $numcell;

    /**
     * @var string
     *
     * @ORM\Column(name="DecritToi", type="text")
     */
    private $decritToi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date")
     */
    private $dateNaissance;


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
     * Set niveau
     *
     * @param integer $niveau
     * @return UserEtudiant
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set specialité
     *
     * @param string $specialité
     * @return UserEtudiant
     */
    public function setSpecialité($specialité)
    {
        $this->specialité = $specialité;

        return $this;
    }

    /**
     * Get specialité
     *
     * @return string 
     */
    public function getSpecialité()
    {
        return $this->specialité;
    }

    /**
     * Set numcell
     *
     * @param integer $numcell
     * @return UserEtudiant
     */
    public function setNumcell($numcell)
    {
        $this->numcell = $numcell;

        return $this;
    }

    /**
     * Get numcell
     *
     * @return integer 
     */
    public function getNumcell()
    {
        return $this->numcell;
    }

    /**
     * Set decritToi
     *
     * @param string $decritToi
     * @return UserEtudiant
     */
    public function setDecritToi($decritToi)
    {
        $this->decritToi = $decritToi;

        return $this;
    }

    /**
     * Get decritToi
     *
     * @return string 
     */
    public function getDecritToi()
    {
        return $this->decritToi;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return UserEtudiant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
}
