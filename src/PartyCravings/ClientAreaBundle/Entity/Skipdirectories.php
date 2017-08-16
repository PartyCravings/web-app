<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skipdirectories
 *
 * @ORM\Table(name="skipdirectories")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\SkipdirectoriesRepository")
 */
class Skipdirectories
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
     * @ORM\Column(name="website_id", type="integer")
     */
    private $websiteId;

    /**
     * @var int
     *
     * @ORM\Column(name="directory_id", type="integer")
     */
    private $directoryId;


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
     * Set websiteId
     *
     * @param integer $websiteId
     *
     * @return Skipdirectories
     */
    public function setWebsiteId($websiteId)
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    /**
     * Get websiteId
     *
     * @return int
     */
    public function getWebsiteId()
    {
        return $this->websiteId;
    }

    /**
     * Set directoryId
     *
     * @param integer $directoryId
     *
     * @return Skipdirectories
     */
    public function setDirectoryId($directoryId)
    {
        $this->directoryId = $directoryId;

        return $this;
    }

    /**
     * Get directoryId
     *
     * @return int
     */
    public function getDirectoryId()
    {
        return $this->directoryId;
    }
}

