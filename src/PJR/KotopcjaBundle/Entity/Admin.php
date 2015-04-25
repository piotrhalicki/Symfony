<?php

namespace PJR\KotopcjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PJR\KotopcjaBundle\Entity\AdminRepository")
 */
class Admin
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
     * @ORM\Column(name="admin_login", type="string", length=255)
     */
    private $adminLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_pass", type="string", length=255)
     */
    private $adminPass;

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
     * Set adminLogin
     *
     * @param string $adminLogin
     * @return Admin
     */
    public function setAdminLogin($adminLogin)
    {
        $this->adminLogin = $adminLogin;

        return $this;
    }

    /**
     * Get adminLogin
     *
     * @return string 
     */
    public function getAdminLogin()
    {
        return $this->adminLogin;
    }

    /**
     * Set adminPass
     *
     * @param string $adminPass
     * @return Admin
     */
    public function setAdminPass($adminPass)
    {
        $this->adminPass = $adminPass;

        return $this;
    }

    /**
     * Get adminPass
     *
     * @return string 
     */
    public function getAdminPass()
    {
        return $this->adminPass;
    }
}
