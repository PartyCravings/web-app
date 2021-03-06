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
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Country.
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 * @UniqueEntity(fields={"name","hostname"}, message="country.exists")
 */
class Country
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
     * @var string
     *
     * @Assert\NotBlank(message="country.name.blank")
     * @Assert\Country(message="country.name.invalid")
     * @ORM\Column(name="name", type="string", unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\Url(
     *      checkDNS = true,
     *      dnsMessage="country.hostname.not_resolved"
     * )
     * @ORM\Column(name="hostname", type="string", unique=true, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="subdomain", type="string", unique=true, nullable=true)
     */
    private $subdomain;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="country.defaultlocale.blank")
     * @Assert\Locale(message="country.defaultlocale.invalid")
     * @ORM\Column(name="default_locale", type="string")
     */
    private $defaultLocale;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="country.defaultlanguage.blank")
     * @Assert\Language(message="country.defaultlanguage.invalid")
     * @ORM\Column(name="default_language", type="string")
     */
    private $defaultLanguage;

    /**
     * @var Currency
     *
     * @Assert\NotBlank(message="country.defaultcurrency.blank")
     * @ORM\ManyToOne(targetEntity="Currency")
     */
    private $defaultCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="info_mail", type="string", nullable=true)
     */
    private $infoMail;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var Currency
     *
     * @ORM\ManyToMany(targetEntity="Currency")
     */
    private $currencies;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="country.timezone.blank")
     * @ORM\Column(name="timezone", type="string")
     */
    private $timezone;

    /**
     * @var Account
     *
     * @Assert\NotBlank(message="country.contacts.blank")
     * @ORM\ManyToMany(targetEntity="Account")
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
     * @var Address
     *
     * @Assert\Valid
     * @ORM\ManyToOne(targetEntity="Address",cascade={"persist"})
     */
    private $address;

    /**
     * @Assert\IsNull()
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $createdBy;

    /**
     * @Assert\IsNull()
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $updatedBy;

    /**
     * @var pages
     *
     * Many Countries have Many Pages
     * @ORM\ManyToMany(targetEntity="Pages", inversedBy="countries")
     */
    private $pages;

    /**
     * @var SocialLink
     *
     * @Assert\NotBlank(message="country.sociallinks.blank")
     * @ORM\ManyToMany(targetEntity="SocialLink")
     */
    private $socialLinks;

    /**
     * @var Category
     *
     * @Assert\NotBlank(message="country.categories.blank")
     * @ORM\OneToMany(targetEntity="Category", mappedBy="country")
     */
    private $categories;

    /**
     * @var int
     *
     * @Assert\NotBlank(message="country.taxrate.blank")
     * @Assert\Range(
     *      min = 0,
     *      max = 100,
     *      invalidMessage="country.taxrate.invalid"
     * )
     * @ORM\Column(name="tax_rate", type="float")
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
     * Get timezone.
     *
     * @return \DateTimeZone
     */
    public function getTimezone()
    {
        return $this->timezone ?: 'Africa/Lagos';
    }

    /**
     * Set dateDeleted.
     *
     * @param \DateTime $dateDeleted
     *
     * @return Country
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted
            ->setTimezone(
                new \DateTimeZone($this->getTimezone())
            );

        return $this;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return Country
     */
    public function setCreated($created)
    {
        $this->created = $created
            ->setTimezone(
                new \DateTimeZone($this->getTimezone())
            );

        return $this;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return Country
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated
            ->setTimezone(
                new \DateTimeZone($this->getTimezone())
            );

        return $this;
    }

    public function __toString()
    {
        return $this->name;
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
     * Set name.
     *
     * @param string $name
     *
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        $this->setSubdomain($name);

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set hostname.
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
     * Get hostname.
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set subdomain.
     *
     * @param string $subdomain
     *
     * @return Country
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = mb_strtolower($subdomain.'.'.getenv('hostname'));

        return $this;
    }

    /**
     * Get subdomain.
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * Set defaultLocale.
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
     * Get defaultLocale.
     *
     * @return string
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * Set defaultLanguage.
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
     * Get defaultLanguage.
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Set timezone.
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
     * Set isEnabled.
     *
     * @param bool $isEnabled
     *
     * @return Country
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
     * Get created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
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
     * Set taxRate.
     *
     * @param float $taxRate
     *
     * @return Country
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate.
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Set defaultCurrency.
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
     * Get defaultCurrency.
     *
     * @return \AppBundle\Entity\Currency
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * Add currency.
     *
     * @param \AppBundle\Entity\Currency $currency
     *
     * @return Country
     */
    public function addCurrency(\AppBundle\Entity\Currency $currency)
    {
        $this->currencies[] = $currency;

        return $this;
    }

    /**
     * Remove currency.
     *
     * @param \AppBundle\Entity\Currency $currency
     */
    public function removeCurrency(\AppBundle\Entity\Currency $currency)
    {
        $this->currencies->removeElement($currency);
    }

    /**
     * Get currencies.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * Add contact.
     *
     * @param \AppBundle\Entity\Account $contact
     *
     * @return Country
     */
    public function addContact(\AppBundle\Entity\Account $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact.
     *
     * @param \AppBundle\Entity\Account $contact
     */
    public function removeContact(\AppBundle\Entity\Account $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set createdBy.
     *
     * @param \AppBundle\Entity\Account $createdBy
     *
     * @return Country
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
     * @return Country
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
     * Add socialLink.
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
     * Remove socialLink.
     *
     * @param \AppBundle\Entity\SocialLink $socialLink
     */
    public function removeSocialLink(\AppBundle\Entity\SocialLink $socialLink)
    {
        $this->socialLinks->removeElement($socialLink);
    }

    /**
     * Get socialLinks.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSocialLinks()
    {
        return $this->socialLinks;
    }

    /**
     * Add category.
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
     * Remove category.
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set address.
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Country
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set infoMail.
     *
     * @param string $infoMail
     *
     * @return Country
     */
    public function setInfoMail($infoMail)
    {
        $this->infoMail = $infoMail;

        return $this;
    }

    /**
     * Get infoMail.
     *
     * @return string
     */
    public function getInfoMail()
    {
        return $this->infoMail;
    }

    /**
     * Set phone.
     *
     * @param string $phone
     *
     * @return Country
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add page.
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
     * Remove page.
     *
     * @param \AppBundle\Entity\Pages $page
     */
    public function removePage(\AppBundle\Entity\Pages $page)
    {
        $this->pages->removeElement($page);
    }

    /**
     * Get pages.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPages()
    {
        return $this->pages;
    }
}
