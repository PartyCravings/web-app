<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oauth2Clients
 *
 * @ORM\Table(name="oauth2_clients")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\Oauth2ClientsRepository")
 */
class Oauth2Clients
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_uri", type="string", length=255)
     */
    private $redirectUri;

    /**
     * @var string
     *
     * @ORM\Column(name="client_identifier", type="string", length=255)
     */
    private $clientIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255)
     */
    private $secret;


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
     * @return Oauth2Clients
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
     * Set redirectUri
     *
     * @param string $redirectUri
     *
     * @return Oauth2Clients
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    /**
     * Get redirectUri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * Set clientIdentifier
     *
     * @param string $clientIdentifier
     *
     * @return Oauth2Clients
     */
    public function setClientIdentifier($clientIdentifier)
    {
        $this->clientIdentifier = $clientIdentifier;

        return $this;
    }

    /**
     * Get clientIdentifier
     *
     * @return string
     */
    public function getClientIdentifier()
    {
        return $this->clientIdentifier;
    }

    /**
     * Set secret
     *
     * @param string $secret
     *
     * @return Oauth2Clients
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }
}

