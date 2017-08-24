<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trackers
 *
 * @ORM\Table(name="trackers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrackersRepository")
 */
class Trackers
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
     * @ORM\Column(name="tracker_id", type="integer")
     */
    private $trackerId;

    /**
     * @var string
     *
     * @ORM\Column(name="trackername", type="string", length=255)
     */
    private $trackername;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="client_id", type="integer")
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="viewwindow", type="string", length=255)
     */
    private $viewwindow;

    /**
     * @var string
     *
     * @ORM\Column(name="clickwindow", type="string", length=255)
     */
    private $clickwindow;

    /**
     * @var string
     *
     * @ORM\Column(name="blockwindow", type="string", length=255)
     */
    private $blockwindow;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="linkcampaigns", type="string", length=255)
     */
    private $linkcampaigns;

    /**
     * @var string
     *
     * @ORM\Column(name="variablemethod", type="string", length=255)
     */
    private $variablemethod;

    /**
     * @var string
     *
     * @ORM\Column(name="appendcode", type="string", length=255)
     */
    private $appendcode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;


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
     * Set trackerId
     *
     * @param integer $trackerId
     *
     * @return Trackers
     */
    public function setTrackerId($trackerId)
    {
        $this->trackerId = $trackerId;

        return $this;
    }

    /**
     * Get trackerId
     *
     * @return int
     */
    public function getTrackerId()
    {
        return $this->trackerId;
    }

    /**
     * Set trackername
     *
     * @param string $trackername
     *
     * @return Trackers
     */
    public function setTrackername($trackername)
    {
        $this->trackername = $trackername;

        return $this;
    }

    /**
     * Get trackername
     *
     * @return string
     */
    public function getTrackername()
    {
        return $this->trackername;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Trackers
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
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Trackers
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
     * Set viewwindow
     *
     * @param string $viewwindow
     *
     * @return Trackers
     */
    public function setViewwindow($viewwindow)
    {
        $this->viewwindow = $viewwindow;

        return $this;
    }

    /**
     * Get viewwindow
     *
     * @return string
     */
    public function getViewwindow()
    {
        return $this->viewwindow;
    }

    /**
     * Set clickwindow
     *
     * @param string $clickwindow
     *
     * @return Trackers
     */
    public function setClickwindow($clickwindow)
    {
        $this->clickwindow = $clickwindow;

        return $this;
    }

    /**
     * Get clickwindow
     *
     * @return string
     */
    public function getClickwindow()
    {
        return $this->clickwindow;
    }

    /**
     * Set blockwindow
     *
     * @param string $blockwindow
     *
     * @return Trackers
     */
    public function setBlockwindow($blockwindow)
    {
        $this->blockwindow = $blockwindow;

        return $this;
    }

    /**
     * Get blockwindow
     *
     * @return string
     */
    public function getBlockwindow()
    {
        return $this->blockwindow;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Trackers
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
     * Set type
     *
     * @param string $type
     *
     * @return Trackers
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
     * Set linkcampaigns
     *
     * @param string $linkcampaigns
     *
     * @return Trackers
     */
    public function setLinkcampaigns($linkcampaigns)
    {
        $this->linkcampaigns = $linkcampaigns;

        return $this;
    }

    /**
     * Get linkcampaigns
     *
     * @return string
     */
    public function getLinkcampaigns()
    {
        return $this->linkcampaigns;
    }

    /**
     * Set variablemethod
     *
     * @param string $variablemethod
     *
     * @return Trackers
     */
    public function setVariablemethod($variablemethod)
    {
        $this->variablemethod = $variablemethod;

        return $this;
    }

    /**
     * Get variablemethod
     *
     * @return string
     */
    public function getVariablemethod()
    {
        return $this->variablemethod;
    }

    /**
     * Set appendcode
     *
     * @param string $appendcode
     *
     * @return Trackers
     */
    public function setAppendcode($appendcode)
    {
        $this->appendcode = $appendcode;

        return $this;
    }

    /**
     * Get appendcode
     *
     * @return string
     */
    public function getAppendcode()
    {
        return $this->appendcode;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Trackers
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
}
