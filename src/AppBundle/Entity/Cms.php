<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cms
 *
 * @ORM\Table(name="cms")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CmsRepository")
 */
class Cms
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
     * @ORM\Column(name="id_cms_category", type="string", length=255)
     */
    private $idCmsCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

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
     * @var string
     *
     * @ORM\Column(name="indexation", type="string", length=255)
     */
    private $indexation;

    /**
     * @var string
     *
     * @ORM\Column(name="block", type="string", length=255)
     */
    private $block;

    /**
     * @var string
     *
     * @ORM\Column(name="block_lang", type="string", length=255)
     */
    private $blockLang;

    /**
     * @var string
     *
     * @ORM\Column(name="block_page", type="string", length=255)
     */
    private $blockPage;

    /**
     * @var string
     *
     * @ORM\Column(name="block_vendor", type="string", length=255)
     */
    private $blockVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="category_lang", type="string", length=255)
     */
    private $categoryLang;

    /**
     * @var string
     *
     * @ORM\Column(name="category_vendor", type="string", length=255)
     */
    private $categoryVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="role_lang", type="string", length=255)
     */
    private $roleLang;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;


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
     * Set idCmsCategory
     *
     * @param string $idCmsCategory
     *
     * @return Cms
     */
    public function setIdCmsCategory($idCmsCategory)
    {
        $this->idCmsCategory = $idCmsCategory;

        return $this;
    }

    /**
     * Get idCmsCategory
     *
     * @return string
     */
    public function getIdCmsCategory()
    {
        return $this->idCmsCategory;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Cms
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Cms
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
     * @return Cms
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
     * Set indexation
     *
     * @param string $indexation
     *
     * @return Cms
     */
    public function setIndexation($indexation)
    {
        $this->indexation = $indexation;

        return $this;
    }

    /**
     * Get indexation
     *
     * @return string
     */
    public function getIndexation()
    {
        return $this->indexation;
    }

    /**
     * Set block
     *
     * @param string $block
     *
     * @return Cms
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set blockLang
     *
     * @param string $blockLang
     *
     * @return Cms
     */
    public function setBlockLang($blockLang)
    {
        $this->blockLang = $blockLang;

        return $this;
    }

    /**
     * Get blockLang
     *
     * @return string
     */
    public function getBlockLang()
    {
        return $this->blockLang;
    }

    /**
     * Set blockPage
     *
     * @param string $blockPage
     *
     * @return Cms
     */
    public function setBlockPage($blockPage)
    {
        $this->blockPage = $blockPage;

        return $this;
    }

    /**
     * Get blockPage
     *
     * @return string
     */
    public function getBlockPage()
    {
        return $this->blockPage;
    }

    /**
     * Set blockVendor
     *
     * @param string $blockVendor
     *
     * @return Cms
     */
    public function setBlockVendor($blockVendor)
    {
        $this->blockVendor = $blockVendor;

        return $this;
    }

    /**
     * Get blockVendor
     *
     * @return string
     */
    public function getBlockVendor()
    {
        return $this->blockVendor;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Cms
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set categoryLang
     *
     * @param string $categoryLang
     *
     * @return Cms
     */
    public function setCategoryLang($categoryLang)
    {
        $this->categoryLang = $categoryLang;

        return $this;
    }

    /**
     * Get categoryLang
     *
     * @return string
     */
    public function getCategoryLang()
    {
        return $this->categoryLang;
    }

    /**
     * Set categoryVendor
     *
     * @param string $categoryVendor
     *
     * @return Cms
     */
    public function setCategoryVendor($categoryVendor)
    {
        $this->categoryVendor = $categoryVendor;

        return $this;
    }

    /**
     * Get categoryVendor
     *
     * @return string
     */
    public function getCategoryVendor()
    {
        return $this->categoryVendor;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Cms
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Cms
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set roleLang
     *
     * @param string $roleLang
     *
     * @return Cms
     */
    public function setRoleLang($roleLang)
    {
        $this->roleLang = $roleLang;

        return $this;
    }

    /**
     * Get roleLang
     *
     * @return string
     */
    public function getRoleLang()
    {
        return $this->roleLang;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Cms
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}

