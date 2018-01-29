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
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Account.
 *
 * @ORM\Table(name="account")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountRepository")
 */
class Account extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    protected $facebook_id;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_access_token", type="string", nullable=true)
     */
    protected $facebook_access_token;

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    protected $google_id;

    /**
     * @var string
     *
     * @ORM\Column(name="google_access_token", type="string", nullable=true)
     */
    protected $google_access_token;

    /**
     * @var AccountDetails
     *
     * @ORM\OneToOne(targetEntity="AccountDetails")
     */
    private $accountDetails;

    /**
     * @var PreRegistration
     *
     * @ORM\OneToMany(targetEntity="PreRegistration", mappedBy="account")
     */
    private $preRegistrations;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * Account constructor.
     */
    public function __construct()
    {
        $this->preRegistrations = new ArrayCollection();
        parent::__construct();
    }

    public function __toString()
    {
        return $this->username;
    }

    /**
     * Set facebookId.
     *
     * @param string $facebookId
     *
     * @return Account
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebookId.
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebookAccessToken.
     *
     * @param string $facebookAccessToken
     *
     * @return Account
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebookAccessToken.
     *
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * Set googleId.
     *
     * @param string $googleId
     *
     * @return Account
     */
    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get googleId.
     *
     * @return string
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set googleAccessToken.
     *
     * @param string $googleAccessToken
     *
     * @return Account
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->google_access_token = $googleAccessToken;

        return $this;
    }

    /**
     * Get googleAccessToken.
     *
     * @return string
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * Set deletedAt.
     *
     * @param \DateTime $deletedAt
     *
     * @return Account
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set accountDetails.
     *
     * @param \AppBundle\Entity\AccountDetails $accountDetails
     *
     * @return Account
     */
    public function setAccountDetails(\AppBundle\Entity\AccountDetails $accountDetails = null)
    {
        $this->accountDetails = $accountDetails;

        return $this;
    }

    /**
     * Get accountDetails.
     *
     * @return \AppBundle\Entity\AccountDetails
     */
    public function getAccountDetails()
    {
        return $this->accountDetails;
    }

    /**
     * Add preRegistration.
     *
     * @param \AppBundle\Entity\PreRegistration $preRegistration
     *
     * @return Account
     */
    public function addPreRegistration(\AppBundle\Entity\PreRegistration $preRegistration)
    {
        $this->preRegistrations[] = $preRegistration;

        return $this;
    }

    /**
     * Remove preRegistration.
     *
     * @param \AppBundle\Entity\PreRegistration $preRegistration
     */
    public function removePreRegistration(\AppBundle\Entity\PreRegistration $preRegistration)
    {
        $this->preRegistrations->removeElement($preRegistration);
    }

    /**
     * Get preRegistrations.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPreRegistrations()
    {
        return $this->preRegistrations;
    }
}
