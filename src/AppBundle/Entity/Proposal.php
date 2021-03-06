<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Proposal
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
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $state;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="user_propo")
     */
    private $propo_user;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Weapon", mappedBy="wea_propo")
     */
    private $propo_wea;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Armor", mappedBy="armo_propo")
     */
    private $propo_armo;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Skill", mappedBy="skil_propo")
     */
    private $propo_skil;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Coment", mappedBy="come_propo")
     */
    private $propo_come;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Other", mappedBy="othe_propo")
     */
    private $propo_othe;


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
     * Set name
     *
     * @param string $name
     *
     * @return Proposal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Proposal
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Proposal
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proposal
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Proposal
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

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Proposal
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

