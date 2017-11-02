<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affiliates
 *
 * @ORM\Table(name="affiliates")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AffiliatesRepository")
 */
class Affiliates
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Agency", inversedBy="affiliates")
     * @ORM\JoinColumn(name="agency", referencedColumnName="id")
     */
    private $agency;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mnemonic", type="string", length=255)
     */
    private $mnemonic;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255)
     */
    private $comments;

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
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

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
    * @ORM\OneToOne(targetEntity="AffiliatesExtra")
    * @ORM\JoinColumn(name="affiliatesExtra", referencedColumnName="id")
    */
    private $affiliatesExtra;


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
     * @return Affiliates
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
     * @return Affiliates
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
     * Set mnemonic
     *
     * @param string $mnemonic
     *
     * @return Affiliates
     */
    public function setMnemonic($mnemonic)
    {
        $this->mnemonic = $mnemonic;

        return $this;
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic()
    {
        return $this->mnemonic;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Affiliates
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Affiliates
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
     * @return Affiliates
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
     * Set website
     *
     * @param string $website
     *
     * @return Affiliates
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Affiliates
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
     * @return Affiliates
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
     * @return int
     */
    public function getAffiliateCategoryId()
    {
        return $this->affiliateCategoryId;
    }

    /**
     * @param $affiliateCategoryId
     */
    public function setAffiliateCategoryId($affiliateCategoryId)
    {
        $this->affiliateCategoryId = $affiliateCategoryId;
    }

    /**
     * @return mixed
     */
    public function getAffiliatesExtra()
    {
        return $this->affiliatesExtra;
    }

    /**
     * @param mixed $affiliatesExtra
     */
    public function setAffiliatesExtra($affiliatesExtra)
    {
        $this->affiliatesExtra = $affiliatesExtra;
    }

    /**
     * Set agency
     *
     * @param \AppBundle\Entity\Agency $agency
     *
     * @return Affiliates
     */
    public function setAgency(\AppBundle\Entity\Agency $agency = null)
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Get agency
     *
     * @return \AppBundle\Entity\Agency
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Accounts $account
     *
     * @return Affiliates
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
