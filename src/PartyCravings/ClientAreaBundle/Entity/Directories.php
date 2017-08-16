<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directories
 *
 * @ORM\Table(name="directories")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\DirectoriesRepository")
 */
class Directories
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
     * @ORM\Column(name="domain", type="string", length=255)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="submit_url", type="string", length=255)
     */
    private $submitUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="captcha_script", type="string", length=255)
     */
    private $captchaScript;

    /**
     * @var string
     *
     * @ORM\Column(name="search_script", type="string", length=255)
     */
    private $searchScript;

    /**
     * @var string
     *
     * @ORM\Column(name="title_col", type="string", length=255)
     */
    private $titleCol;

    /**
     * @var string
     *
     * @ORM\Column(name="url_col", type="string", length=255)
     */
    private $urlCol;

    /**
     * @var string
     *
     * @ORM\Column(name="description_col", type="string", length=255)
     */
    private $descriptionCol;

    /**
     * @var string
     *
     * @ORM\Column(name="name_col", type="string", length=255)
     */
    private $nameCol;

    /**
     * @var string
     *
     * @ORM\Column(name="email_col", type="string", length=255)
     */
    private $emailCol;

    /**
     * @var string
     *
     * @ORM\Column(name="category_col", type="string", length=255)
     */
    private $categoryCol;

    /**
     * @var string
     *
     * @ORM\Column(name="cptcha_col", type="string", length=255)
     */
    private $cptchaCol;

    /**
     * @var string
     *
     * @ORM\Column(name="imagehashurl_col", type="string", length=255)
     */
    private $imagehashurlCol;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_val", type="string", length=255)
     */
    private $extraVal;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_captcha", type="boolean")
     */
    private $isCaptcha;

    /**
     * @var bool
     *
     * @ORM\Column(name="working", type="boolean")
     */
    private $working;

    /**
     * @var int
     *
     * @ORM\Column(name="google_pagerank", type="integer")
     */
    private $googlePagerank;

    /**
     * @var int
     *
     * @ORM\Column(name="alexa_rank", type="integer")
     */
    private $alexaRank;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_code", type="string", length=255)
     */
    private $langCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="checked", type="boolean")
     */
    private $checked;

    /**
     * @var int
     *
     * @ORM\Column(name="script_type_id", type="integer")
     */
    private $scriptTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank;

    /**
     * @var int
     *
     * @ORM\Column(name="pagerank", type="integer")
     */
    private $pagerank;

    /**
     * @var string
     *
     * @ORM\Column(name="domain_authority", type="string", length=255)
     */
    private $domainAuthority;

    /**
     * @var string
     *
     * @ORM\Column(name="page_authority", type="string", length=255)
     */
    private $pageAuthority;


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
     * Set domain
     *
     * @param string $domain
     *
     * @return Directories
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set submitUrl
     *
     * @param string $submitUrl
     *
     * @return Directories
     */
    public function setSubmitUrl($submitUrl)
    {
        $this->submitUrl = $submitUrl;

        return $this;
    }

    /**
     * Get submitUrl
     *
     * @return string
     */
    public function getSubmitUrl()
    {
        return $this->submitUrl;
    }

    /**
     * Set captchaScript
     *
     * @param string $captchaScript
     *
     * @return Directories
     */
    public function setCaptchaScript($captchaScript)
    {
        $this->captchaScript = $captchaScript;

        return $this;
    }

    /**
     * Get captchaScript
     *
     * @return string
     */
    public function getCaptchaScript()
    {
        return $this->captchaScript;
    }

    /**
     * Set searchScript
     *
     * @param string $searchScript
     *
     * @return Directories
     */
    public function setSearchScript($searchScript)
    {
        $this->searchScript = $searchScript;

        return $this;
    }

    /**
     * Get searchScript
     *
     * @return string
     */
    public function getSearchScript()
    {
        return $this->searchScript;
    }

    /**
     * Set titleCol
     *
     * @param string $titleCol
     *
     * @return Directories
     */
    public function setTitleCol($titleCol)
    {
        $this->titleCol = $titleCol;

        return $this;
    }

    /**
     * Get titleCol
     *
     * @return string
     */
    public function getTitleCol()
    {
        return $this->titleCol;
    }

    /**
     * Set urlCol
     *
     * @param string $urlCol
     *
     * @return Directories
     */
    public function setUrlCol($urlCol)
    {
        $this->urlCol = $urlCol;

        return $this;
    }

    /**
     * Get urlCol
     *
     * @return string
     */
    public function getUrlCol()
    {
        return $this->urlCol;
    }

    /**
     * Set descriptionCol
     *
     * @param string $descriptionCol
     *
     * @return Directories
     */
    public function setDescriptionCol($descriptionCol)
    {
        $this->descriptionCol = $descriptionCol;

        return $this;
    }

    /**
     * Get descriptionCol
     *
     * @return string
     */
    public function getDescriptionCol()
    {
        return $this->descriptionCol;
    }

    /**
     * Set nameCol
     *
     * @param string $nameCol
     *
     * @return Directories
     */
    public function setNameCol($nameCol)
    {
        $this->nameCol = $nameCol;

        return $this;
    }

    /**
     * Get nameCol
     *
     * @return string
     */
    public function getNameCol()
    {
        return $this->nameCol;
    }

    /**
     * Set emailCol
     *
     * @param string $emailCol
     *
     * @return Directories
     */
    public function setEmailCol($emailCol)
    {
        $this->emailCol = $emailCol;

        return $this;
    }

    /**
     * Get emailCol
     *
     * @return string
     */
    public function getEmailCol()
    {
        return $this->emailCol;
    }

    /**
     * Set categoryCol
     *
     * @param string $categoryCol
     *
     * @return Directories
     */
    public function setCategoryCol($categoryCol)
    {
        $this->categoryCol = $categoryCol;

        return $this;
    }

    /**
     * Get categoryCol
     *
     * @return string
     */
    public function getCategoryCol()
    {
        return $this->categoryCol;
    }

    /**
     * Set cptchaCol
     *
     * @param string $cptchaCol
     *
     * @return Directories
     */
    public function setCptchaCol($cptchaCol)
    {
        $this->cptchaCol = $cptchaCol;

        return $this;
    }

    /**
     * Get cptchaCol
     *
     * @return string
     */
    public function getCptchaCol()
    {
        return $this->cptchaCol;
    }

    /**
     * Set imagehashurlCol
     *
     * @param string $imagehashurlCol
     *
     * @return Directories
     */
    public function setImagehashurlCol($imagehashurlCol)
    {
        $this->imagehashurlCol = $imagehashurlCol;

        return $this;
    }

    /**
     * Get imagehashurlCol
     *
     * @return string
     */
    public function getImagehashurlCol()
    {
        return $this->imagehashurlCol;
    }

    /**
     * Set extraVal
     *
     * @param string $extraVal
     *
     * @return Directories
     */
    public function setExtraVal($extraVal)
    {
        $this->extraVal = $extraVal;

        return $this;
    }

    /**
     * Get extraVal
     *
     * @return string
     */
    public function getExtraVal()
    {
        return $this->extraVal;
    }

    /**
     * Set isCaptcha
     *
     * @param boolean $isCaptcha
     *
     * @return Directories
     */
    public function setIsCaptcha($isCaptcha)
    {
        $this->isCaptcha = $isCaptcha;

        return $this;
    }

    /**
     * Get isCaptcha
     *
     * @return bool
     */
    public function getIsCaptcha()
    {
        return $this->isCaptcha;
    }

    /**
     * Set working
     *
     * @param boolean $working
     *
     * @return Directories
     */
    public function setWorking($working)
    {
        $this->working = $working;

        return $this;
    }

    /**
     * Get working
     *
     * @return bool
     */
    public function getWorking()
    {
        return $this->working;
    }

    /**
     * Set googlePagerank
     *
     * @param integer $googlePagerank
     *
     * @return Directories
     */
    public function setGooglePagerank($googlePagerank)
    {
        $this->googlePagerank = $googlePagerank;

        return $this;
    }

    /**
     * Get googlePagerank
     *
     * @return int
     */
    public function getGooglePagerank()
    {
        return $this->googlePagerank;
    }

    /**
     * Set alexaRank
     *
     * @param integer $alexaRank
     *
     * @return Directories
     */
    public function setAlexaRank($alexaRank)
    {
        $this->alexaRank = $alexaRank;

        return $this;
    }

    /**
     * Get alexaRank
     *
     * @return int
     */
    public function getAlexaRank()
    {
        return $this->alexaRank;
    }

    /**
     * Set langCode
     *
     * @param string $langCode
     *
     * @return Directories
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
     * Set checked
     *
     * @param boolean $checked
     *
     * @return Directories
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return bool
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Set scriptTypeId
     *
     * @param integer $scriptTypeId
     *
     * @return Directories
     */
    public function setScriptTypeId($scriptTypeId)
    {
        $this->scriptTypeId = $scriptTypeId;

        return $this;
    }

    /**
     * Get scriptTypeId
     *
     * @return int
     */
    public function getScriptTypeId()
    {
        return $this->scriptTypeId;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return Directories
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set pagerank
     *
     * @param integer $pagerank
     *
     * @return Directories
     */
    public function setPagerank($pagerank)
    {
        $this->pagerank = $pagerank;

        return $this;
    }

    /**
     * Get pagerank
     *
     * @return int
     */
    public function getPagerank()
    {
        return $this->pagerank;
    }

    /**
     * Set domainAuthority
     *
     * @param string $domainAuthority
     *
     * @return Directories
     */
    public function setDomainAuthority($domainAuthority)
    {
        $this->domainAuthority = $domainAuthority;

        return $this;
    }

    /**
     * Get domainAuthority
     *
     * @return string
     */
    public function getDomainAuthority()
    {
        return $this->domainAuthority;
    }

    /**
     * Set pageAuthority
     *
     * @param string $pageAuthority
     *
     * @return Directories
     */
    public function setPageAuthority($pageAuthority)
    {
        $this->pageAuthority = $pageAuthority;

        return $this;
    }

    /**
     * Get pageAuthority
     *
     * @return string
     */
    public function getPageAuthority()
    {
        return $this->pageAuthority;
    }
}

