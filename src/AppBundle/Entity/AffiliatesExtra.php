<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliatesExtra
 *
 * @ORM\Table(name="affiliates_extra")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AffiliatesExtraRepository")
 */
class AffiliatesExtra
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
     * @ORM\OneToOne(targetEntity="Affiliates", mappedBy="affiliatesExtra")
     */
    private $affilliateId;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="account_type", type="string", length=255)
     */
    private $accountType;

    /**
     * @var string
     *
     * @ORM\Column(name="account_contact", type="string", length=255)
     */
    private $accountContact;

    /**
     * @var string
     *
     * @ORM\Column(name="payee_name", type="string", length=255)
     */
    private $payeeName;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_id", type="integer")
     */
    private $taxId;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_of_payment", type="string", length=255)
     */
    private $modeOfPayment;

    /**
     * @var int
     *
     * @ORM\Column(name="unique_users", type="integer")
     */
    private $uniqueUsers;

    /**
     * @var int
     *
     * @ORM\Column(name="unique_views", type="integer")
     */
    private $uniqueViews;

    /**
     * @var int
     *
     * @ORM\Column(name="page_rank", type="integer")
     */
    private $pageRank;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="help_file", type="string", length=255)
     */
    private $helpFile;


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
     * Set affilliateId
     *
     * @param integer $affilliateId
     *
     * @return AffiliatesExtra
     */
    public function setAffilliateId($affilliateId)
    {
        $this->affilliateId = $affilliateId;

        return $this;
    }

    /**
     * Get affilliateId
     *
     * @return int
     */
    public function getAffilliateId()
    {
        return $this->affilliateId;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return AffiliatesExtra
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
     * Set city
     *
     * @param string $city
     *
     * @return AffiliatesExtra
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
     * @return AffiliatesExtra
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
     * Set country
     *
     * @param string $country
     *
     * @return AffiliatesExtra
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return AffiliatesExtra
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
     * @return AffiliatesExtra
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
     * Set accountType
     *
     * @param string $accountType
     *
     * @return AffiliatesExtra
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set accountContact
     *
     * @param string $accountContact
     *
     * @return AffiliatesExtra
     */
    public function setAccountContact($accountContact)
    {
        $this->accountContact = $accountContact;

        return $this;
    }

    /**
     * Get accountContact
     *
     * @return string
     */
    public function getAccountContact()
    {
        return $this->accountContact;
    }

    /**
     * Set payeeName
     *
     * @param string $payeeName
     *
     * @return AffiliatesExtra
     */
    public function setPayeeName($payeeName)
    {
        $this->payeeName = $payeeName;

        return $this;
    }

    /**
     * Get payeeName
     *
     * @return string
     */
    public function getPayeeName()
    {
        return $this->payeeName;
    }

    /**
     * Set taxId
     *
     * @param integer $taxId
     *
     * @return AffiliatesExtra
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Get taxId
     *
     * @return int
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set modeOfPayment
     *
     * @param string $modeOfPayment
     *
     * @return AffiliatesExtra
     */
    public function setModeOfPayment($modeOfPayment)
    {
        $this->modeOfPayment = $modeOfPayment;

        return $this;
    }

    /**
     * Get modeOfPayment
     *
     * @return string
     */
    public function getModeOfPayment()
    {
        return $this->modeOfPayment;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return AffiliatesExtra
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
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return AffiliatesExtra
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set uniqueUsers
     *
     * @param integer $uniqueUsers
     *
     * @return AffiliatesExtra
     */
    public function setUniqueUsers($uniqueUsers)
    {
        $this->uniqueUsers = $uniqueUsers;

        return $this;
    }

    /**
     * Get uniqueUsers
     *
     * @return int
     */
    public function getUniqueUsers()
    {
        return $this->uniqueUsers;
    }

    /**
     * Set uniqueViews
     *
     * @param integer $uniqueViews
     *
     * @return AffiliatesExtra
     */
    public function setUniqueViews($uniqueViews)
    {
        $this->uniqueViews = $uniqueViews;

        return $this;
    }

    /**
     * Get uniqueViews
     *
     * @return int
     */
    public function getUniqueViews()
    {
        return $this->uniqueViews;
    }

    /**
     * Set pageRank
     *
     * @param integer $pageRank
     *
     * @return AffiliatesExtra
     */
    public function setPageRank($pageRank)
    {
        $this->pageRank = $pageRank;

        return $this;
    }

    /**
     * Get pageRank
     *
     * @return int
     */
    public function getPageRank()
    {
        return $this->pageRank;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return AffiliatesExtra
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
     * Set helpFile
     *
     * @param string $helpFile
     *
     * @return AffiliatesExtra
     */
    public function setHelpFile($helpFile)
    {
        $this->helpFile = $helpFile;

        return $this;
    }

    /**
     * Get helpFile
     *
     * @return string
     */
    public function getHelpFile()
    {
        return $this->helpFile;
    }
}
