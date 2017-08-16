<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keywords
 *
 * @ORM\Table(name="keywords")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\KeywordsRepository")
 */
class Keywords
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
     * @ORM\Column(name="lang_code", type="string", length=255)
     */
    private $langCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=255)
     */
    private $countryCode;

    /**
     * @var int
     *
     * @ORM\Column(name="website_id", type="integer")
     */
    private $websiteId;

    /**
     * @var string
     *
     * @ORM\Column(name="searchengines", type="string", length=255)
     */
    private $searchengines;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set name
     *
     * @param string $name
     *
     * @return Keywords
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
     * Set langCode
     *
     * @param string $langCode
     *
     * @return Keywords
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
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Keywords
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set websiteId
     *
     * @param integer $websiteId
     *
     * @return Keywords
     */
    public function setWebsiteId($websiteId)
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    /**
     * Get websiteId
     *
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->websiteId;
    }

    /**
     * Set searchengines
     *
     * @param string $searchengines
     *
     * @return Keywords
     */
    public function setSearchengines($searchengines)
    {
        $this->searchengines = $searchengines;

        return $this;
    }

    /**
     * Get searchengines
     *
     * @return string
     */
    public function getSearchengines()
    {
        return $this->searchengines;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Keywords
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}

