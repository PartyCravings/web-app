<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VendorGroups
 *
 * @ORM\Table(name="vendor_groups")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VendorGroupsRepository")
 */
class VendorGroups
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
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @ORM\OneToMany(targetEntity="LiveParties", mappedBy="vendorGroupId")
    */
    private $liveParties;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="priviledge", type="string", length=255)
     */
    private $priviledge;


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
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return VendorGroups
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return VendorGroups
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
     * Set description
     *
     * @param string $description
     *
     * @return VendorGroups
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set priviledge
     *
     * @param string $priviledge
     *
     * @return VendorGroups
     */
    public function setPriviledge($priviledge)
    {
        $this->priviledge = $priviledge;

        return $this;
    }

    /**
     * Get priviledge
     *
     * @return string
     */
    public function getPriviledge()
    {
        return $this->priviledge;
    }

    /**
     * @return mixed
     */
    public function getLiveParties()
    {
        return $this->liveParties;
    }
}

