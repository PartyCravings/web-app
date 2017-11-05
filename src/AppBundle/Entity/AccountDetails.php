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
     * @ORM\ManyToMany(targetEntity="Address")
     */
    private $addresses;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string")
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
}
