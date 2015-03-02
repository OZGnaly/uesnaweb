<?php

namespace Uesna\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAncien
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserAncien
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
     * @ORM\Column(name="Specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="DescritToi", type="text")
     */
    private $descritToi;

    /**
     * @var string
     *
     * @ORM\Column(name="Promotion", type="string", length=255)
     */
    private $promotion;


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
     * Set specialite
     *
     * @param string $specialite
     * @return UserAncien
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return UserAncien
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set descritToi
     *
     * @param string $descritToi
     * @return UserAncien
     */
    public function setDescritToi($descritToi)
    {
        $this->descritToi = $descritToi;

        return $this;
    }

    /**
     * Get descritToi
     *
     * @return string 
     */
    public function getDescritToi()
    {
        return $this->descritToi;
    }

    /**
     * Set promotion
     *
     * @param string $promotion
     * @return UserAncien
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return string 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
}
