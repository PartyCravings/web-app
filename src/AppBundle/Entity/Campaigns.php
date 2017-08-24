<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaigns
 *
 * @ORM\Table(name="campaigns")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CampaignsRepository")
 */
class Campaigns
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
     * @ORM\Column(name="master_id", type="integer")
     */
    private $masterId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="name_id", type="integer")
     */
    private $nameId;

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_to", type="string", length=255)
     */
    private $assignedTo;

    /**
     * @var int
     *
     * @ORM\Column(name="list_id", type="integer")
     */
    private $listId;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="CampaignAttachments", inversedBy="campaignId")
     * @ORM\JoinColumn(name="campaignAttachments",referencedColumnName="id")
     */
    private $attachments;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255)
     */
    private $createdBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="complete", type="boolean")
     */
    private $complete;

    /**
     * @var int
     *
     * @ORM\Column(name="visibility", type="integer")
     */
    private $visibility;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="launch_date", type="datetime")
     */
    private $launchDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_activity", type="datetime")
     */
    private $lastActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255)
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="send_as", type="string", length=255)
     */
    private $sendAs;

    /**
     * @var string
     *
     * @ORM\Column(name="enable_redirect_links", type="string", length=255)
     */
    private $enableRedirectLinks;

    /**
     * @var string
     *
     * @ORM\Column(name="open_rate", type="string", length=255)
     */
    private $openRate;

    /**
     * @var string
     *
     * @ORM\Column(name="click_rate", type="string", length=255)
     */
    private $clickRate;

    /**
     * @var string
     *
     * @ORM\Column(name="unsubscribe_rate", type="string", length=255)
     */
    private $unsubscribeRate;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;


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
     * Set masterId
     *
     * @param integer $masterId
     *
     * @return Campaigns
     */
    public function setMasterId($masterId)
    {
        $this->masterId = $masterId;

        return $this;
    }

    /**
     * Get masterId
     *
     * @return int
     */
    public function getMasterId()
    {
        return $this->masterId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Campaigns
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
     * Set nameId
     *
     * @param integer $nameId
     *
     * @return Campaigns
     */
    public function setNameId($nameId)
    {
        $this->nameId = $nameId;

        return $this;
    }

    /**
     * Get nameId
     *
     * @return int
     */
    public function getNameId()
    {
        return $this->nameId;
    }

    /**
     * Set assignedTo
     *
     * @param string $assignedTo
     *
     * @return Campaigns
     */
    public function setAssignedTo($assignedTo)
    {
        $this->assignedTo = $assignedTo;

        return $this;
    }

    /**
     * Get assignedTo
     *
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->assignedTo;
    }

    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return Campaigns
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Campaigns
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
     * Set description
     *
     * @param string $description
     *
     * @return Campaigns
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
     * Set type
     *
     * @param string $type
     *
     * @return Campaigns
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Campaigns
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return Campaigns
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Campaigns
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Campaigns
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Campaigns
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set complete
     *
     * @param boolean $complete
     *
     * @return Campaigns
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set visibility
     *
     * @param integer $visibility
     *
     * @return Campaigns
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Campaigns
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set launchDate
     *
     * @param \DateTime $launchDate
     *
     * @return Campaigns
     */
    public function setLaunchDate($launchDate)
    {
        $this->launchDate = $launchDate;

        return $this;
    }

    /**
     * Get launchDate
     *
     * @return \DateTime
     */
    public function getLaunchDate()
    {
        return $this->launchDate;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Campaigns
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     *
     * @return Campaigns
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return Campaigns
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set sendAs
     *
     * @param string $sendAs
     *
     * @return Campaigns
     */
    public function setSendAs($sendAs)
    {
        $this->sendAs = $sendAs;

        return $this;
    }

    /**
     * Get sendAs
     *
     * @return string
     */
    public function getSendAs()
    {
        return $this->sendAs;
    }

    /**
     * Set enableRedirectLinks
     *
     * @param string $enableRedirectLinks
     *
     * @return Campaigns
     */
    public function setEnableRedirectLinks($enableRedirectLinks)
    {
        $this->enableRedirectLinks = $enableRedirectLinks;

        return $this;
    }

    /**
     * Get enableRedirectLinks
     *
     * @return string
     */
    public function getEnableRedirectLinks()
    {
        return $this->enableRedirectLinks;
    }

    /**
     * Set openRate
     *
     * @param string $openRate
     *
     * @return Campaigns
     */
    public function setOpenRate($openRate)
    {
        $this->openRate = $openRate;

        return $this;
    }

    /**
     * Get openRate
     *
     * @return string
     */
    public function getOpenRate()
    {
        return $this->openRate;
    }

    /**
     * Set clickRate
     *
     * @param string $clickRate
     *
     * @return Campaigns
     */
    public function setClickRate($clickRate)
    {
        $this->clickRate = $clickRate;

        return $this;
    }

    /**
     * Get clickRate
     *
     * @return string
     */
    public function getClickRate()
    {
        return $this->clickRate;
    }

    /**
     * Set unsubscribeRate
     *
     * @param string $unsubscribeRate
     *
     * @return Campaigns
     */
    public function setUnsubscribeRate($unsubscribeRate)
    {
        $this->unsubscribeRate = $unsubscribeRate;

        return $this;
    }

    /**
     * Get unsubscribeRate
     *
     * @return string
     */
    public function getUnsubscribeRate()
    {
        return $this->unsubscribeRate;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Campaigns
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return Campaigns
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;

        return $this;
    }

    /**
     * Get isSuspended
     *
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Campaigns
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @return string
     */
    public function getAttachments(): string
    {
        return $this->attachments;
    }

    /**
     * @param string $attachments
     */
    public function setAttachments(string $attachments)
    {
        $this->attachments = $attachments;
    }
}
