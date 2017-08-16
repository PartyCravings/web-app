<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirectoryMeta
 *
 * @ORM\Table(name="directory_meta")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\DirectoryMetaRepository")
 */
class DirectoryMeta
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
     * @ORM\Column(name="captcha_col", type="string", length=255)
     */
    private $captchaCol;

    /**
     * @var string
     *
     * @ORM\Column(name="imagehash_col", type="string", length=255)
     */
    private $imagehashCol;

    /**
     * @var string
     *
     * @ORM\Column(name="reciprocal_col", type="string", length=255)
     */
    private $reciprocalCol;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_val", type="string", length=255)
     */
    private $extraVal;

    /**
     * @var string
     *
     * @ORM\Column(name="link_type_col", type="string", length=255)
     */
    private $linkTypeCol;

    /**
     * @var string
     *
     * @ORM\Column(name="normal", type="string", length=255)
     */
    private $normal;

    /**
     * @var string
     *
     * @ORM\Column(name="free", type="string", length=255)
     */
    private $free;

    /**
     * @var string
     *
     * @ORM\Column(name="reciprocal", type="string", length=255)
     */
    private $reciprocal;

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
     * @return DirectoryMeta
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
     * Set captchaScript
     *
     * @param string $captchaScript
     *
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * @return DirectoryMeta
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
     * Set captchaCol
     *
     * @param string $captchaCol
     *
     * @return DirectoryMeta
     */
    public function setCaptchaCol($captchaCol)
    {
        $this->captchaCol = $captchaCol;

        return $this;
    }

    /**
     * Get captchaCol
     *
     * @return string
     */
    public function getCaptchaCol()
    {
        return $this->captchaCol;
    }

    /**
     * Set imagehashCol
     *
     * @param string $imagehashCol
     *
     * @return DirectoryMeta
     */
    public function setImagehashCol($imagehashCol)
    {
        $this->imagehashCol = $imagehashCol;

        return $this;
    }

    /**
     * Get imagehashCol
     *
     * @return string
     */
    public function getImagehashCol()
    {
        return $this->imagehashCol;
    }

    /**
     * Set reciprocalCol
     *
     * @param string $reciprocalCol
     *
     * @return DirectoryMeta
     */
    public function setReciprocalCol($reciprocalCol)
    {
        $this->reciprocalCol = $reciprocalCol;

        return $this;
    }

    /**
     * Get reciprocalCol
     *
     * @return string
     */
    public function getReciprocalCol()
    {
        return $this->reciprocalCol;
    }

    /**
     * Set extraVal
     *
     * @param string $extraVal
     *
     * @return DirectoryMeta
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
     * Set linkTypeCol
     *
     * @param string $linkTypeCol
     *
     * @return DirectoryMeta
     */
    public function setLinkTypeCol($linkTypeCol)
    {
        $this->linkTypeCol = $linkTypeCol;

        return $this;
    }

    /**
     * Get linkTypeCol
     *
     * @return string
     */
    public function getLinkTypeCol()
    {
        return $this->linkTypeCol;
    }

    /**
     * Set normal
     *
     * @param string $normal
     *
     * @return DirectoryMeta
     */
    public function setNormal($normal)
    {
        $this->normal = $normal;

        return $this;
    }

    /**
     * Get normal
     *
     * @return string
     */
    public function getNormal()
    {
        return $this->normal;
    }

    /**
     * Set free
     *
     * @param string $free
     *
     * @return DirectoryMeta
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get free
     *
     * @return string
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Set reciprocal
     *
     * @param string $reciprocal
     *
     * @return DirectoryMeta
     */
    public function setReciprocal($reciprocal)
    {
        $this->reciprocal = $reciprocal;

        return $this;
    }

    /**
     * Get reciprocal
     *
     * @return string
     */
    public function getReciprocal()
    {
        return $this->reciprocal;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return DirectoryMeta
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

