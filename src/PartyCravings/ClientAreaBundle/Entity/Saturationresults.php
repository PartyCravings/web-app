<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saturationresults
 *
 * @ORM\Table(name="saturationresults")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\SaturationresultsRepository")
 */
class Saturationresults
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
     * @var string
     *
     * @ORM\Column(name="google", type="string", length=255)
     */
    private $google;

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=255)
     */
    private $msn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="result_time", type="datetime")
     */
    private $resultTime;


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
     * @return Saturationresults
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
     * Set google
     *
     * @param string $google
     *
     * @return Saturationresults
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string
     */
    public function getGoogle()
    {
        return $this->google;
    }

    /**
     * Set msn
     *
     * @param string $msn
     *
     * @return Saturationresults
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set resultTime
     *
     * @param \DateTime $resultTime
     *
     * @return Saturationresults
     */
    public function setResultTime($resultTime)
    {
        $this->resultTime = $resultTime;

        return $this;
    }

    /**
     * Get resultTime
     *
     * @return \DateTime
     */
    public function getResultTime()
    {
        return $this->resultTime;
    }
}

