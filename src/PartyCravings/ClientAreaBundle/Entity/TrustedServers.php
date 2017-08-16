<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrustedServers
 *
 * @ORM\Table(name="trusted_servers")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\TrustedServersRepository")
 */
class TrustedServers
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="url_hash", type="string", length=255)
     */
    private $urlHash;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="shared_secret", type="string", length=255)
     */
    private $sharedSecret;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="sync_token", type="string", length=255)
     */
    private $syncToken;


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
     * Set url
     *
     * @param string $url
     *
     * @return TrustedServers
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

    /**
     * Set urlHash
     *
     * @param string $urlHash
     *
     * @return TrustedServers
     */
    public function setUrlHash($urlHash)
    {
        $this->urlHash = $urlHash;

        return $this;
    }

    /**
     * Get urlHash
     *
     * @return string
     */
    public function getUrlHash()
    {
        return $this->urlHash;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return TrustedServers
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set sharedSecret
     *
     * @param string $sharedSecret
     *
     * @return TrustedServers
     */
    public function setSharedSecret($sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;

        return $this;
    }

    /**
     * Get sharedSecret
     *
     * @return string
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return TrustedServers
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
     * Set syncToken
     *
     * @param string $syncToken
     *
     * @return TrustedServers
     */
    public function setSyncToken($syncToken)
    {
        $this->syncToken = $syncToken;

        return $this;
    }

    /**
     * Get syncToken
     *
     * @return string
     */
    public function getSyncToken()
    {
        return $this->syncToken;
    }
}

