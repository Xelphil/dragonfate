<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ReadBy
{
    /**
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="user_read")
     */
    private $read_user;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Notification", inversedBy="noti_read")
     */
    private $read_noti;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

