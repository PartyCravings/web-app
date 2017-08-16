<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connections
 *
 * @ORM\Table(name="connections")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConnectionsRepository")
 */
class Connections
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
     * @ORM\Column(name="id_vendor_group", type="string", length=255)
     */
    private $idVendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor", type="string", length=255)
     */
    private $idVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_guest", type="string", length=255)
     */
    private $idGuest;

    /**
     * @var string
     *
     * @ORM\Column(name="id_page", type="string", length=255)
     */
    private $idPage;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=255)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referrer", type="string", length=255)
     */
    private $httpReferrer;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=255)
     */
    private $page;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;


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
     * Set idVendorGroup
     *
     * @param string $idVendorGroup
     *
     * @return Connections
     */
    public function setIdVendorGroup($idVendorGroup)
    {
        $this->idVendorGroup = $idVendorGroup;

        return $this;
    }

    /**
     * Get idVendorGroup
     *
     * @return string
     */
    public function getIdVendorGroup()
    {
        return $this->idVendorGroup;
    }

    /**
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return Connections
     */
    public function setIdVendor($idVendor)
    {
        $this->idVendor = $idVendor;

        return $this;
    }

    /**
     * Get idVendor
     *
     * @return string
     */
    public function getIdVendor()
    {
        return $this->idVendor;
    }

    /**
     * Set idGuest
     *
     * @param string $idGuest
     *
     * @return Connections
     */
    public function setIdGuest($idGuest)
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    /**
     * Get idGuest
     *
     * @return string
     */
    public function getIdGuest()
    {
        return $this->idGuest;
    }

    /**
     * Set idPage
     *
     * @param string $idPage
     *
     * @return Connections
     */
    public function setIdPage($idPage)
    {
        $this->idPage = $idPage;

        return $this;
    }

    /**
     * Get idPage
     *
     * @return string
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return Connections
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Connections
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
     * Set httpReferrer
     *
     * @param string $httpReferrer
     *
     * @return Connections
     */
    public function setHttpReferrer($httpReferrer)
    {
        $this->httpReferrer = $httpReferrer;

        return $this;
    }

    /**
     * Get httpReferrer
     *
     * @return string
     */
    public function getHttpReferrer()
    {
        return $this->httpReferrer;
    }

    /**
     * Set page
     *
     * @param string $page
     *
     * @return Connections
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Connections
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }
}

