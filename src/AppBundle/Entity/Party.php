<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Party
 *
 * @ORM\Table(name="party")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartyRepository")
 */
class Party
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
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_preregistered", type="boolean")
     */
    private $isPreregistered;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @var int
     *
     * @ORM\Column(name="vendors_groups_id", type="integer")
     */
    private $vendorsGroupsId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_secured", type="boolean")
     */
    private $isSecured;

    /**
     * @var int
     *
     * @ORM\Column(name="security_reg_id", type="integer")
     */
    private $securityRegId;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates_lat", type="decimal", precision=10, scale=0)
     */
    private $coordinatesLat;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates_long", type="decimal", precision=10, scale=0)
     */
    private $coordinatesLong;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var int
     *
     * @ORM\Column(name="party_rating", type="integer")
     */
    private $partyRating;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="preregistration_number", type="integer")
     */
    private $preregistrationNumber;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255)
     */
    private $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="rsvp", type="string", length=255)
     */
    private $rsvp;

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
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="suspended", type="boolean")
     */
    private $suspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var int
     *
     * @ORM\Column(name="total_guest", type="integer")
     */
    private $totalGuest;

    /**
     * @var string
     *
     * @ORM\Column(name="total_cost", type="decimal", precision=10, scale=0)
     */
    private $totalCost;


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
     * Set partyeditorId
     *
     * @param integer $partyeditorId
     *
     * @return Party
     */
    public function setPartyeditorId($partyeditorId)
    {
        $this->partyeditorId = $partyeditorId;

        return $this;
    }

    /**
     * Get partyeditorId
     *
     * @return int
     */
    public function getPartyeditorId()
    {
        return $this->partyeditorId;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Party
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set isPreregistered
     *
     * @param boolean $isPreregistered
     *
     * @return Party
     */
    public function setIsPreregistered($isPreregistered)
    {
        $this->isPreregistered = $isPreregistered;

        return $this;
    }

    /**
     * Get isPreregistered
     *
     * @return bool
     */
    public function getIsPreregistered()
    {
        return $this->isPreregistered;
    }

    /**
     * Set vendorsGroupsId
     *
     * @param integer $vendorsGroupsId
     *
     * @return Party
     */
    public function setVendorsGroupsId($vendorsGroupsId)
    {
        $this->vendorsGroupsId = $vendorsGroupsId;

        return $this;
    }

    /**
     * Get vendorsGroupsId
     *
     * @return int
     */
    public function getVendorsGroupsId()
    {
        return $this->vendorsGroupsId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Party
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
     * Set isSecured
     *
     * @param boolean $isSecured
     *
     * @return Party
     */
    public function setIsSecured($isSecured)
    {
        $this->isSecured = $isSecured;

        return $this;
    }

    /**
     * Get isSecured
     *
     * @return bool
     */
    public function getIsSecured()
    {
        return $this->isSecured;
    }

    /**
     * Set securityRegId
     *
     * @param integer $securityRegId
     *
     * @return Party
     */
    public function setSecurityRegId($securityRegId)
    {
        $this->securityRegId = $securityRegId;

        return $this;
    }

    /**
     * Get securityRegId
     *
     * @return int
     */
    public function getSecurityRegId()
    {
        return $this->securityRegId;
    }

    /**
     * Set coordinatesLat
     *
     * @param string $coordinatesLat
     *
     * @return Party
     */
    public function setCoordinatesLat($coordinatesLat)
    {
        $this->coordinatesLat = $coordinatesLat;

        return $this;
    }

    /**
     * Get coordinatesLat
     *
     * @return string
     */
    public function getCoordinatesLat()
    {
        return $this->coordinatesLat;
    }

    /**
     * Set coordinatesLong
     *
     * @param string $coordinatesLong
     *
     * @return Party
     */
    public function setCoordinatesLong($coordinatesLong)
    {
        $this->coordinatesLong = $coordinatesLong;

        return $this;
    }

    /**
     * Get coordinatesLong
     *
     * @return string
     */
    public function getCoordinatesLong()
    {
        return $this->coordinatesLong;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Party
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
     * Set partyRating
     *
     * @param integer $partyRating
     *
     * @return Party
     */
    public function setPartyRating($partyRating)
    {
        $this->partyRating = $partyRating;

        return $this;
    }

    /**
     * Get partyRating
     *
     * @return int
     */
    public function getPartyRating()
    {
        return $this->partyRating;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Party
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Party
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Party
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
     * Set preregistrationNumber
     *
     * @param integer $preregistrationNumber
     *
     * @return Party
     */
    public function setPreregistrationNumber($preregistrationNumber)
    {
        $this->preregistrationNumber = $preregistrationNumber;

        return $this;
    }

    /**
     * Get preregistrationNumber
     *
     * @return int
     */
    public function getPreregistrationNumber()
    {
        return $this->preregistrationNumber;
    }

    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return Party
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return int
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Party
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Party
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set rsvp
     *
     * @param string $rsvp
     *
     * @return Party
     */
    public function setRsvp($rsvp)
    {
        $this->rsvp = $rsvp;

        return $this;
    }

    /**
     * Get rsvp
     *
     * @return string
     */
    public function getRsvp()
    {
        return $this->rsvp;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Party
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
     * @return Party
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Party
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set suspended
     *
     * @param boolean $suspended
     *
     * @return Party
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Get suspended
     *
     * @return bool
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Party
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set totalGuest
     *
     * @param integer $totalGuest
     *
     * @return Party
     */
    public function setTotalGuest($totalGuest)
    {
        $this->totalGuest = $totalGuest;

        return $this;
    }

    /**
     * Get totalGuest
     *
     * @return int
     */
    public function getTotalGuest()
    {
        return $this->totalGuest;
    }

    /**
     * Set totalCost
     *
     * @param string $totalCost
     *
     * @return Party
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * Get totalCost
     *
     * @return string
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return Party
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
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Party
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
