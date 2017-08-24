<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translators
 *
 * @ORM\Table(name="translators")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TranslatorsRepository")
 */
class Translators
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
     * @ORM\Column(name="lang_code", type="string", length=255)
     */
    private $langCode;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_name", type="string", length=255)
     */
    private $transName;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_company", type="string", length=255)
     */
    private $transCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_website", type="string", length=255)
     */
    private $transWebsite;


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
     * Set langCode
     *
     * @param string $langCode
     *
     * @return Translators
     */
    public function setLangCode($langCode)
    {
        $this->langCode = $langCode;

        return $this;
    }

    /**
     * Get langCode
     *
     * @return string
     */
    public function getLangCode()
    {
        return $this->langCode;
    }

    /**
     * Set transName
     *
     * @param string $transName
     *
     * @return Translators
     */
    public function setTransName($transName)
    {
        $this->transName = $transName;

        return $this;
    }

    /**
     * Get transName
     *
     * @return string
     */
    public function getTransName()
    {
        return $this->transName;
    }

    /**
     * Set transCompany
     *
     * @param string $transCompany
     *
     * @return Translators
     */
    public function setTransCompany($transCompany)
    {
        $this->transCompany = $transCompany;

        return $this;
    }

    /**
     * Get transCompany
     *
     * @return string
     */
    public function getTransCompany()
    {
        return $this->transCompany;
    }

    /**
     * Set transWebsite
     *
     * @param string $transWebsite
     *
     * @return Translators
     */
    public function setTransWebsite($transWebsite)
    {
        $this->transWebsite = $transWebsite;

        return $this;
    }

    /**
     * Get transWebsite
     *
     * @return string
     */
    public function getTransWebsite()
    {
        return $this->transWebsite;
    }
}
