<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Agency
 *
 * @ORM\Table(name="agency")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AgencyRepository")
 */
class Agency
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="logout_url", type="string", length=255)
     */
    private $logoutUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
    * @ORM\ManyToOne(targetEntity="Accounts")
    * @ORM\JoinColumn(name="account", referencedColumnName="id")
    */
    private $account;

    /**
    * @ORM\OneToMany(targetEntity="Affiliates", mappedBy="agency")
    */
    private $affiliates;

    public function __construct()
    {
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
     * Set agencyId
     *
     * @param integer $agencyId
     *
     * @return Agency
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;

        return $this;
    }

    /**
     * Get agencyId
     *
     * @return int
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Agency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Agency
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Agency
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set logoutUrl
     *
     * @param string $logoutUrl
     *
     * @return Agency
     */
    public function setLogoutUrl($logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;

        return $this;
    }

    /**
     * Get logoutUrl
     *
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logoutUrl;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Agency
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Agency
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Agency
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
     * Add affiliate
     *
     * @param \AppBundle\Entity\Affiliates $affiliate
     *
     * @return Agency
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
     * Set account
     *
     * @param \AppBundle\Entity\Accounts $account
     *
     * @return Agency
     */
    public function setAccount(\AppBundle\Entity\Accounts $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getAccount()
    {
        return $this->account;
    }
}
