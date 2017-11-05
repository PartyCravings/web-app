<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Subscriber
 *
 * @ORM\Table(name="subscriber")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Subscriber
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint", type="text")
     */
    private $endpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="browserKey", type="string")
     */
    private $browserKey;

    /**
     * @var string
     *
     * @ORM\Column(name="authSecret", type="string")
     */
    private $authSecret;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $isEnabled = true;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $account;

    public function __toString()
    {
        return $this->account;
    }



    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set endpoint
     *
     * @param string $endpoint
     *
     * @return Subscriber
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Get endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set browserKey
     *
     * @param string $browserKey
     *
     * @return Subscriber
     */
    public function setBrowserKey($browserKey)
    {
        $this->browserKey = $browserKey;

        return $this;
    }

    /**
     * Get browserKey
     *
     * @return string
     */
    public function getBrowserKey()
    {
        return $this->browserKey;
    }

    /**
     * Set authSecret
     *
     * @param string $authSecret
     *
     * @return Subscriber
     */
    public function setAuthSecret($authSecret)
    {
        $this->authSecret = $authSecret;

        return $this;
    }

    /**
     * Get authSecret
     *
     * @return string
     */
    public function getAuthSecret()
    {
        return $this->authSecret;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Subscriber
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Subscriber
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Subscriber
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Account $account
     *
     * @return Subscriber
     */
    public function setAccount(\AppBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}
