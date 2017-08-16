<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * LandingPageSettings
 *
 * @ORM\Table(name="landing_page_settings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LandingPageSettingsRepository")
 */
class LandingPageSettings
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
     *  @ORM\ManyToMany(targetEntity="AppBundle\Entity\ContactSettings",
     *     fetch="EXTRA_LAZY",)
     * @ORM\JoinColumn(name="id_contactsettings",
     *     referencedColumnName="id")
     */
    private $idContactsettings = null;

    /**
     *  @ORM\ManyToMany(targetEntity="AppBundle\Entity\LinkSettings",
     *     fetch="EXTRA_LAZY",)
     * @ORM\JoinColumn(name="id_linksettings",
     *     referencedColumnName="id")
     */
    private $idLinksettings = null;

    /**
     *  @ORM\ManyToMany(targetEntity="AppBundle\Entity\SeoSettings",
     *     fetch="EXTRA_LAZY",)
     * @ORM\JoinColumn(name="id_seosettings",
     *     referencedColumnName="id")
     */
    private $idSeosettings = null;

    public function __construct()
    {
        $this->idContactsettings = new ArrayCollection();
        $this->idLinksettings = new ArrayCollection();
        $this->idSeosettings = new ArrayCollection();
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
     * Set idContactsettings
     *
     * @param string $idContactsettings
     *
     * @return LandingPageSettings
     */
    public function setIdContactsettings($idContactsettings)
    {
        if ($this->idContactsettings->contains($idContactsettings))
        {
            return  null;
        }
        $this->idContactsettings[] = $idContactsettings;

        return $this;
    }

    /**
     * Get idContactsettings
     *
     * @return string
     */
    public function getIdContactsettings()
    {
        return $this->idContactsettings;
    }

    /**
     * Set idLinksettings
     *
     * @param string $idLinksettings
     *
     * @return LandingPageSettings
     */
    public function setIdLinksettings($idLinksettings)
    {
        if ($this->idLinksettings->contains($idLinksettings))
        {
            return  null;
        }
        $this->idLinksettings[] = $idLinksettings;

        return $this;
    }

    /**
     * Get idLinksettings
     *
     * @return string
     */
    public function getIdLinksettings()
    {
        return $this->idLinksettings;
    }

    /**
     * Set idSeosettings
     *
     * @param string $idSeosettings
     *
     * @return LandingPageSettings
     */
    public function setIdSeosettings($idSeosettings)
    {
        if ($this->idSeosettings->contains($idSeosettings))
        {
            return  null;
        }
        $this->idSeosettings[] = $idSeosettings;

        return $this;
    }

    /**
     * Get idSeosettings
     *
     * @return string
     */
    public function getIdSeosettings()
    {
        return $this->idSeosettings;
    }
}

