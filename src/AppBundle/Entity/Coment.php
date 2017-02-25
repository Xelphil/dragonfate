<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Coment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $stateProposal;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="user_come")
     */
    private $come_user;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Proposal", inversedBy="propo_come")
     */
    private $come_propo;

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
     * Set title
     *
     * @param string $title
     *
     * @return Coment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Coment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Coment
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
     * Set stateProposal
     *
     * @param integer $stateProposal
     *
     * @return Coment
     */
    public function setStateProposal($stateProposal)
    {
        $this->stateProposal = $stateProposal;

        return $this;
    }

    /**
     * Get stateProposal
     *
     * @return int
     */
    public function getStateProposal()
    {
        return $this->stateProposal;
    }
}

