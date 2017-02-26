<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 */
class User implements UserInterface
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
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=80)
     */
    private $password;

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {

    }
    public function getRoles()
    {
    }
}

