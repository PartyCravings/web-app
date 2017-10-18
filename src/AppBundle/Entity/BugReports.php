<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BugReports
 *
 * @ORM\Table(name="bug_reports")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BugReportsRepository")
 */
class BugReports
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
     * @ORM\Column(name="error_code", type="string", length=255)
     */
    private $errorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="severity", type="integer")
     */
    private $severity;

    /**
     * @var string
     *
     * @ORM\Column(name="php_version", type="string", length=255)
     */
    private $phpVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="line", type="string", length=255)
     */
    private $line;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255)
     */
    private $file;

    /**
     * @var bool
     *
     * @ORM\Column(name="dupliacte", type="boolean")
     */
    private $dupliacte;

    /**
     * @var string
     *
     * @ORM\Column(name="blocks", type="string", length=255)
     */
    private $blocks;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_activity", type="datetime")
     */
    private $lastActivity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="name_id", type="integer")
     */
    private $nameId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_to", type="string", length=255)
     */
    private $assignedTo;

    /**
     * @var int
     *
     * @ORM\Column(name="bug_report_id", type="integer")
     */
    private $bugReportId;


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
     * Set errorCode
     *
     * @param string $errorCode
     *
     * @return BugReports
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return BugReports
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return BugReports
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
     * Set subject
     *
     * @param string $subject
     *
     * @return BugReports
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return BugReports
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set severity
     *
     * @param integer $severity
     *
     * @return BugReports
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;

        return $this;
    }

    /**
     * Get severity
     *
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Set phpVersion
     *
     * @param string $phpVersion
     *
     * @return BugReports
     */
    public function setPhpVersion($phpVersion)
    {
        $this->phpVersion = $phpVersion;

        return $this;
    }

    /**
     * Get phpVersion
     *
     * @return string
     */
    public function getPhpVersion()
    {
        return $this->phpVersion;
    }

    /**
     * Set line
     *
     * @param string $line
     *
     * @return BugReports
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return BugReports
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set dupliacte
     *
     * @param boolean $dupliacte
     *
     * @return BugReports
     */
    public function setDupliacte($dupliacte)
    {
        $this->dupliacte = $dupliacte;

        return $this;
    }

    /**
     * Get dupliacte
     *
     * @return bool
     */
    public function getDupliacte()
    {
        return $this->dupliacte;
    }

    /**
     * Set blocks
     *
     * @param string $blocks
     *
     * @return BugReports
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;

        return $this;
    }

    /**
     * Get blocks
     *
     * @return string
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return BugReports
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return BugReports
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     *
     * @return BugReports
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return BugReports
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BugReports
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
     * Set nameId
     *
     * @param integer $nameId
     *
     * @return BugReports
     */
    public function setNameId($nameId)
    {
        $this->nameId = $nameId;

        return $this;
    }

    /**
     * Get nameId
     *
     * @return int
     */
    public function getNameId()
    {
        return $this->nameId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return BugReports
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
     * Set assignedTo
     *
     * @param string $assignedTo
     *
     * @return BugReports
     */
    public function setAssignedTo($assignedTo)
    {
        $this->assignedTo = $assignedTo;

        return $this;
    }

    /**
     * Get assignedTo
     *
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->assignedTo;
    }

    /**
     * Set bugReportId
     *
     * @param integer $bugReportId
     *
     * @return BugReports
     */
    public function setBugReportId($bugReportId)
    {
        $this->bugReportId = $bugReportId;

        return $this;
    }

    /**
     * Get bugReportId
     *
     * @return int
     */
    public function getBugReportId()
    {
        return $this->bugReportId;
    }
}
