<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rankresults
 *
 * @ORM\Table(name="rankresults")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\RankresultsRepository")
 */
class Rankresults
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
     * @ORM\Column(name="google_pagerank", type="string", length=255)
     */
    private $googlePagerank;

    /**
     * @var int
     *
     * @ORM\Column(name="alexa_rank", type="integer")
     */
    private $alexaRank;

    /**
     * @var int
     *
     * @ORM\Column(name="moz_rank", type="integer")
     */
    private $mozRank;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="result_time", type="datetime")
     */
    private $resultTime;

    /**
     * @var int
     *
     * @ORM\Column(name="domain_authority", type="integer")
     */
    private $domainAuthority;

    /**
     * @var int
     *
     * @ORM\Column(name="page_authority", type="integer")
     */
    private $pageAuthority;


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
     * @return Rankresults
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
     * Set googlePagerank
     *
     * @param string $googlePagerank
     *
     * @return Rankresults
     */
    public function setGooglePagerank($googlePagerank)
    {
        $this->googlePagerank = $googlePagerank;

        return $this;
    }

    /**
     * Get googlePagerank
     *
     * @return string
     */
    public function getGooglePagerank()
    {
        return $this->googlePagerank;
    }

    /**
     * Set alexaRank
     *
     * @param integer $alexaRank
     *
     * @return Rankresults
     */
    public function setAlexaRank($alexaRank)
    {
        $this->alexaRank = $alexaRank;

        return $this;
    }

    /**
     * Get alexaRank
     *
     * @return int
     */
    public function getAlexaRank()
    {
        return $this->alexaRank;
    }

    /**
     * Set mozRank
     *
     * @param integer $mozRank
     *
     * @return Rankresults
     */
    public function setMozRank($mozRank)
    {
        $this->mozRank = $mozRank;

        return $this;
    }

    /**
     * Get mozRank
     *
     * @return int
     */
    public function getMozRank()
    {
        return $this->mozRank;
    }

    /**
     * Set resultTime
     *
     * @param \DateTime $resultTime
     *
     * @return Rankresults
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

    /**
     * Set domainAuthority
     *
     * @param integer $domainAuthority
     *
     * @return Rankresults
     */
    public function setDomainAuthority($domainAuthority)
    {
        $this->domainAuthority = $domainAuthority;

        return $this;
    }

    /**
     * Get domainAuthority
     *
     * @return int
     */
    public function getDomainAuthority()
    {
        return $this->domainAuthority;
    }

    /**
     * Set pageAuthority
     *
     * @param integer $pageAuthority
     *
     * @return Rankresults
     */
    public function setPageAuthority($pageAuthority)
    {
        $this->pageAuthority = $pageAuthority;

        return $this;
    }

    /**
     * Get pageAuthority
     *
     * @return int
     */
    public function getPageAuthority()
    {
        return $this->pageAuthority;
    }
}

