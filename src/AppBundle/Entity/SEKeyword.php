<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SEKeyword
 *
 * @ORM\Table(name="s_e_keyword")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SEKeywordRepository")
 */
class SEKeyword
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
     * @ORM\Column(name="id_vendor", type="string", length=255)
     */
    private $idVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor_group", type="string", length=255)
     */
    private $idVendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return SEKeyword
     */
    public function setIdVendor($idVendor)
    {
        $this->idVendor = $idVendor;

        return $this;
    }

    /**
     * Get idVendor
     *
     * @return string
     */
    public function getIdVendor()
    {
        return $this->idVendor;
    }

    /**
     * Set idVendorGroup
     *
     * @param string $idVendorGroup
     *
     * @return SEKeyword
     */
    public function setIdVendorGroup($idVendorGroup)
    {
        $this->idVendorGroup = $idVendorGroup;

        return $this;
    }

    /**
     * Get idVendorGroup
     *
     * @return string
     */
    public function getIdVendorGroup()
    {
        return $this->idVendorGroup;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return SEKeyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return SEKeyword
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param string $dateUpd
     *
     * @return SEKeyword
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return SEKeyword
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
     * @return SEKeyword
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
}

