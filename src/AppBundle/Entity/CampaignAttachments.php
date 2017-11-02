<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignAttachments
 *
 * @ORM\Table(name="campaign_attachments")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CampaignAttachmentsRepository")
 */
class CampaignAttachments
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
     * @ORM\ManyToOne(targetEntity="Campaigns", inversedBy="attachments")
     * @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     */
    private $campaignId;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign", type="string", length=255)
     */
    private $campaign;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=255)
     */
    private $media;

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
     * Set campaignId
     *
     * @param integer $campaignId
     *
     * @return CampaignAttachments
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return CampaignAttachments
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return CampaignAttachments
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set isAudio
     *
     * @param boolean $isAudio
     *
     * @return CampaignAttachments
     */
    public function setIsAudio($isAudio)
    {
        $this->isAudio = $isAudio;

        return $this;
    }

    /**
     * Get isAudio
     *
     * @return bool
     */
    public function getIsAudio()
    {
        return $this->isAudio;
    }

    /**
     * Set isImage
     *
     * @param boolean $isImage
     *
     * @return CampaignAttachments
     */
    public function setIsImage($isImage)
    {
        $this->isImage = $isImage;

        return $this;
    }

    /**
     * Get isImage
     *
     * @return bool
     */
    public function getIsImage()
    {
        return $this->isImage;
    }

    /**
     * Set isVideo
     *
     * @param boolean $isVideo
     *
     * @return CampaignAttachments
     */
    public function setIsVideo($isVideo)
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    /**
     * Get isVideo
     *
     * @return bool
     */
    public function getIsVideo()
    {
        return $this->isVideo;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return CampaignAttachments
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
     * @return CampaignAttachments
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
     * @return CampaignAttachments
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
     * Constructor
     */
    public function __construct()
    {
        $this->campaignId = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add campaignId
     *
     * @param \AppBundle\Entity\Campaigns $campaignId
     *
     * @return CampaignAttachments
     */
    public function addCampaignId(\AppBundle\Entity\Campaigns $campaignId)
    {
        $this->campaignId[] = $campaignId;

        return $this;
    }

    /**
     * Remove campaignId
     *
     * @param \AppBundle\Entity\Campaigns $campaignId
     */
    public function removeCampaignId(\AppBundle\Entity\Campaigns $campaignId)
    {
        $this->campaignId->removeElement($campaignId);
    }
}
