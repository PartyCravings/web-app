<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @ORM\OneToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\LiveParties", mappedBy="customerId")
     */
    private $liveParties;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor_group", type="string", length=255)
     */
    private $idVendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor", type="string", length=255)
     */
    private $idVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_gender", type="string", length=255)
     */
    private $idGender;

    /**
     * @var string
     *
     * @ORM\Column(name="id_default_group", type="string", length=255)
     */
    private $idDefaultGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="id_lang", type="string", length=255)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="id_risk", type="string", length=255)
     */
    private $idRisk;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="ape", type="string", length=255)
     */
    private $ape;

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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="plain_password", type="string", length=255)
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="last_passwd_gen", type="string", length=255)
     */
    private $lastPasswdGen;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday", type="string", length=255)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter", type="string", length=255)
     */
    private $newsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_registration_newsletter", type="string", length=255)
     */
    private $ipRegistrationNewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_date_add", type="string", length=255)
     */
    private $newsletterDateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="optin", type="string", length=255)
     */
    private $optin;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="outstanding_allow_amount", type="string", length=255)
     */
    private $outstandingAllowAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="show_public_prices", type="string", length=255)
     */
    private $showPublicPrices;

    /**
     * @var string
     *
     * @ORM\Column(name="max_payment_days", type="string", length=255)
     */
    private $maxPaymentDays;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_guest", type="boolean")
     */
    private $isGuest;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="suspended", type="string", length=255)
     */
    private $suspended;

    /**
     * @var string
     *
     * @ORM\Column(name="_group", type="string", length=255)
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="message_sync_imap", type="string", length=255)
     */
    private $messageSyncImap;

    /**
     * @var string
     *
     * @ORM\Column(name="thread", type="string", length=255)
     */
    private $thread;

    public function __construct()
    {
        $this->liveParties = new ArrayCollection();
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
     * Set idVendorGroup
     *
     * @param string $idVendorGroup
     *
     * @return Customer
     */
    public function setIdVendorGroup($idVendorGroup)
    {
        $this->idVendorGroup = $idVendorGroup;

        return $this;
    }

    /**
     * Get idVendorGroup
     *
     * @return string
     */
    public function getIdVendorGroup()
    {
        return $this->idVendorGroup;
    }

    /**
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return Customer
     */
    public function setIdVendor($idVendor)
    {
        $this->idVendor = $idVendor;

        return $this;
    }

    /**
     * Get idVendor
     *
     * @return string
     */
    public function getIdVendor()
    {
        return $this->idVendor;
    }

    /**
     * Set idGender
     *
     * @param string $idGender
     *
     * @return Customer
     */
    public function setIdGender($idGender)
    {
        $this->idGender = $idGender;

        return $this;
    }

    /**
     * Get idGender
     *
     * @return string
     */
    public function getIdGender()
    {
        return $this->idGender;
    }

    /**
     * Set idDefaultGroup
     *
     * @param string $idDefaultGroup
     *
     * @return Customer
     */
    public function setIdDefaultGroup($idDefaultGroup)
    {
        $this->idDefaultGroup = $idDefaultGroup;

        return $this;
    }

    /**
     * Get idDefaultGroup
     *
     * @return string
     */
    public function getIdDefaultGroup()
    {
        return $this->idDefaultGroup;
    }

    /**
     * Set idLang
     *
     * @param string $idLang
     *
     * @return Customer
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return string
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set idRisk
     *
     * @param string $idRisk
     *
     * @return Customer
     */
    public function setIdRisk($idRisk)
    {
        $this->idRisk = $idRisk;

        return $this;
    }

    /**
     * Get idRisk
     *
     * @return string
     */
    public function getIdRisk()
    {
        return $this->idRisk;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Customer
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return Customer
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set ape
     *
     * @param string $ape
     *
     * @return Customer
     */
    public function setApe($ape)
    {
        $this->ape = $ape;

        return $this;
    }

    /**
     * Get ape
     *
     * @return string
     */
    public function getApe()
    {
        return $this->ape;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Customer
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
     * @return Customer
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
     * Set email
     *
     * @param string $email
     *
     * @return Customer
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
     * Set password
     *
     * @param string $password
     *
     * @return Customer
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set plainPassword
     *
     * @param string $plainPassword
     *
     * @return Customer
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set lastPasswdGen
     *
     * @param string $lastPasswdGen
     *
     * @return Customer
     */
    public function setLastPasswdGen($lastPasswdGen)
    {
        $this->lastPasswdGen = $lastPasswdGen;

        return $this;
    }

    /**
     * Get lastPasswdGen
     *
     * @return string
     */
    public function getLastPasswdGen()
    {
        return $this->lastPasswdGen;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     *
     * @return Customer
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set newsletter
     *
     * @param string $newsletter
     *
     * @return Customer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return string
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set ipRegistrationNewsletter
     *
     * @param string $ipRegistrationNewsletter
     *
     * @return Customer
     */
    public function setIpRegistrationNewsletter($ipRegistrationNewsletter)
    {
        $this->ipRegistrationNewsletter = $ipRegistrationNewsletter;

        return $this;
    }

    /**
     * Get ipRegistrationNewsletter
     *
     * @return string
     */
    public function getIpRegistrationNewsletter()
    {
        return $this->ipRegistrationNewsletter;
    }

    /**
     * Set newsletterDateAdd
     *
     * @param string $newsletterDateAdd
     *
     * @return Customer
     */
    public function setNewsletterDateAdd($newsletterDateAdd)
    {
        $this->newsletterDateAdd = $newsletterDateAdd;

        return $this;
    }

    /**
     * Get newsletterDateAdd
     *
     * @return string
     */
    public function getNewsletterDateAdd()
    {
        return $this->newsletterDateAdd;
    }

    /**
     * Set optin
     *
     * @param string $optin
     *
     * @return Customer
     */
    public function setOptin($optin)
    {
        $this->optin = $optin;

        return $this;
    }

    /**
     * Get optin
     *
     * @return string
     */
    public function getOptin()
    {
        return $this->optin;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Customer
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
     * Set outstandingAllowAmount
     *
     * @param string $outstandingAllowAmount
     *
     * @return Customer
     */
    public function setOutstandingAllowAmount($outstandingAllowAmount)
    {
        $this->outstandingAllowAmount = $outstandingAllowAmount;

        return $this;
    }

    /**
     * Get outstandingAllowAmount
     *
     * @return string
     */
    public function getOutstandingAllowAmount()
    {
        return $this->outstandingAllowAmount;
    }

    /**
     * Set showPublicPrices
     *
     * @param string $showPublicPrices
     *
     * @return Customer
     */
    public function setShowPublicPrices($showPublicPrices)
    {
        $this->showPublicPrices = $showPublicPrices;

        return $this;
    }

    /**
     * Get showPublicPrices
     *
     * @return string
     */
    public function getShowPublicPrices()
    {
        return $this->showPublicPrices;
    }

    /**
     * Set maxPaymentDays
     *
     * @param string $maxPaymentDays
     *
     * @return Customer
     */
    public function setMaxPaymentDays($maxPaymentDays)
    {
        $this->maxPaymentDays = $maxPaymentDays;

        return $this;
    }

    /**
     * Get maxPaymentDays
     *
     * @return string
     */
    public function getMaxPaymentDays()
    {
        return $this->maxPaymentDays;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Customer
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Customer
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set isGuest
     *
     * @param boolean $isGuest
     *
     * @return Customer
     */
    public function setIsGuest($isGuest)
    {
        $this->isGuest = $isGuest;

        return $this;
    }

    /**
     * Get isGuest
     *
     * @return bool
     */
    public function getIsGuest()
    {
        return $this->isGuest;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Customer
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Customer
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param string $dateUpd
     *
     * @return Customer
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set suspended
     *
     * @param string $suspended
     *
     * @return Customer
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Get suspended
     *
     * @return string
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set group
     *
     * @param string $group
     *
     * @return Customer
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Customer
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set messageSyncImap
     *
     * @param string $messageSyncImap
     *
     * @return Customer
     */
    public function setMessageSyncImap($messageSyncImap)
    {
        $this->messageSyncImap = $messageSyncImap;

        return $this;
    }

    /**
     * Get messageSyncImap
     *
     * @return string
     */
    public function getMessageSyncImap()
    {
        return $this->messageSyncImap;
    }

    /**
     * Set thread
     *
     * @param string $thread
     *
     * @return Customer
     */
    public function setThread($thread)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return string
     */
    public function getThread()
    {
        return $this->thread;
    }
}

