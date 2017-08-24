<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiveParties
 *
 * @ORM\Table(name="live_parties")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LivePartiesRepository")
 */
class LiveParties
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
     * @ORM\Column(name="party_id", type="integer")
     */
    private $partyId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer", inversedBy="liveParties")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vendor", inversedBy="liveParties")
     * @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     */
    private $vendorId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\VendorGroups", inversedBy="liveParties")
     * @ORM\JoinColumn(name="vendorGroup_id", referencedColumnName="id")
     */
    private $vendorGroupId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PartyUrls", inversedBy="liveParties")
     * @ORM\JoinColumn(name="partyUrl_id", referencedColumnName="id")
     */
    private $partyUrlId;

    /**
     * @var string
     *
     * @ORM\Column(name="live_url", type="string", length=255)
     */
    private $liveUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_live", type="boolean")
     */
    private $isLive;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_promoted", type="boolean")
     */
    private $isPromoted;

    /**
     * @var int
     *
     * @ORM\Column(name="promotion_id", type="integer")
     */
    private $promotionId;

    /**
     * @var int
     *
     * @ORM\Column(name="viewing_currently", type="integer")
     */
    private $viewingCurrently;

    /**
     * @var string
     *
     * @ORM\Column(name="viewers_ipadd", type="string", length=255)
     */
    private $viewersIpadd;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255)
     */
    private $comments;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="stars", type="string", length=255)
     */
    private $stars;

    /**
     * @var string
     *
     * @ORM\Column(name="stars_actual", type="string", length=255)
     */
    private $starsActual;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_img", type="string", length=255)
     */
    private $featuredImg;


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
     * Set partyId
     *
     * @param integer $partyId
     *
     * @return LiveParties
     */
    public function setPartyId($partyId)
    {
        $this->partyId = $partyId;

        return $this;
    }

    /**
     * Get partyId
     *
     * @return int
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return LiveParties
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return LiveParties
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Set vendorGroupId
     *
     * @param integer $vendorGroupId
     *
     * @return LiveParties
     */
    public function setVendorGroupId($vendorGroupId)
    {
        $this->vendorGroupId = $vendorGroupId;

        return $this;
    }

    /**
     * Get vendorGroupId
     *
     * @return int
     */
    public function getVendorGroupId()
    {
        return $this->vendorGroupId;
    }

    /**
     * Set partyUrlId
     *
     * @param integer $partyUrlId
     *
     * @return LiveParties
     */
    public function setPartyUrlId($partyUrlId)
    {
        $this->partyUrlId = $partyUrlId;

        return $this;
    }

    /**
     * Get partyUrlId
     *
     * @return int
     */
    public function getPartyUrlId()
    {
        return $this->partyUrlId;
    }

    /**
     * Set liveUrl
     *
     * @param string $liveUrl
     *
     * @return LiveParties
     */
    public function setLiveUrl($liveUrl)
    {
        $this->liveUrl = $liveUrl;

        return $this;
    }

    /**
     * Get liveUrl
     *
     * @return string
     */
    public function getLiveUrl()
    {
        return $this->liveUrl;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return LiveParties
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
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return LiveParties
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
     * Set isLive
     *
     * @param boolean $isLive
     *
     * @return LiveParties
     */
    public function setIsLive($isLive)
    {
        $this->isLive = $isLive;

        return $this;
    }

    /**
     * Get isLive
     *
     * @return bool
     */
    public function getIsLive()
    {
        return $this->isLive;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return LiveParties
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set isPromoted
     *
     * @param boolean $isPromoted
     *
     * @return LiveParties
     */
    public function setIsPromoted($isPromoted)
    {
        $this->isPromoted = $isPromoted;

        return $this;
    }

    /**
     * Get isPromoted
     *
     * @return bool
     */
    public function getIsPromoted()
    {
        return $this->isPromoted;
    }

    /**
     * Set promotionId
     *
     * @param integer $promotionId
     *
     * @return LiveParties
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get promotionId
     *
     * @return int
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * Set viewingCurrently
     *
     * @param integer $viewingCurrently
     *
     * @return LiveParties
     */
    public function setViewingCurrently($viewingCurrently)
    {
        $this->viewingCurrently = $viewingCurrently;

        return $this;
    }

    /**
     * Get viewingCurrently
     *
     * @return int
     */
    public function getViewingCurrently()
    {
        return $this->viewingCurrently;
    }

    /**
     * Set viewersIpadd
     *
     * @param string $viewersIpadd
     *
     * @return LiveParties
     */
    public function setViewersIpadd($viewersIpadd)
    {
        $this->viewersIpadd = $viewersIpadd;

        return $this;
    }

    /**
     * Get viewersIpadd
     *
     * @return string
     */
    public function getViewersIpadd()
    {
        return $this->viewersIpadd;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return LiveParties
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
     * Set rating
     *
     * @param integer $rating
     *
     * @return LiveParties
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set stars
     *
     * @param string $stars
     *
     * @return LiveParties
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return string
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set starsActual
     *
     * @param string $starsActual
     *
     * @return LiveParties
     */
    public function setStarsActual($starsActual)
    {
        $this->starsActual = $starsActual;

        return $this;
    }

    /**
     * Get starsActual
     *
     * @return string
     */
    public function getStarsActual()
    {
        return $this->starsActual;
    }

    /**
     * Set featuredImg
     *
     * @param string $featuredImg
     *
     * @return LiveParties
     */
    public function setFeaturedImg($featuredImg)
    {
        $this->featuredImg = $featuredImg;

        return $this;
    }

    /**
     * Get featuredImg
     *
     * @return string
     */
    public function getFeaturedImg()
    {
        return $this->featuredImg;
    }
}
