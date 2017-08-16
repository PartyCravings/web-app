<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tools
 *
 * @ORM\Table(name="tools")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ToolsRepository")
 */
class Tools
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
     * @var string
     *
     * @ORM\Column(name="url_section", type="string", length=255)
     */
    private $urlSection;

    /**
     * @var int
     *
     * @ORM\Column(name="user_access", type="integer")
     */
    private $userAccess;

    /**
     * @var int
     *
     * @ORM\Column(name="reportgen", type="integer")
     */
    private $reportgen;

    /**
     * @var bool
     *
     * @ORM\Column(name="cron", type="boolean")
     */
    private $cron;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * @return Tools
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
     * Set urlSection
     *
     * @param string $urlSection
     *
     * @return Tools
     */
    public function setUrlSection($urlSection)
    {
        $this->urlSection = $urlSection;

        return $this;
    }

    /**
     * Get urlSection
     *
     * @return string
     */
    public function getUrlSection()
    {
        return $this->urlSection;
    }

    /**
     * Set userAccess
     *
     * @param integer $userAccess
     *
     * @return Tools
     */
    public function setUserAccess($userAccess)
    {
        $this->userAccess = $userAccess;

        return $this;
    }

    /**
     * Get userAccess
     *
     * @return int
     */
    public function getUserAccess()
    {
        return $this->userAccess;
    }

    /**
     * Set reportgen
     *
     * @param integer $reportgen
     *
     * @return Tools
     */
    public function setReportgen($reportgen)
    {
        $this->reportgen = $reportgen;

        return $this;
    }

    /**
     * Get reportgen
     *
     * @return int
     */
    public function getReportgen()
    {
        return $this->reportgen;
    }

    /**
     * Set cron
     *
     * @param boolean $cron
     *
     * @return Tools
     */
    public function setCron($cron)
    {
        $this->cron = $cron;

        return $this;
    }

    /**
     * Get cron
     *
     * @return bool
     */
    public function getCron()
    {
        return $this->cron;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tools
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}

