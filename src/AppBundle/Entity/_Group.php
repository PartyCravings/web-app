<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * _Group
 *
 * @ORM\Table(name="__group")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\_GroupRepository")
 */
class _Group
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
     * @ORM\Column(name="reduction", type="string", length=255)
     */
    private $reduction;

    /**
     * @var string
     *
     * @ORM\Column(name="price_display_method", type="string", length=255)
     */
    private $priceDisplayMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="show_prices", type="string", length=255)
     */
    private $showPrices;

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
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="suspended", type="string", length=255)
     */
    private $suspended;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255)
     */
    private $lang;


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
     * Set reduction
     *
     * @param string $reduction
     *
     * @return _Group
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set priceDisplayMethod
     *
     * @param string $priceDisplayMethod
     *
     * @return _Group
     */
    public function setPriceDisplayMethod($priceDisplayMethod)
    {
        $this->priceDisplayMethod = $priceDisplayMethod;

        return $this;
    }

    /**
     * Get priceDisplayMethod
     *
     * @return string
     */
    public function getPriceDisplayMethod()
    {
        return $this->priceDisplayMethod;
    }

    /**
     * Set showPrices
     *
     * @param string $showPrices
     *
     * @return _Group
     */
    public function setShowPrices($showPrices)
    {
        $this->showPrices = $showPrices;

        return $this;
    }

    /**
     * Get showPrices
     *
     * @return string
     */
    public function getShowPrices()
    {
        return $this->showPrices;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return _Group
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
     * @return _Group
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
     * Set deleted
     *
     * @param string $deleted
     *
     * @return _Group
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
     * Set suspended
     *
     * @param string $suspended
     *
     * @return _Group
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
     * Set lang
     *
     * @param string $lang
     *
     * @return _Group
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
}

