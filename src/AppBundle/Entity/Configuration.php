<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

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
     * @ORM\Column(name="lang", type="string", length=255)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="kpi", type="string", length=255)
     */
    private $kpi;

    /**
     * @var string
     *
     * @ORM\Column(name="kpi_lang", type="string", length=255)
     */
    private $kpiLang;


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
     * @return Configuration
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
     * @return Configuration
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
     * Set name
     *
     * @param string $name
     *
     * @return Configuration
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
     * Set value
     *
     * @param string $value
     *
     * @return Configuration
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Configuration
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
     * @return Configuration
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
     * Set lang
     *
     * @param string $lang
     *
     * @return Configuration
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set kpi
     *
     * @param string $kpi
     *
     * @return Configuration
     */
    public function setKpi($kpi)
    {
        $this->kpi = $kpi;

        return $this;
    }

    /**
     * Get kpi
     *
     * @return string
     */
    public function getKpi()
    {
        return $this->kpi;
    }

    /**
     * Set kpiLang
     *
     * @param string $kpiLang
     *
     * @return Configuration
     */
    public function setKpiLang($kpiLang)
    {
        $this->kpiLang = $kpiLang;

        return $this;
    }

    /**
     * Get kpiLang
     *
     * @return string
     */
    public function getKpiLang()
    {
        return $this->kpiLang;
    }
}

