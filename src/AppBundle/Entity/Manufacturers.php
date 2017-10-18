<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Manufacturers
 *
 * @ORM\Table(name="manufacturers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ManufacturersRepository")
 */
class Manufacturers
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
    * @ORM\OneToMany(targetEntity="AsoEbi", mappedBy="manufacturerId")
    */
    private $asoEbi;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinate_lat", type="decimal", precision=10, scale=0)
     */
    private $coordinateLat;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinate_long", type="decimal", precision=10, scale=0)
     */
    private $coordinateLong;

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
     * @var int
     *
     * @ORM\Column(name="promotion_id", type="integer")
     */
    private $promotionId;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var int
     *
     * @ORM\Column(name="cred_rating", type="integer")
     */
    private $credRating;

    public function __construct()
    {
        $this->asoEbi = new ArrayCollection();
    }

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
     * @return Manufacturers
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
     * Set location
     *
     * @param string $location
     *
     * @return Manufacturers
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set coordinateLat
     *
     * @param string $coordinateLat
     *
     * @return Manufacturers
     */
    public function setCoordinateLat($coordinateLat)
    {
        $this->coordinateLat = $coordinateLat;

        return $this;
    }

    /**
     * Get coordinateLat
     *
     * @return string
     */
    public function getCoordinateLat()
    {
        return $this->coordinateLat;
    }

    /**
     * Set coordinateLong
     *
     * @param string $coordinateLong
     *
     * @return Manufacturers
     */
    public function setCoordinateLong($coordinateLong)
    {
        $this->coordinateLong = $coordinateLong;

        return $this;
    }

    /**
     * Get coordinateLong
     *
     * @return string
     */
    public function getCoordinateLong()
    {
        return $this->coordinateLong;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Manufacturers
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
     * @return Manufacturers
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Manufacturers
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
     * @return Manufacturers
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
     * Set promotionId
     *
     * @param integer $promotionId
     *
     * @return Manufacturers
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
     * Set rating
     *
     * @param integer $rating
     *
     * @return Manufacturers
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
     * Set credRating
     *
     * @param integer $credRating
     *
     * @return Manufacturers
     */
    public function setCredRating($credRating)
    {
        $this->credRating = $credRating;

        return $this;
    }

    /**
     * Get credRating
     *
     * @return int
     */
    public function getCredRating()
    {
        return $this->credRating;
    }

    /**
     * Add asoEbi
     *
     * @param \AppBundle\Entity\AsoEbi $asoEbi
     *
     * @return Manufacturers
     */
    public function addAsoEbi(\AppBundle\Entity\AsoEbi $asoEbi)
    {
        $this->asoEbi[] = $asoEbi;

        return $this;
    }

    /**
     * Remove asoEbi
     *
     * @param \AppBundle\Entity\AsoEbi $asoEbi
     */
    public function removeAsoEbi(\AppBundle\Entity\AsoEbi $asoEbi)
    {
        $this->asoEbi->removeElement($asoEbi);
    }

    /**
     * Get asoEbi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsoEbi()
    {
        return $this->asoEbi;
    }
}
