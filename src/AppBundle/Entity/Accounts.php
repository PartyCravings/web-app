<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountsRepository")
 */
class Accounts extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Gedmo\Slug(fields={"username","id"})
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean", nullable=true)
     */
    private $isSuspended;

    /**
    * @ORM\OneToMany(targetEntity="Affiliates", mappedBy="accountId")
    */
    private $affliates;

    /**
    * @ORM\OneToMany(targetEntity="Agency", mappedBy="accountId")
    */
    private $agency;

    /**
     * @ORM\OneToOne(targetEntity="AccountDetails", inversedBy="account")
     * @ORM\JoinColumn(name="account_detail", referencedColumnName="id")
     **/
    private $accountDetail;

    /** 
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) 
     */
    protected $facebook_id;

    /** 
     * @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) 
     */
    protected $facebook_access_token;

    /** 
     * @ORM\Column(name="google_id", type="string", length=255, nullable=true) 
     */
    protected $google_id;

    /** 
     * @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) 
     */
    protected $google_access_token;

    public function __construct()
    {
      $this->agency = new ArrayCollection();
      $this->affliates = new ArrayCollection();
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Accounts
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set facebook_id
     *
     * @param string $facebook_id
     *
     * @return Accounts
     */
    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set google_id
     *
     * @param string $google_id
     *
     * @return Accounts
     */
    public function setGoogleId($google_id)
    {
        $this->google_id = $google_id;

        return $this;
    }

    /**
     * Get google_id
     *
     * @return string
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set google_access_token
     *
     * @param string $google_access_token
     *
     * @return Accounts
     */
    public function setGoogleAccessToken($google_access_token)
    {
        $this->google_access_token = $google_access_token;

        return $this;
    }

    /**
     * Get google_access_token
     *
     * @return string
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * Set facebook_access_token
     *
     * @param string $facebook_access_token
     *
     * @return Accounts
     */
    public function setFacebookAccessToken($facebook_access_token)
    {
        $this->facebook_access_token = $facebook_access_token;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }
}
