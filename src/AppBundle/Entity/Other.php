<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Other
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $extraData1;

    /**
     * @var string
     */
    private $extraData2;

    /**
     * @var string
     */
    private $extraData3;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Proposal", inversedBy="propo_othe")
     */
    private $othe_propo;

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
     * Set extraData1
     *
     * @param string $extraData1
     *
     * @return Other
     */
    public function setExtraData1($extraData1)
    {
        $this->extraData1 = $extraData1;

        return $this;
    }

    /**
     * Get extraData1
     *
     * @return string
     */
    public function getExtraData1()
    {
        return $this->extraData1;
    }

    /**
     * Set extraData2
     *
     * @param string $extraData2
     *
     * @return Other
     */
    public function setExtraData2($extraData2)
    {
        $this->extraData2 = $extraData2;

        return $this;
    }

    /**
     * Get extraData2
     *
     * @return string
     */
    public function getExtraData2()
    {
        return $this->extraData2;
    }

    /**
     * Set extraData3
     *
     * @param string $extraData3
     *
     * @return Other
     */
    public function setExtraData3($extraData3)
    {
        $this->extraData3 = $extraData3;

        return $this;
    }

    /**
     * Get extraData3
     *
     * @return string
     */
    public function getExtraData3()
    {
        return $this->extraData3;
    }
}

