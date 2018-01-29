<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BugReports.
 *
 * @ORM\Table(name="bug_reports")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BugReportsRepository")
 */
class BugReports
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var int
     *
     * @Assert\Range(
     *      min = 100,
     *      max = 600,
     *      invalidMessage="bugReport.invalid_code"
     * )
     * @ORM\Column(name="error_code", type="integer")
     */
    private $errorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     * @Assert\Length(
     *     min=2,
     *     minMessage="bugReport.subject.too_short",
     *     max=50,
     *     maxMessage="bugReport.subject.too_long"
     * )
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", nullable=true)
     * @Assert\Length(
     *     min=10,
     *     minMessage="bugReport.subject.too_short",
     *     max=300,
     *     maxMessage="bugReport.subject.too_long"
     * )
     */
    private $subject;

    /**
     * @var bool
     *
     * @ORM\Column(name="duplicate", type="boolean")
     */
    private $duplicate = false;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $updatedBy;

    public function __toString()
    {
        return $this->errorCode;
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set errorCode.
     *
     * @param int $errorCode
     *
     * @return BugReports
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorCode.
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set type.
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
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set subject.
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
     * Get subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set duplicate.
     *
     * @param bool $duplicate
     *
     * @return BugReports
     */
    public function setDuplicate($duplicate)
    {
        $this->duplicate = $duplicate;

        return $this;
    }

    /**
     * Get duplicate.
     *
     * @return bool
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return BugReports
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return BugReports
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set createdBy.
     *
     * @param \AppBundle\Entity\Account $createdBy
     *
     * @return BugReports
     */
    public function setCreatedBy(\AppBundle\Entity\Account $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return \AppBundle\Entity\Account
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy.
     *
     * @param \AppBundle\Entity\Account $updatedBy
     *
     * @return BugReports
     */
    public function setUpdatedBy(\AppBundle\Entity\Account $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return \AppBundle\Entity\Account
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
