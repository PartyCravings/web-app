<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proxylist
 *
 * @ORM\Table(name="proxylist")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ProxylistRepository")
 */
class Proxylist
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
     * @ORM\Column(name="proxy", type="string", length=255)
     */
    private $proxy;

    /**
     * @var string
     *
     * @ORM\Column(name="port", type="string", length=255)
     */
    private $port;

    /**
     * @var string
     *
     * @ORM\Column(name="proxy_auth", type="string", length=255)
     */
    private $proxyAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="proxy_username", type="string", length=255)
     */
    private $proxyUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="proxy_password", type="string", length=255)
     */
    private $proxyPassword;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checked", type="datetime")
     */
    private $checked;


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
     * Set proxy
     *
     * @param string $proxy
     *
     * @return Proxylist
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;

        return $this;
    }

    /**
     * Get proxy
     *
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * Set port
     *
     * @param string $port
     *
     * @return Proxylist
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set proxyAuth
     *
     * @param string $proxyAuth
     *
     * @return Proxylist
     */
    public function setProxyAuth($proxyAuth)
    {
        $this->proxyAuth = $proxyAuth;

        return $this;
    }

    /**
     * Get proxyAuth
     *
     * @return string
     */
    public function getProxyAuth()
    {
        return $this->proxyAuth;
    }

    /**
     * Set proxyUsername
     *
     * @param string $proxyUsername
     *
     * @return Proxylist
     */
    public function setProxyUsername($proxyUsername)
    {
        $this->proxyUsername = $proxyUsername;

        return $this;
    }

    /**
     * Get proxyUsername
     *
     * @return string
     */
    public function getProxyUsername()
    {
        return $this->proxyUsername;
    }

    /**
     * Set proxyPassword
     *
     * @param string $proxyPassword
     *
     * @return Proxylist
     */
    public function setProxyPassword($proxyPassword)
    {
        $this->proxyPassword = $proxyPassword;

        return $this;
    }

    /**
     * Get proxyPassword
     *
     * @return string
     */
    public function getProxyPassword()
    {
        return $this->proxyPassword;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Proxylist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set checked
     *
     * @param \DateTime $checked
     *
     * @return Proxylist
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return \DateTime
     */
    public function getChecked()
    {
        return $this->checked;
    }
}

