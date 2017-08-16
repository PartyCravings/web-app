<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ClientsRepository")
 */
class Clients
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
     * @ORM\Column(name="client_id", type="integer")
     */
    private $clientId;

    /**
     * @var int
     *
     * @ORM\Column(name="agency_id", type="integer")
     */
    private $agencyId;

    /**
     * @var string
     *
     * @ORM\Column(name="clientname", type="string", length=255)
     */
    private $clientname;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="report", type="string", length=255)
     */
    private $report;

    /**
     * @var string
     *
     * @ORM\Column(name="report_interval", type="string", length=255)
     */
    private $reportInterval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="report_lastdate", type="datetime")
     */
    private $reportLastdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="report_deactivate", type="boolean")
     */
    private $reportDeactivate;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255)
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @var int
     *
     * @ORM\Column(name="account_id", type="integer")
     */
    private $accountId;

    /**
     * @var string
     *
     * @ORM\Column(name="advertiser_limitation", type="string", length=255)
     */
    private $advertiserLimitation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Clients
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set agencyId
     *
     * @param integer $agencyId
     *
     * @return Clients
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;

        return $this;
    }

    /**
     * Get agencyId
     *
     * @return int
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * Set clientname
     *
     * @param string $clientname
     *
     * @return Clients
     */
    public function setClientname($clientname)
    {
        $this->clientname = $clientname;

        return $this;
    }

    /**
     * Get clientname
     *
     * @return string
     */
    public function getClientname()
    {
        return $this->clientname;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Clients
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Clients
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set report
     *
     * @param string $report
     *
     * @return Clients
     */
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set reportInterval
     *
     * @param string $reportInterval
     *
     * @return Clients
     */
    public function setReportInterval($reportInterval)
    {
        $this->reportInterval = $reportInterval;

        return $this;
    }

    /**
     * Get reportInterval
     *
     * @return string
     */
    public function getReportInterval()
    {
        return $this->reportInterval;
    }

    /**
     * Set reportLastdate
     *
     * @param \DateTime $reportLastdate
     *
     * @return Clients
     */
    public function setReportLastdate($reportLastdate)
    {
        $this->reportLastdate = $reportLastdate;

        return $this;
    }

    /**
     * Get reportLastdate
     *
     * @return \DateTime
     */
    public function getReportLastdate()
    {
        return $this->reportLastdate;
    }

    /**
     * Set reportDeactivate
     *
     * @param boolean $reportDeactivate
     *
     * @return Clients
     */
    public function setReportDeactivate($reportDeactivate)
    {
        $this->reportDeactivate = $reportDeactivate;

        return $this;
    }

    /**
     * Get reportDeactivate
     *
     * @return bool
     */
    public function getReportDeactivate()
    {
        return $this->reportDeactivate;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Clients
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Clients
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Clients
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set advertiserLimitation
     *
     * @param string $advertiserLimitation
     *
     * @return Clients
     */
    public function setAdvertiserLimitation($advertiserLimitation)
    {
        $this->advertiserLimitation = $advertiserLimitation;

        return $this;
    }

    /**
     * Get advertiserLimitation
     *
     * @return string
     */
    public function getAdvertiserLimitation()
    {
        return $this->advertiserLimitation;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Clients
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
}

