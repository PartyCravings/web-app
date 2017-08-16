<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Properties
 *
 * @ORM\Table(name="properties")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\PropertiesRepository")
 */
class Properties
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
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="propertypath", type="string", length=255)
     */
    private $propertypath;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyname", type="string", length=255)
     */
    private $propertyname;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyvalue", type="string", length=255)
     */
    private $propertyvalue;


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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Properties
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set propertypath
     *
     * @param string $propertypath
     *
     * @return Properties
     */
    public function setPropertypath($propertypath)
    {
        $this->propertypath = $propertypath;

        return $this;
    }

    /**
     * Get propertypath
     *
     * @return string
     */
    public function getPropertypath()
    {
        return $this->propertypath;
    }

    /**
     * Set propertyname
     *
     * @param string $propertyname
     *
     * @return Properties
     */
    public function setPropertyname($propertyname)
    {
        $this->propertyname = $propertyname;

        return $this;
    }

    /**
     * Get propertyname
     *
     * @return string
     */
    public function getPropertyname()
    {
        return $this->propertyname;
    }

    /**
     * Set propertyvalue
     *
     * @param string $propertyvalue
     *
     * @return Properties
     */
    public function setPropertyvalue($propertyvalue)
    {
        $this->propertyvalue = $propertyvalue;

        return $this;
    }

    /**
     * Get propertyvalue
     *
     * @return string
     */
    public function getPropertyvalue()
    {
        return $this->propertyvalue;
    }
}

