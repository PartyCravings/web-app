<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CateringServiceOrders
 *
 * @ORM\Table(name="catering_service_orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CateringServiceOrdersRepository")
 */
class CateringServiceOrders
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
     * @ORM\Column(name="featured_image", type="string", length=255)
     */
    private $featuredImage;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_video", type="string", length=255)
     */
    private $featuredVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="characteristics", type="string", length=255)
     */
    private $characteristics;

    /**
     * @var string
     *
     * @ORM\Column(name="customization", type="string", length=255)
     */
    private $customization;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="string", length=255)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="badge", type="string", length=255)
     */
    private $badge;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=255)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="pricing", type="string", length=255)
     */
    private $pricing;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255)
     */
    private $currency;


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
     * @return CateringServiceOrders
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
     * Set featuredImage
     *
     * @param string $featuredImage
     *
     * @return CateringServiceOrders
     */
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;

        return $this;
    }

    /**
     * Get featuredImage
     *
     * @return string
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }

    /**
     * Set featuredVideo
     *
     * @param string $featuredVideo
     *
     * @return CateringServiceOrders
     */
    public function setFeaturedVideo($featuredVideo)
    {
        $this->featuredVideo = $featuredVideo;

        return $this;
    }

    /**
     * Get featuredVideo
     *
     * @return string
     */
    public function getFeaturedVideo()
    {
        return $this->featuredVideo;
    }

    /**
     * Set characteristics
     *
     * @param string $characteristics
     *
     * @return CateringServiceOrders
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
     * Set customization
     *
     * @param string $customization
     *
     * @return CateringServiceOrders
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
     * Set address
     *
     * @param string $address
     *
     * @return CateringServiceOrders
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
     * Set contact
     *
     * @param string $contact
     *
     * @return CateringServiceOrders
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return CateringServiceOrders
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
     * Set about
     *
     * @param string $about
     *
     * @return CateringServiceOrders
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set badge
     *
     * @param string $badge
     *
     * @return CateringServiceOrders
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
     * Set rating
     *
     * @param string $rating
     *
     * @return CateringServiceOrders
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return CateringServiceOrders
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
     * Set pricing
     *
     * @param string $pricing
     *
     * @return CateringServiceOrders
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
     * Set currency
     *
     * @param string $currency
     *
     * @return CateringServiceOrders
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
}

