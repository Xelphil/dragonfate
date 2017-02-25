<?php

namespace AppBundle\Entity;

/**
 * Armor
 */
class Armor
{
    /**
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
     * @return Armor
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
     * @return Armor
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

