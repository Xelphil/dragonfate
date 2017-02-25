<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Weapon
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $tier;

    /**
     * @var string
     */
    private $element;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Proposal", inversedBy="propo_wea")
     */
    private $wea_propo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tier
     *
     * @param integer $tier
     *
     * @return Weapon
     */
    public function setTier($tier)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier
     *
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Set element
     *
     * @param string $element
     *
     * @return Weapon
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }
}

