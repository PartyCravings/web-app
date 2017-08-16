<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oauth2AccessTokens
 *
 * @ORM\Table(name="oauth2_access_tokens")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\Oauth2AccessTokensRepository")
 */
class Oauth2AccessTokens
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
     * @var int
     *
     * @ORM\Column(name="token_id", type="integer")
     */
    private $tokenId;

    /**
     * @var int
     *
     * @ORM\Column(name="client_id", type="integer")
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="hashed_code", type="string", length=255)
     */
    private $hashedCode;

    /**
     * @var string
     *
     * @ORM\Column(name="encrypted_token", type="string", length=255)
     */
    private $encryptedToken;


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
     * Set tokenId
     *
     * @param integer $tokenId
     *
     * @return Oauth2AccessTokens
     */
    public function setTokenId($tokenId)
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    /**
     * Get tokenId
     *
     * @return int
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Oauth2AccessTokens
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set hashedCode
     *
     * @param string $hashedCode
     *
     * @return Oauth2AccessTokens
     */
    public function setHashedCode($hashedCode)
    {
        $this->hashedCode = $hashedCode;

        return $this;
    }

    /**
     * Get hashedCode
     *
     * @return string
     */
    public function getHashedCode()
    {
        return $this->hashedCode;
    }

    /**
     * Set encryptedToken
     *
     * @param string $encryptedToken
     *
     * @return Oauth2AccessTokens
     */
    public function setEncryptedToken($encryptedToken)
    {
        $this->encryptedToken = $encryptedToken;

        return $this;
    }

    /**
     * Get encryptedToken
     *
     * @return string
     */
    public function getEncryptedToken()
    {
        return $this->encryptedToken;
    }
}

