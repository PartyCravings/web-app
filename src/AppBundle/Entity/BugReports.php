<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * BugReports
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
     * @var string
     *
     * @ORM\Column(name="error_code", type="integer")
     */
    private $errorCode;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string")
     */
    private $subject;

    /**
     * @var bool
     *
     * @ORM\Column(name="dupliacte", type="boolean")
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
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $updatedBy;
}
