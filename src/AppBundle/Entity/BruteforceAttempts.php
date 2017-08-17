<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BruteforceAttempts
 *
 * @ORM\Table(name="bruteforce_attempts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BruteforceAttemptsRepository")
 */
class BruteforceAttempts
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
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="occured", type="datetime")
     */
    private $occured;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="subnet", type="string", length=255)
     */
    private $subnet;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="string", length=255)
     */
    private $metadata;


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
     * Set action
     *
     * @param string $action
     *
     * @return BruteforceAttempts
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set occured
     *
     * @param \DateTime $occured
     *
     * @return BruteforceAttempts
     */
    public function setOccured($occured)
    {
        $this->occured = $occured;

        return $this;
    }

    /**
     * Get occured
     *
     * @return \DateTime
     */
    public function getOccured()
    {
        return $this->occured;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return BruteforceAttempts
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set subnet
     *
     * @param string $subnet
     *
     * @return BruteforceAttempts
     */
    public function setSubnet($subnet)
    {
        $this->subnet = $subnet;

        return $this;
    }

    /**
     * Get subnet
     *
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * Set metadata
     *
     * @param string $metadata
     *
     * @return BruteforceAttempts
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}

