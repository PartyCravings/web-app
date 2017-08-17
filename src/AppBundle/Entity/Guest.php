<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 *
 * @ORM\Table(name="guest")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GuestRepository")
 */
class Guest
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
     * @ORM\Column(name="id_operating_system", type="string", length=255)
     */
    private $idOperatingSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="id_web_browser", type="string", length=255)
     */
    private $idWebBrowser;

    /**
     * @var string
     *
     * @ORM\Column(name="id_customer", type="string", length=255)
     */
    private $idCustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="javascript", type="string", length=255)
     */
    private $javascript;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_resolution_x", type="string", length=255)
     */
    private $screenResolutionX;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_resolution_y", type="string", length=255)
     */
    private $screenResolutionY;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_color", type="string", length=255)
     */
    private $screenColor;

    /**
     * @var string
     *
     * @ORM\Column(name="accept_language", type="string", length=255)
     */
    private $acceptLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_theme", type="string", length=255)
     */
    private $mobileTheme;


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
     * Set idOperatingSystem
     *
     * @param string $idOperatingSystem
     *
     * @return Guest
     */
    public function setIdOperatingSystem($idOperatingSystem)
    {
        $this->idOperatingSystem = $idOperatingSystem;

        return $this;
    }

    /**
     * Get idOperatingSystem
     *
     * @return string
     */
    public function getIdOperatingSystem()
    {
        return $this->idOperatingSystem;
    }

    /**
     * Set idWebBrowser
     *
     * @param string $idWebBrowser
     *
     * @return Guest
     */
    public function setIdWebBrowser($idWebBrowser)
    {
        $this->idWebBrowser = $idWebBrowser;

        return $this;
    }

    /**
     * Get idWebBrowser
     *
     * @return string
     */
    public function getIdWebBrowser()
    {
        return $this->idWebBrowser;
    }

    /**
     * Set idCustomer
     *
     * @param string $idCustomer
     *
     * @return Guest
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return string
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set javascript
     *
     * @param string $javascript
     *
     * @return Guest
     */
    public function setJavascript($javascript)
    {
        $this->javascript = $javascript;

        return $this;
    }

    /**
     * Get javascript
     *
     * @return string
     */
    public function getJavascript()
    {
        return $this->javascript;
    }

    /**
     * Set screenResolutionX
     *
     * @param string $screenResolutionX
     *
     * @return Guest
     */
    public function setScreenResolutionX($screenResolutionX)
    {
        $this->screenResolutionX = $screenResolutionX;

        return $this;
    }

    /**
     * Get screenResolutionX
     *
     * @return string
     */
    public function getScreenResolutionX()
    {
        return $this->screenResolutionX;
    }

    /**
     * Set screenResolutionY
     *
     * @param string $screenResolutionY
     *
     * @return Guest
     */
    public function setScreenResolutionY($screenResolutionY)
    {
        $this->screenResolutionY = $screenResolutionY;

        return $this;
    }

    /**
     * Get screenResolutionY
     *
     * @return string
     */
    public function getScreenResolutionY()
    {
        return $this->screenResolutionY;
    }

    /**
     * Set screenColor
     *
     * @param string $screenColor
     *
     * @return Guest
     */
    public function setScreenColor($screenColor)
    {
        $this->screenColor = $screenColor;

        return $this;
    }

    /**
     * Get screenColor
     *
     * @return string
     */
    public function getScreenColor()
    {
        return $this->screenColor;
    }

    /**
     * Set acceptLanguage
     *
     * @param string $acceptLanguage
     *
     * @return Guest
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    /**
     * Get acceptLanguage
     *
     * @return string
     */
    public function getAcceptLanguage()
    {
        return $this->acceptLanguage;
    }

    /**
     * Set mobileTheme
     *
     * @param string $mobileTheme
     *
     * @return Guest
     */
    public function setMobileTheme($mobileTheme)
    {
        $this->mobileTheme = $mobileTheme;

        return $this;
    }

    /**
     * Get mobileTheme
     *
     * @return string
     */
    public function getMobileTheme()
    {
        return $this->mobileTheme;
    }
}

