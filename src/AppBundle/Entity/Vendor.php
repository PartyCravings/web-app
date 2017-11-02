<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Vendor
 *
 * @ORM\Table(name="vendor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VendorRepository")
 */
class Vendor
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
     * @ORM\OneToOne(targetEntity="VendorDescriptons")
     * @ORM\JoinColumn(name="vendorDescriptions", referencedColumnName="id")
    */
    private $vendorDescription;

    /**
     * @ORM\OneToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="account_id", referencedColumnName="id", nullable=false)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var Service
     *
     * @ORM\OneToMany(targetEntity="Service", mappedBy="vendor")
     * @ORM\JoinColumn(name="services", referencedColumnName="id")
     */
    private $services;


    public function __construct()
    {
        $this->services = new ArrayCollection();
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
     * Set idState
     *
     * @param string $idState
     *
     * @return Vendor
     */
    public function setIdState($idState)
    {
        $this->idState = $idState;

        return $this;
    }

    /**
     * Get idState
     *
     * @return string
     */
    public function getIdState()
    {
        return $this->idState;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Vendor
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
     * Set address1
     *
     * @param string $address1
     *
     * @return Vendor
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Vendor
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Vendor
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Vendor
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Vendor
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Vendor
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set hours
     *
     * @param string $hours
     *
     * @return Vendor
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return string
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Vendor
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Vendor
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Vendor
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
     * Set note
     *
     * @param string $note
     *
     * @return Vendor
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Vendor
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Vendor
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param string $dateUpd
     *
     * @return Vendor
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set suspended
     *
     * @param string $suspended
     *
     * @return Vendor
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Get suspended
     *
     * @return string
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Vendor
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
     * @return mixed
     */
    public function getLiveParties()
    {
        return $this->liveParties;
    }

    /**
     * @param mixed $liveParties
     */
    public function setLiveParties($liveParties)
    {
        $this->liveParties = $liveParties;
    }

    /**
     * Add asoEbi
     *
     * @param \AppBundle\Entity\AsoEbi $asoEbi
     *
     * @return Vendor
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

    /**
     * Set vendorDescription
     *
     * @param \AppBundle\Entity\VendorDescriptons $vendorDescription
     *
     * @return Vendor
     */
    public function setVendorDescription(\AppBundle\Entity\VendorDescriptons $vendorDescription = null)
    {
        $this->vendorDescription = $vendorDescription;

        return $this;
    }

    /**
     * Get vendorDescription
     *
     * @return \AppBundle\Entity\VendorDescriptons
     */
    public function getVendorDescription()
    {
        return $this->vendorDescription;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Accounts $account
     *
     * @return Vendor
     */
    public function setAccount(\AppBundle\Entity\Accounts $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Add liveParty
     *
     * @param \AppBundle\Entity\LiveParties $liveParty
     *
     * @return Vendor
     */
    public function addLiveParty(\AppBundle\Entity\LiveParties $liveParty)
    {
        $this->liveParties[] = $liveParty;

        return $this;
    }

    /**
     * Remove liveParty
     *
     * @param \AppBundle\Entity\LiveParties $liveParty
     */
    public function removeLiveParty(\AppBundle\Entity\LiveParties $liveParty)
    {
        $this->liveParties->removeElement($liveParty);
    }

    /**
     * Add service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return Vendor
     */
    public function addService(\AppBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \AppBundle\Entity\Service $service
     */
    public function removeService(\AppBundle\Entity\Service $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Vendor
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
}
