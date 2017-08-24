<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 */
class Country
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
    * @ORM\OneToMany(targetEntity="AsoEbi", mappedBy="countryId")
    */
    private $asoEbi;

    /**
    * @ORM\OneToMany(targetEntity="Party", mappedBy="countryId")
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Zones", mappedBy="countryId")
     */
    private $idZone;

    /**
     * @var string
     *
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=255)
     */
    private $isoCode;

    /**
     * @var string
     *
     * @ORM\Column(name="call_prefix", type="string", length=255)
     */
    private $callPrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="contains_states", type="string", length=255)
     */
    private $containsStates;

    /**
     * @var string
     *
     * @ORM\Column(name="need_identification_nr", type="string", length=255)
     */
    private $needIdentificationNr;

    /**
     * @var string
     *
     * @ORM\Column(name="need_zip_code", type="string", length=255)
     */
    private $needZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code_format", type="string", length=255)
     */
    private $zipCodeFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="display_tax_label", type="string", length=255)
     */
    private $displayTaxLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;

    /**
    * @ORM\OneToMany(targetEntity="Affiliates", mappedBy="countryId")
    */
    private $affiliates;


    public function __construct()
    {
        $this->affiliates = new ArrayCollection();
        $this->asoEbi = new ArrayCollection();
        $this->party = new ArrayCollection();
        $this->idZone = new ArrayCollection();
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
     * Set idZone
     *
     * @param string $idZone
     *
     * @return Country
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * Get idZone
     *
     * @return string
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return Country
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return string
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set isoCode
     *
     * @param string $isoCode
     *
     * @return Country
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set callPrefix
     *
     * @param string $callPrefix
     *
     * @return Country
     */
    public function setCallPrefix($callPrefix)
    {
        $this->callPrefix = $callPrefix;

        return $this;
    }

    /**
     * Get callPrefix
     *
     * @return string
     */
    public function getCallPrefix()
    {
        return $this->callPrefix;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Country
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
     * Set containsStates
     *
     * @param string $containsStates
     *
     * @return Country
     */
    public function setContainsStates($containsStates)
    {
        $this->containsStates = $containsStates;

        return $this;
    }

    /**
     * Get containsStates
     *
     * @return string
     */
    public function getContainsStates()
    {
        return $this->containsStates;
    }

    /**
     * Set needIdentificationNr
     *
     * @param string $needIdentificationNr
     *
     * @return Country
     */
    public function setNeedIdentificationNr($needIdentificationNr)
    {
        $this->needIdentificationNr = $needIdentificationNr;

        return $this;
    }

    /**
     * Get needIdentificationNr
     *
     * @return string
     */
    public function getNeedIdentificationNr()
    {
        return $this->needIdentificationNr;
    }

    /**
     * Set needZipCode
     *
     * @param string $needZipCode
     *
     * @return Country
     */
    public function setNeedZipCode($needZipCode)
    {
        $this->needZipCode = $needZipCode;

        return $this;
    }

    /**
     * Get needZipCode
     *
     * @return string
     */
    public function getNeedZipCode()
    {
        return $this->needZipCode;
    }

    /**
     * Set zipCodeFormat
     *
     * @param string $zipCodeFormat
     *
     * @return Country
     */
    public function setZipCodeFormat($zipCodeFormat)
    {
        $this->zipCodeFormat = $zipCodeFormat;

        return $this;
    }

    /**
     * Get zipCodeFormat
     *
     * @return string
     */
    public function getZipCodeFormat()
    {
        return $this->zipCodeFormat;
    }

    /**
     * Set displayTaxLabel
     *
     * @param string $displayTaxLabel
     *
     * @return Country
     */
    public function setDisplayTaxLabel($displayTaxLabel)
    {
        $this->displayTaxLabel = $displayTaxLabel;

        return $this;
    }

    /**
     * Get displayTaxLabel
     *
     * @return string
     */
    public function getDisplayTaxLabel()
    {
        return $this->displayTaxLabel;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Country
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Country
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
}
