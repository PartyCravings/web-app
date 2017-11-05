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
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string", unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="hostname", type="string", unique=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="default_locale", type="string")
     */
    private $defaultLocale;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="default_language", type="string")
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
     * @ORM\Column(name="timezone", type="string")
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
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Accounts")
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
     * Get timezone
     *
     * @return \DateTimeZone
     */
    public function getTimezone()
    {
        return new \DateTimeZone($this->timezone);
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
}
