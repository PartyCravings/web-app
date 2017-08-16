<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CredentialsDefault
 *
 * @ORM\Table(name="credentials_default")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CredentialsDefaultRepository")
 */
class CredentialsDefault
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
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="service_type", type="string", length=255)
     */
    private $serviceType;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\Credentials", inversedBy="credentialsDefault")
     * @ORM\JoinColumn(name="credentialsDefault", referencedColumnName="id")
     */
    private $credentialId;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return CredentialsDefault
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set serviceType
     *
     * @param string $serviceType
     *
     * @return CredentialsDefault
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Set credentialId
     *
     * @param integer $credentialId
     *
     * @return CredentialsDefault
     */
    public function setCredentialId($credentialId)
    {
        $this->credentialId = $credentialId;

        return $this;
    }

    /**
     * Get credentialId
     *
     * @return int
     */
    public function getCredentialId()
    {
        return $this->credentialId;
    }
}

