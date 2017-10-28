<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 * @UniqueEntity(fields={"name"}, message="country.exists")
 */
class Country
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
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=255)
     */
    private $timezone;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var datetime_immutable
     *
     * @ORM\Column(name="date_add", type="datetimetz_immutable")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deleted", type="datetimetz", nullable=true)
     */
    private $dateDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetimetz")
     */
    private $updatedAt;

    /**
     * @var Pages
     *
     * @ORM\OneToMany(targetEntity="Pages", mappedBy="country")
     * @ORM\JoinColumn(name="pages", referencedColumnName="id")
     */
    private $pages;

    /**
     * @var Category
     *
     * @ORM\OneToMany(targetEntity="Category", mappedBy="country")
     * @ORM\JoinColumn(name="categories", referencedColumnName="id")
     */
    private $categories;


    public function __construct()
    {
        $this->pages = new ArrayCollection();
        $this->categories = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Country
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
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Country
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return \DateTimeZone
     */
    public function getTimezone()
    {
        return new \DateTimeZone($this->timezone);
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Country
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set dateAdd
     *
     * @param datetime_immutable $dateAdd
     *
     * @return Country
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd
            ->setTimezone(
                $this->getTimezone()
            );

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return datetime_immutable
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateDeleted
     *
     * @param \DateTime $dateDeleted
     *
     * @return Country
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted
            ->setTimezone(
                $this->getTimezone()
            );

        return $this;
    }

    /**
     * Get dateDeleted
     *
     * @return \DateTime
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Country
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt
            ->setTimezone(
                $this->getTimezone()
            );

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }


    /**
     * Set pages
     *
     * @param \Pages $pages
     *
     * @return \Pages
     */
    public function setPages($pages)
    {
        $this->pages =  $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return pages
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Add page
     *
     * @param \AppBundle\Entity\Pages $page
     *
     * @return Country
     */
    public function addPage(\AppBundle\Entity\Pages $page)
    {
        $this->pages[] = $page;

        return $this;
    }

    /**
     * Remove page
     *
     * @param \AppBundle\Entity\Pages $page
     */
    public function removePage(\AppBundle\Entity\Pages $page)
    {
        $this->pages->removeElement($page);
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Country
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
