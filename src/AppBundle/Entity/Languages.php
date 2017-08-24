<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LanguagesRepository")
 */
class Languages
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
     * @ORM\Column(name="lang_name", type="string", length=255)
     */
    private $langName;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_show", type="string", length=255)
     */
    private $langShow;

    /**
     * @var bool
     *
     * @ORM\Column(name="rtl", type="boolean")
     */
    private $rtl;

    /**
     * @var bool
     *
     * @ORM\Column(name="translated", type="boolean")
     */
    private $translated;

    /**
     * @ORM\OneToMany(targetEntity="AsoEbi", mappedBy="langId")
     */
    private $asoEbi;


    public function __construct()
    {
        $this->asoEbis = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->langName;
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
     * Set langCode
     *
     * @param string $langCode
     *
     * @return Languages
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
     * Set langName
     *
     * @param string $langName
     *
     * @return Languages
     */
    public function setLangName($langName)
    {
        $this->langName = $langName;

        return $this;
    }

    /**
     * Get langName
     *
     * @return string
     */
    public function getLangName()
    {
        return $this->langName;
    }

    /**
     * Set langShow
     *
     * @param string $langShow
     *
     * @return Languages
     */
    public function setLangShow($langShow)
    {
        $this->langShow = $langShow;

        return $this;
    }

    /**
     * Get langShow
     *
     * @return string
     */
    public function getLangShow()
    {
        return $this->langShow;
    }

    /**
     * Set rtl
     *
     * @param boolean $rtl
     *
     * @return Languages
     */
    public function setRtl($rtl)
    {
        $this->rtl = $rtl;

        return $this;
    }

    /**
     * Get rtl
     *
     * @return bool
     */
    public function getRtl()
    {
        return $this->rtl;
    }

    /**
     * Set translated
     *
     * @param boolean $translated
     *
     * @return Languages
     */
    public function setTranslated($translated)
    {
        $this->translated = $translated;

        return $this;
    }

    /**
     * Get translated
     *
     * @return bool
     */
    public function getTranslated()
    {
        return $this->translated;
    }
}
