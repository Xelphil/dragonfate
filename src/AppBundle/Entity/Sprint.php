<?php

namespace AppBundle\Entity;

/**
 * Sprint
 */
class Sprint
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $version;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var int
     */
    private $totalCost;

    /**
     * @var int
     */
    private $doneCost;


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
     * Set version
     *
     * @param string $version
     *
     * @return Sprint
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Sprint
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Sprint
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set totalCost
     *
     * @param integer $totalCost
     *
     * @return Sprint
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * Get totalCost
     *
     * @return int
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * Set doneCost
     *
     * @param integer $doneCost
     *
     * @return Sprint
     */
    public function setDoneCost($doneCost)
    {
        $this->doneCost = $doneCost;

        return $this;
    }

    /**
     * Get doneCost
     *
     * @return int
     */
    public function getDoneCost()
    {
        return $this->doneCost;
    }
}

