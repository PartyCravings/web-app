<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channel
 *
 * @ORM\Table(name="channel")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ChannelRepository")
 */
class Channel
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
     * @ORM\Column(name="channel_id", type="integer")
     */
    private $channelId;

    /**
     * @var int
     *
     * @ORM\Column(name="agency_id", type="integer")
     */
    private $agencyId;

    /**
     * @var int
     *
     * @ORM\Column(name="affiliate_id", type="integer")
     */
    private $affiliateId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="compiledlimitation", type="string", length=255)
     */
    private $compiledlimitation;

    /**
     * @var string
     *
     * @ORM\Column(name="acl_plugins", type="string", length=255)
     */
    private $aclPlugins;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255)
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="acls_updated", type="datetime")
     */
    private $aclsUpdated;


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
     * Set channelId
     *
     * @param integer $channelId
     *
     * @return Channel
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Get channelId
     *
     * @return int
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Set agencyId
     *
     * @param integer $agencyId
     *
     * @return Channel
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;

        return $this;
    }

    /**
     * Get agencyId
     *
     * @return int
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * Set affiliateId
     *
     * @param integer $affiliateId
     *
     * @return Channel
     */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    /**
     * Get affiliateId
     *
     * @return int
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Channel
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
     * Set description
     *
     * @param string $description
     *
     * @return Channel
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set compiledlimitation
     *
     * @param string $compiledlimitation
     *
     * @return Channel
     */
    public function setCompiledlimitation($compiledlimitation)
    {
        $this->compiledlimitation = $compiledlimitation;

        return $this;
    }

    /**
     * Get compiledlimitation
     *
     * @return string
     */
    public function getCompiledlimitation()
    {
        return $this->compiledlimitation;
    }

    /**
     * Set aclPlugins
     *
     * @param string $aclPlugins
     *
     * @return Channel
     */
    public function setAclPlugins($aclPlugins)
    {
        $this->aclPlugins = $aclPlugins;

        return $this;
    }

    /**
     * Get aclPlugins
     *
     * @return string
     */
    public function getAclPlugins()
    {
        return $this->aclPlugins;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Channel
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Channel
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Channel
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set aclsUpdated
     *
     * @param \DateTime $aclsUpdated
     *
     * @return Channel
     */
    public function setAclsUpdated($aclsUpdated)
    {
        $this->aclsUpdated = $aclsUpdated;

        return $this;
    }

    /**
     * Get aclsUpdated
     *
     * @return \DateTime
     */
    public function getAclsUpdated()
    {
        return $this->aclsUpdated;
    }
}

