<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preferences
 *
 * @ORM\Table(name="preferences")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\PreferencesRepository")
 */
class Preferences
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
     * @ORM\Column(name="userid", type="string", length=255)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="appid", type="integer")
     */
    private $appid;

    /**
     * @var string
     *
     * @ORM\Column(name="configkey", type="string", length=255)
     */
    private $configkey;

    /**
     * @var string
     *
     * @ORM\Column(name="configvalue", type="string", length=255)
     */
    private $configvalue;


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
     * @param string $userid
     *
     * @return Preferences
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set appid
     *
     * @param integer $appid
     *
     * @return Preferences
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set configkey
     *
     * @param string $configkey
     *
     * @return Preferences
     */
    public function setConfigkey($configkey)
    {
        $this->configkey = $configkey;

        return $this;
    }

    /**
     * Get configkey
     *
     * @return string
     */
    public function getConfigkey()
    {
        return $this->configkey;
    }

    /**
     * Set configvalue
     *
     * @param string $configvalue
     *
     * @return Preferences
     */
    public function setConfigvalue($configvalue)
    {
        $this->configvalue = $configvalue;

        return $this;
    }

    /**
     * Get configvalue
     *
     * @return string
     */
    public function getConfigvalue()
    {
        return $this->configvalue;
    }
}

