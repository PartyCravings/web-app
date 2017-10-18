<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ZoneRepository")
 */
class Zone
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
    * @ORM\OneToMany(targetEntity="AsoEbi", mappedBy="zoneId")
    */
    private $asoEbi;

    /**
    * @ORM\OneToMany(targetEntity="Party", mappedBy="zoneId")
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
    * @ORM\OneToOne(targetEntity="ZoneDescriptions", inversedBy="zoneId")
     * @ORM\JoinColumn(name="zoneDescriptions", referencedColumnName="id")
     */
    private $zoneDescriptions;

    public function __construct()
    {
        $this->asoEbi = new ArrayCollection();
        $this->party = new ArrayCollection();
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
     * @return Zone
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
     * Set active
     *
     * @param string $active
     *
     * @return Zone
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
     * @return Zone
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
     * Add asoEbi
     *
     * @param \AppBundle\Entity\AsoEbi $asoEbi
     *
     * @return Zone
     */
    public function addAsoEbi(\AppBundle\Entity\AsoEbi $asoEbi)
    {
        $this->asoEbi[] = $asoEbi;

        return $this;
    }

    /**
     * Remove asoEbi
     *
     * @param \AppBundle\Entity\AsoEbi $asoEbi
     */
    public function removeAsoEbi(\AppBundle\Entity\AsoEbi $asoEbi)
    {
        $this->asoEbi->removeElement($asoEbi);
    }

    /**
     * Get asoEbi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsoEbi()
    {
        return $this->asoEbi;
    }

    /**
     * Add party
     *
     * @param \AppBundle\Entity\Party $party
     *
     * @return Zone
     */
    public function addParty(\AppBundle\Entity\Party $party)
    {
        $this->party[] = $party;

        return $this;
    }

    /**
     * Remove party
     *
     * @param \AppBundle\Entity\Party $party
     */
    public function removeParty(\AppBundle\Entity\Party $party)
    {
        $this->party->removeElement($party);
    }

    /**
     * Get party
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Set zoneDescriptions
     *
     * @param \AppBundle\Entity\ZoneDescriptions $zoneDescriptions
     *
     * @return Zone
     */
    public function setZoneDescriptions(\AppBundle\Entity\ZoneDescriptions $zoneDescriptions = null)
    {
        $this->zoneDescriptions = $zoneDescriptions;

        return $this;
    }

    /**
     * Get zoneDescriptions
     *
     * @return \AppBundle\Entity\ZoneDescriptions
     */
    public function getZoneDescriptions()
    {
        return $this->zoneDescriptions;
    }
}
