<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DavShares
 *
 * @ORM\Table(name="dav_shares")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\DavSharesRepository")
 */
class DavShares
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
     * @ORM\Column(name="principaluri", type="string", length=255)
     */
    private $principaluri;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="access", type="string", length=255)
     */
    private $access;

    /**
     * @var int
     *
     * @ORM\Column(name="resource_id", type="integer")
     */
    private $resourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="publicuri", type="string", length=255)
     */
    private $publicuri;


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
     * Set principaluri
     *
     * @param string $principaluri
     *
     * @return DavShares
     */
    public function setPrincipaluri($principaluri)
    {
        $this->principaluri = $principaluri;

        return $this;
    }

    /**
     * Get principaluri
     *
     * @return string
     */
    public function getPrincipaluri()
    {
        return $this->principaluri;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return DavShares
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set access
     *
     * @param string $access
     *
     * @return DavShares
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set resourceId
     *
     * @param integer $resourceId
     *
     * @return DavShares
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * Get resourceId
     *
     * @return int
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Set publicuri
     *
     * @param string $publicuri
     *
     * @return DavShares
     */
    public function setPublicuri($publicuri)
    {
        $this->publicuri = $publicuri;

        return $this;
    }

    /**
     * Get publicuri
     *
     * @return string
     */
    public function getPublicuri()
    {
        return $this->publicuri;
    }
}

