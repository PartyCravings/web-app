<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountDetails
 *
 * @ORM\Table(name="account_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountDetailsRepository")
 */
class AccountDetails
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
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime", nullable=true)
     */
    private $birthday;

    /**
     * @var int
     *
     * @ORM\Column(name="address_id", type="integer")
     */
    private $addressId;

    /**
     * @var int
     *
     * @ORM\Column(name="account_group_id", type="integer")
     */
    private $accountGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var int
     *
     * @ORM\Column(name="financial_id", type="integer")
     */
    private $financialId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="newsletter_id", type="integer")
     */
    private $newsletterId;

    /**
     * @var int
     *
     * @ORM\Column(name="wishlist_id", type="integer")
     */
    private $wishlistId;

    /**
     * @ORM\OneToOne(targetEntity="Accounts", mappedBy="accountDetail")
     */
    private $account;


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
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return AccountDetails
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     *
     * @return AccountDetails
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set accountGroupId
     *
     * @param integer $accountGroupId
     *
     * @return AccountDetails
     */
    public function setAccountGroupId($accountGroupId)
    {
        $this->accountGroupId = $accountGroupId;

        return $this;
    }

    /**
     * Get accountGroupId
     *
     * @return int
     */
    public function getAccountGroupId()
    {
        return $this->accountGroupId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return AccountDetails
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return AccountDetails
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return AccountDetails
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set financialId
     *
     * @param integer $financialId
     *
     * @return AccountDetails
     */
    public function setFinancialId($financialId)
    {
        $this->financialId = $financialId;

        return $this;
    }

    /**
     * Get financialId
     *
     * @return int
     */
    public function getFinancialId()
    {
        return $this->financialId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return AccountDetails
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set newsletterId
     *
     * @param integer $newsletterId
     *
     * @return AccountDetails
     */
    public function setNewsletterId($newsletterId)
    {
        $this->newsletterId = $newsletterId;

        return $this;
    }

    /**
     * Get newsletterId
     *
     * @return int
     */
    public function getNewsletterId()
    {
        return $this->newsletterId;
    }

    /**
     * Set wishlistId
     *
     * @param integer $wishlistId
     *
     * @return AccountDetails
     */
    public function setWishlistId($wishlistId)
    {
        $this->wishlistId = $wishlistId;

        return $this;
    }

    /**
     * Get wishlistId
     *
     * @return int
     */
    public function getWishlistId()
    {
        return $this->wishlistId;
    }
}

