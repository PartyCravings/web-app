<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\IpTraceable\Traits\IpTraceableEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AccountDetails
 *
 * @ORM\Table(name="account_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountDetailsRepository")
 */
class AccountDetails
{
    /**
     * Hook ip-traceable behavior
     * updates createdFromIp, updatedFromIp fields
     */
    use IpTraceableEntity;

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
     * @ORM\Column(name="birthday", type="date_immutable", nullable=true)
     */
    private $birthday;

    /**
     * @var Address
     *
     * @ORM\ManyToMany(targetEntity="Address")
     */
    private $addresses;

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
     * @var bool
     *
     * @ORM\Column(name="newsletter_signed", type="boolean")
     */
    private $newsletterSigned;

    /**
     * @var Service
     *
     * @ORM\ManyToMany(targetEntity="Service")
     */
    private $wishlist;


    public function __construct()
    {
        $this->addresses = new ArrayCollection();
        $this->wishlist = new ArrayCollection();
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

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * Add address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return AccountDetails
     */
    public function addAddress(\AppBundle\Entity\Address $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \AppBundle\Entity\Address $address
     */
    public function removeAddress(\AppBundle\Entity\Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Set newsletterSigned
     *
     * @param boolean $newsletterSigned
     *
     * @return AccountDetails
     */
    public function setNewsletterSigned($newsletterSigned)
    {
        $this->newsletterSigned = $newsletterSigned;

        return $this;
    }

    /**
     * Get newsletterSigned
     *
     * @return boolean
     */
    public function getNewsletterSigned()
    {
        return $this->newsletterSigned;
    }

    /**
     * Add wishlist
     *
     * @param \AppBundle\Entity\Service $wishlist
     *
     * @return AccountDetails
     */
    public function addWishlist(\AppBundle\Entity\Service $wishlist)
    {
        $this->wishlist[] = $wishlist;

        return $this;
    }

    /**
     * Remove wishlist
     *
     * @param \AppBundle\Entity\Service $wishlist
     */
    public function removeWishlist(\AppBundle\Entity\Service $wishlist)
    {
        $this->wishlist->removeElement($wishlist);
    }

    /**
     * Get wishlist
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }
}
