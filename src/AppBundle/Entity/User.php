<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=25, unique=true)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=80)
     */
    private $pass;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ReadBy", mappedBy="read_user")
     */
    private $user_read;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Notification", mappedBy="noti_user")
     */
    private $notificacion;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Proposal", mappedBy="propo_user")
     */
    private $user_propo;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Coment", mappedBy="come_user")
     */
    private $user_come;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Task", mappedBy="task_user")
     */
    private $user_task;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Resource", mappedBy="reso_user")
     */
    private $user_reso;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Error", mappedBy="erro_user")
     */
    private $user_erro;


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
     * Set nick
     *
     * @param string $nick
     *
     * @return User
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return User
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }
}

