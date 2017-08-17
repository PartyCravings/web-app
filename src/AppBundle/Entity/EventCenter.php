<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventCenter
 *
 * @ORM\Table(name="event_center")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventCenterRepository")
 */
class EventCenter
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="pricing", type="string", length=255)
     */
    private $pricing;

    /**
     * @var string
     *
     * @ORM\Column(name="characteristics", type="string", length=255)
     */
    private $characteristics;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates", type="string", length=255)
     */
    private $coordinates;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_images", type="string", length=255)
     */
    private $featuredImages;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_videos", type="string", length=255)
     */
    private $featuredVideos;

    /**
     * @var string
     *
     * @ORM\Column(name="documentaries", type="string", length=255)
     */
    private $documentaries;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_services", type="string", length=255)
     */
    private $additionalServices;

    /**
     * @var string
     *
     * @ORM\Column(name="center_group", type="string", length=255)
     */
    private $centerGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="carriers", type="string", length=255, nullable=true)
     */
    private $carriers;

    /**
     * @var string
     *
     * @ORM\Column(name="customization", type="string", length=255)
     */
    private $customization;

    /**
     * @var string
     *
     * @ORM\Column(name="badge", type="string", length=255)
     */
    private $badge;

    /**
     * @var string
     *
     * @ORM\Column(name="accessory", type="string", length=255)
     */
    private $accessory;

    /**
     * @var string
     *
     * @ORM\Column(name="access", type="string", length=255)
     */
    private $access;


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
     * @return EventCenter
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
     * @return EventCenter
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
     * Set class
     *
     * @param string $class
     *
     * @return EventCenter
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
     * Set pricing
     *
     * @param string $pricing
     *
     * @return EventCenter
     */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Get pricing
     *
     * @return string
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Set characteristics
     *
     * @param string $characteristics
     *
     * @return EventCenter
     */
    public function setCharacteristics($characteristics)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Get characteristics
     *
     * @return string
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Set coordinates
     *
     * @param string $coordinates
     *
     * @return EventCenter
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set featuredImages
     *
     * @param string $featuredImages
     *
     * @return EventCenter
     */
    public function setFeaturedImages($featuredImages)
    {
        $this->featuredImages = $featuredImages;

        return $this;
    }

    /**
     * Get featuredImages
     *
     * @return string
     */
    public function getFeaturedImages()
    {
        return $this->featuredImages;
    }

    /**
     * Set featuredVideos
     *
     * @param string $featuredVideos
     *
     * @return EventCenter
     */
    public function setFeaturedVideos($featuredVideos)
    {
        $this->featuredVideos = $featuredVideos;

        return $this;
    }

    /**
     * Get featuredVideos
     *
     * @return string
     */
    public function getFeaturedVideos()
    {
        return $this->featuredVideos;
    }

    /**
     * Set documentaries
     *
     * @param string $documentaries
     *
     * @return EventCenter
     */
    public function setDocumentaries($documentaries)
    {
        $this->documentaries = $documentaries;

        return $this;
    }

    /**
     * Get documentaries
     *
     * @return string
     */
    public function getDocumentaries()
    {
        return $this->documentaries;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return EventCenter
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return EventCenter
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set additionalServices
     *
     * @param string $additionalServices
     *
     * @return EventCenter
     */
    public function setAdditionalServices($additionalServices)
    {
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * Get additionalServices
     *
     * @return string
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Set centerGroup
     *
     * @param string $centerGroup
     *
     * @return EventCenter
     */
    public function setCenterGroup($centerGroup)
    {
        $this->centerGroup = $centerGroup;

        return $this;
    }

    /**
     * Get centerGroup
     *
     * @return string
     */
    public function getCenterGroup()
    {
        return $this->centerGroup;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return EventCenter
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return EventCenter
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return EventCenter
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return EventCenter
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set carriers
     *
     * @param string $carriers
     *
     * @return EventCenter
     */
    public function setCarriers($carriers)
    {
        $this->carriers = $carriers;

        return $this;
    }

    /**
     * Get carriers
     *
     * @return string
     */
    public function getCarriers()
    {
        return $this->carriers;
    }

    /**
     * Set customization
     *
     * @param string $customization
     *
     * @return EventCenter
     */
    public function setCustomization($customization)
    {
        $this->customization = $customization;

        return $this;
    }

    /**
     * Get customization
     *
     * @return string
     */
    public function getCustomization()
    {
        return $this->customization;
    }

    /**
     * Set badge
     *
     * @param string $badge
     *
     * @return EventCenter
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge
     *
     * @return string
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Set accessory
     *
     * @param string $accessory
     *
     * @return EventCenter
     */
    public function setAccessory($accessory)
    {
        $this->accessory = $accessory;

        return $this;
    }

    /**
     * Get accessory
     *
     * @return string
     */
    public function getAccessory()
    {
        return $this->accessory;
    }

    /**
     * Set access
     *
     * @param string $access
     *
     * @return EventCenter
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }
}

