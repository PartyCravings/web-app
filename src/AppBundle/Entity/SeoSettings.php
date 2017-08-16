<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeoSettings
 *
 * @ORM\Table(name="seo_settings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeoSettingsRepository")
 */
class SeoSettings
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
     * @ORM\Column(name="seo_category", type="string", length=20, unique=true)
     */
    private $seoCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_content", type="string", length=50, nullable=true)
     */
    private $seoContent;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_edited_by", type="string", length=50)
     */
    private $seoEditedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="seo_last_edited", type="string", length=20)
     */
    private $seoLastEdited;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_enabled", type="string", length=5)
     */
    private $seoEnabled;


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
     * Set seoCategory
     *
     * @param string $seoCategory
     *
     * @return SeoSettings
     */
    public function setSeoCategory($seoCategory)
    {
        $this->seoCategory = $seoCategory;

        return $this;
    }

    /**
     * Get seoCategory
     *
     * @return string
     */
    public function getSeoCategory()
    {
        return $this->seoCategory;
    }

    /**
     * Set seoContent
     *
     * @param string $seoContent
     *
     * @return SeoSettings
     */
    public function setSeoContent($seoContent)
    {
        $this->seoContent = $seoContent;

        return $this;
    }

    /**
     * Get seoContent
     *
     * @return string
     */
    public function getSeoContent()
    {
        return $this->seoContent;
    }

    /**
     * Set seoEditedBy
     *
     * @param string $seoEditedBy
     *
     * @return SeoSettings
     */
    public function setSeoEditedBy($seoEditedBy)
    {
        $this->seoEditedBy = $seoEditedBy;

        return $this;
    }

    /**
     * Get seoEditedBy
     *
     * @return string
     */
    public function getSeoEditedBy()
    {
        return $this->seoEditedBy;
    }

    /**
     * Set seoLastEdited
     *
     * @param \DateTime $seoLastEdited
     *
     * @return SeoSettings
     */
    public function setSeoLastEdited($seoLastEdited)
    {
        $this->seoLastEdited = $seoLastEdited;

        return $this;
    }

    /**
     * Get seoLastEdited
     *
     * @return \DateTime
     */
    public function getSeoLastEdited()
    {
        return $this->seoLastEdited;
    }

    /**
     * Set seoEnabled
     *
     * @param string $seoEnabled
     *
     * @return SeoSettings
     */
    public function setSeoEnabled($seoEnabled)
    {
        $this->seoEnabled = $seoEnabled;

        return $this;
    }

    /**
     * Get seoEnabled
     *
     * @return string
     */
    public function getSeoEnabled()
    {
        return $this->seoEnabled;
    }
}