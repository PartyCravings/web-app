<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="id_vendor", type="string", length=255)
     */
    private $idVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor_group", type="string", length=255)
     */
    private $idVendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_date_add", type="string", length=255)
     */
    private $newsletterDateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_registration_newsletter", type="string", length=255)
     */
    private $ipRegistrationNewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referrer", type="string", length=255)
     */
    private $httpReferrer;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;


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
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return Newsletter
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
     * Set idVendorGroup
     *
     * @param string $idVendorGroup
     *
     * @return Newsletter
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
     * Set email
     *
     * @param string $email
     *
     * @return Newsletter
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
     * Set newsletterDateAdd
     *
     * @param string $newsletterDateAdd
     *
     * @return Newsletter
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
     * Set ipRegistrationNewsletter
     *
     * @param string $ipRegistrationNewsletter
     *
     * @return Newsletter
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
     * Set httpReferrer
     *
     * @param string $httpReferrer
     *
     * @return Newsletter
     */
    public function setHttpReferrer($httpReferrer)
    {
        $this->httpReferrer = $httpReferrer;

        return $this;
    }

    /**
     * Get httpReferrer
     *
     * @return string
     */
    public function getHttpReferrer()
    {
        return $this->httpReferrer;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Newsletter
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
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Newsletter
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
}

