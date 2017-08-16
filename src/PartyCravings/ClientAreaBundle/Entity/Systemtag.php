<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Systemtag
 *
 * @ORM\Table(name="systemtag")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\SystemtagRepository")
 */
class Systemtag
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="visibility", type="integer")
     */
    private $visibility;

    /**
     * @var bool
     *
     * @ORM\Column(name="editable", type="boolean")
     */
    private $editable;

    /**
     * @var int
     *
     * @ORM\Column(name="gid", type="integer")
     */
    private $gid;

    /**
     * @var int
     *
     * @ORM\Column(name="objectid", type="integer")
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="objecttype", type="string", length=255)
     */
    private $objecttype;


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
     * @return Systemtag
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
     * Set visibility
     *
     * @param integer $visibility
     *
     * @return Systemtag
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set editable
     *
     * @param boolean $editable
     *
     * @return Systemtag
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;

        return $this;
    }

    /**
     * Get editable
     *
     * @return bool
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * Set gid
     *
     * @param integer $gid
     *
     * @return Systemtag
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return int
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set objectid
     *
     * @param integer $objectid
     *
     * @return Systemtag
     */
    public function setObjectid($objectid)
    {
        $this->objectid = $objectid;

        return $this;
    }

    /**
     * Get objectid
     *
     * @return int
     */
    public function getObjectid()
    {
        return $this->objectid;
    }

    /**
     * Set objecttype
     *
     * @param string $objecttype
     *
     * @return Systemtag
     */
    public function setObjecttype($objecttype)
    {
        $this->objecttype = $objecttype;

        return $this;
    }

    /**
     * Get objecttype
     *
     * @return string
     */
    public function getObjecttype()
    {
        return $this->objecttype;
    }
}

