<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\IpTraceable\Traits\IpTraceableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AccountDetails.
 *
 * @ORM\Table(name="account_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountDetailsRepository")
 */
class AccountDetails
{
    /*
     * Hook ip-traceable behavior
     * updates createdFromIp, updatedFromIp fields
     */
    use IpTraceableEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
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
     * @Assert\Count(max="4", maxMessage="address.too_many_address")
     * @ORM\ManyToMany(targetEntity="Address")
     */
    private $addresses;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", nullable=true)
     */
    private $lastname;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter_signed", type="boolean")
     */
    private $newsletterSigned = false;

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

    public function __toString()
    {
        return $this->addresses;
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set birthday.
     *
     * @param date_immutable $birthday
     *
     * @return AccountDetails
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday.
     *
     * @return date_immutable
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set firstname.
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
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
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
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set newsletterSigned.
     *
     * @param bool $newsletterSigned
     *
     * @return AccountDetails
     */
    public function setNewsletterSigned($newsletterSigned)
    {
        $this->newsletterSigned = $newsletterSigned;

        return $this;
    }

    /**
     * Get newsletterSigned.
     *
     * @return bool
     */
    public function getNewsletterSigned()
    {
        return $this->newsletterSigned;
    }

    /**
     * Add address.
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
     * Remove address.
     *
     * @param \AppBundle\Entity\Address $address
     */
    public function removeAddress(\AppBundle\Entity\Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
     * Get addresses.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add wishlist.
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
     * Remove wishlist.
     *
     * @param \AppBundle\Entity\Service $wishlist
     */
    public function removeWishlist(\AppBundle\Entity\Service $wishlist)
    {
        $this->wishlist->removeElement($wishlist);
    }

    /**
     * Get wishlist.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }
}
