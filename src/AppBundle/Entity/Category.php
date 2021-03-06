<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category.
 *
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{
    /*
     * Hook SoftDeleteable behavior
     * updates deletedAt field
     */
    use SoftDeleteableEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $isVisibleOnHome = false;

    /**
     * @Assert\Length(
     *     min=3,
     *     minMessage="category.title.too_short",
     *     max=100,
     *     maxMessage="category.title.too_long"
     * )
     * @Assert\NotBlank(message="category.title.blank")
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @Gedmo\Slug(fields={"title", "created"})
     * @ORM\Column(type="string", unique=true)
     */
    private $slug;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    private $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\ManyToOne(targetEntity="Category", cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $root;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="children", cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = true;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $updatedBy;

    /**
     * @var Country
     *
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="categories")
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity="Service", mappedBy="category")
     */
    private $services;

    /**
     * @var TaxRates
     *
     * @ORM\ManyToOne(targetEntity="TaxRates")
     */
    private $taxRate;

    /**
     * @var EmbeddedFile
     *
     * @ORM\ManyToOne(targetEntity="Files", cascade={"persist"})
     */
    private $uploadedFiles;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->services = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set lft.
     *
     * @param int $lft
     *
     * @return Category
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft.
     *
     * @return int
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set lvl.
     *
     * @param int $lvl
     *
     * @return Category
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl.
     *
     * @return int
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set rgt.
     *
     * @param int $rgt
     *
     * @return Category
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt.
     *
     * @return int
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set isEnabled.
     *
     * @param bool $isEnabled
     *
     * @return Category
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled.
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return Category
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return Category
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set root.
     *
     * @param \AppBundle\Entity\Category $root
     *
     * @return Category
     */
    public function setRoot(\AppBundle\Entity\Category $root = null)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root.
     *
     * @return \AppBundle\Entity\Category
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set parent.
     *
     * @param \AppBundle\Entity\Category $parent
     *
     * @return Category
     */
    public function setParent(\AppBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return \AppBundle\Entity\Category
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add child.
     *
     * @param \AppBundle\Entity\Category $child
     *
     * @return Category
     */
    public function addChild(\AppBundle\Entity\Category $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child.
     *
     * @param \AppBundle\Entity\Category $child
     */
    public function removeChild(\AppBundle\Entity\Category $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set createdBy.
     *
     * @param \AppBundle\Entity\Account $createdBy
     *
     * @return Category
     */
    public function setCreatedBy(\AppBundle\Entity\Account $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return \AppBundle\Entity\Account
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy.
     *
     * @param \AppBundle\Entity\Account $updatedBy
     *
     * @return Category
     */
    public function setUpdatedBy(\AppBundle\Entity\Account $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return \AppBundle\Entity\Account
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set country.
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Category
     */
    public function setCountry(\AppBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set taxRate.
     *
     * @param \AppBundle\Entity\TaxRates $taxRate
     *
     * @return Category
     */
    public function setTaxRate(\AppBundle\Entity\TaxRates $taxRate = null)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate.
     *
     * @return \AppBundle\Entity\TaxRates
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Set isVisibleOnHome.
     *
     * @param bool $isVisibleOnHome
     *
     * @return Category
     */
    public function setIsVisibleOnHome($isVisibleOnHome)
    {
        $this->isVisibleOnHome = $isVisibleOnHome;

        return $this;
    }

    /**
     * Get isVisibleOnHome.
     *
     * @return bool
     */
    public function getIsVisibleOnHome()
    {
        return $this->isVisibleOnHome;
    }

    /**
     * Set uploadedFiles.
     *
     * @param \AppBundle\Entity\Files $uploadedFiles
     *
     * @return Category
     */
    public function setUploadedFiles(\AppBundle\Entity\Files $uploadedFiles = null)
    {
        $this->uploadedFiles = $uploadedFiles;

        return $this;
    }

    /**
     * Get uploadedFiles.
     *
     * @return \AppBundle\Entity\Files
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }

    /**
     * Add service.
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return Category
     */
    public function addService(\AppBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service.
     *
     * @param \AppBundle\Entity\Service $service
     */
    public function removeService(\AppBundle\Entity\Service $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }
}
