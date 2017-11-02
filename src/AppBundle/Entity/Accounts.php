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
     * @var string
     *
     * @Gedmo\Slug(fields={"username","id"})
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean", nullable=true)
     */
    private $isSuspended;

    /**
     * @ORM\OneToOne(targetEntity="AccountDetails")
     * @ORM\JoinColumn(name="account_detail", referencedColumnName="id")
     **/
    private $accountDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    protected $facebook_id;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true)
     */
    protected $facebook_access_token;

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", length=255, nullable=true)
     */
    protected $google_id;

    /**
     * @var string
     *
     * @ORM\Column(name="google_access_token", type="string", length=255, nullable=true)
     */
    protected $google_access_token;

    /**
     * Accounts constructor.
     */
    public function __construct()
    {
        parent::__construct();
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

    /**
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return bool
     */
    public function isSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * @param bool $isSuspended
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getAccountDetail()
    {
        return $this->accountDetail;
    }

    /**
     * @param mixed $accountDetail
     */
    public function setAccountDetail($accountDetail)
    {
        $this->accountDetail = $accountDetail;
    }

    /**
     * @return mixed
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }

    /**
     * @param mixed $affiliates
     */
    public function setAffiliates($affiliates)
    {
        $this->affiliates = $affiliates;
    }

    /**
     * Get isSuspended
     *
     * @return boolean
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Add affiliate
     *
     * @param \AppBundle\Entity\Affiliates $affiliate
     *
     * @return Accounts
     */
    public function addAffiliate(\AppBundle\Entity\Affiliates $affiliate)
    {
        $this->affiliates[] = $affiliate;

        return $this;
    }

    /**
     * Remove affiliate
     *
     * @param \AppBundle\Entity\Affiliates $affiliate
     */
    public function removeAffiliate(\AppBundle\Entity\Affiliates $affiliate)
    {
        $this->affiliates->removeElement($affiliate);
    }

    /**
     * Add agency
     *
     * @param \AppBundle\Entity\Agency $agency
     *
     * @return Accounts
     */
    public function addAgency(\AppBundle\Entity\Agency $agency)
    {
        $this->agency[] = $agency;

        return $this;
    }

    /**
     * Remove agency
     *
     * @param \AppBundle\Entity\Agency $agency
     */
    public function removeAgency(\AppBundle\Entity\Agency $agency)
    {
        $this->agency->removeElement($agency);
    }

    /**
     * Get agency
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Add liveParty
     *
     * @param \AppBundle\Entity\LiveParties $liveParty
     *
     * @return Accounts
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
     * Get liveParties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLiveParties()
    {
        return $this->liveParties;
    }

    /**
     * Add accessToken
     *
     * @param \AppBundle\Entity\AccessToken $accessToken
     *
     * @return Accounts
     */
    public function addAccessToken(\AppBundle\Entity\AccessToken $accessToken)
    {
        $this->accessTokens[] = $accessToken;

        return $this;
    }

    /**
     * Remove accessToken
     *
     * @param \AppBundle\Entity\AccessToken $accessToken
     */
    public function removeAccessToken(\AppBundle\Entity\AccessToken $accessToken)
    {
        $this->accessTokens->removeElement($accessToken);
    }

    /**
     * Get accessTokens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccessTokens()
    {
        return $this->accessTokens;
    }
}
