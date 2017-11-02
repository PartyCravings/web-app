<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 * @UniqueEntity(fields={"name","hostname"}, message="country.exists")
 */
class Country
{
    /**
     * Hook SoftDeleteable behavior
     * updates deletedAt field
     */
    use SoftDeleteableEntity;
    
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
     * @Assert\NotBlank()
     * @ORM\Column(name="hostname", type="string", length=255, unique=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="default_locale", type="string", length=255)
     */
    private $defaultLocale;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="default_language", type="string", length=255, unique=true)
     */
    private $defaultLanguage;

    /**
     * @var Currency
     *
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Currency")
     */
    private $defaultCurrency;

    /**
     * @var Currency
     *
     * @ORM\ManyToMany(targetEntity="Currency")
     */
    private $currencies;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=255)
     */
    private $timezone;

    /**
     * @var Accounts
     *
     * @ORM\ManyToMany(targetEntity="Accounts")
     */
    private $contacts;

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
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     */
    private $updatedBy;

    /**
     * @var Pages
     *
     * Many Countries have Many Pages.
     * @ORM\ManyToMany(targetEntity="Pages")
     */
    private $pages;

    /**
     * @var SocialLink
     *
     * @ORM\ManyToMany(targetEntity="SocialLink")
     */
    private $socialLinks;


    /**
     * @var Category
     *
     * @ORM\OneToMany(targetEntity="Category", mappedBy="country")
     * @ORM\JoinColumn(name="categories", referencedColumnName="id")
     */
    private $categories;

    /**
     * @var TaxRate
     *
     * @ORM\ManyToOne(targetEntity="TaxRates")
     */
    private $taxRate;


    public function __construct()
    {
        $this->pages = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->currencies = new ArrayCollection();
        $this->socialLinks = new ArrayCollection();
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

    /**
     * Set hostname
     *
     * @param string $hostname
     *
     * @return Country
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set defaultLocale
     *
     * @param string $defaultLocale
     *
     * @return Country
     */
    public function setDefaultLocale($defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;

        return $this;
    }

    /**
     * Get defaultLocale
     *
     * @return string
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * Set defaultLanguage
     *
     * @param string $defaultLanguage
     *
     * @return Country
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;

        return $this;
    }

    /**
     * Get defaultLanguage
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Country
     */
    public function setCreated($created)
    {
        $this->created = $created
            ->setTimezone(
                $this->getTimezone()
            );

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Country
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated
            ->setTimezone(
                $this->getTimezone()
            );

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\Accounts $createdBy
     *
     * @return Country
     */
    public function setCreatedBy(\AppBundle\Entity\Accounts $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\Accounts $updatedBy
     *
     * @return Country
     */
    public function setUpdatedBy(\AppBundle\Entity\Accounts $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Add contact
     *
     * @param \AppBundle\Entity\Accounts $contact
     *
     * @return Country
     */
    public function addContact(\AppBundle\Entity\Accounts $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \AppBundle\Entity\Accounts $contact
     */
    public function removeContact(\AppBundle\Entity\Accounts $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set defaultCurrency
     *
     * @param \AppBundle\Entity\Currency $defaultCurrency
     *
     * @return Country
     */
    public function setDefaultCurrency(\AppBundle\Entity\Currency $defaultCurrency = null)
    {
        $this->defaultCurrency = $defaultCurrency;

        return $this;
    }

    /**
     * Get defaultCurrency
     *
     * @return \AppBundle\Entity\Currency
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * Add currency
     *
     * @param \AppBundle\Entity\Currency $currency
     *
     * @return Country
     */
    public function addCurrency(\AppBundle\Entity\Currency $currency)
    {
        $this->currency[] = $currency;

        return $this;
    }

    /**
     * Remove currency
     *
     * @param \AppBundle\Entity\Currency $currency
     */
    public function removeCurrency(\AppBundle\Entity\Currency $currency)
    {
        $this->currency->removeElement($currency);
    }

    /**
     * Get currency
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Get currencies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * Add socialLink
     *
     * @param \AppBundle\Entity\SocialLink $socialLink
     *
     * @return Country
     */
    public function addSocialLink(\AppBundle\Entity\SocialLink $socialLink)
    {
        $this->socialLinks[] = $socialLink;

        return $this;
    }

    /**
     * Remove socialLink
     *
     * @param \AppBundle\Entity\SocialLink $socialLink
     */
    public function removeSocialLink(\AppBundle\Entity\SocialLink $socialLink)
    {
        $this->socialLinks->removeElement($socialLink);
    }

    /**
     * Get socialLinks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSocialLinks()
    {
        return $this->socialLinks;
    }

    /**
     * Set taxRate
     *
     * @param \AppBundle\Entity\TaxRates $taxRate
     *
     * @return Country
     */
    public function setTaxRate(\AppBundle\Entity\TaxRates $taxRate = null)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate
     *
     * @return \AppBundle\Entity\TaxRates
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }
}
