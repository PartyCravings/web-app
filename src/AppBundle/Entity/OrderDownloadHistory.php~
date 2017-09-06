<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDownloadHistory
 *
 * @ORM\Table(name="order_download_history")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderDownloadHistoryRepository")
 */
class OrderDownloadHistory
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
     * @ORM\ManyToOne(targetEntity="OrderDownload", inversedBy="orderDownloadHistory")
     * @ORM\JoinColumn(name="orderDownloadHistory", referencedColumnName="id")
     */
    private $orderDownloadId;

    /**
     * @var int
     *
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_service_id", type="integer")
     */
    private $orderserviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=255)
     */
    private $mask;

    /**
     * @var int
     *
     * @ORM\Column(name="download_id", type="integer")
     */
    private $downloadId;

    /**
     * @var string
     *
     * @ORM\Column(name="download_percent", type="decimal", precision=10, scale=0)
     */
    private $downloadPercent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    public function __construct()
    {
        $this->orderDownloadId;
    }


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
     * Set orderDownloadId
     *
     * @param integer $orderDownloadId
     *
     * @return OrderDownloadHistory
     */
    public function setOrderDownloadId($orderDownloadId)
    {
        $this->orderDownloadId = $orderDownloadId;

        return $this;
    }

    /**
     * Get orderDownloadId
     *
     * @return int
     */
    public function getOrderDownloadId()
    {
        return $this->orderDownloadId;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrderDownloadHistory
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderserviceId
     *
     * @param integer $orderserviceId
     *
     * @return OrderDownloadHistory
     */
    public function setOrderserviceId($orderserviceId)
    {
        $this->orderserviceId = $orderserviceId;

        return $this;
    }

    /**
     * Get orderserviceId
     *
     * @return int
     */
    public function getOrderserviceId()
    {
        return $this->orderserviceId;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return OrderDownloadHistory
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set mask
     *
     * @param string $mask
     *
     * @return OrderDownloadHistory
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set downloadId
     *
     * @param integer $downloadId
     *
     * @return OrderDownloadHistory
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;

        return $this;
    }

    /**
     * Get downloadId
     *
     * @return int
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }

    /**
     * Set downloadPercent
     *
     * @param string $downloadPercent
     *
     * @return OrderDownloadHistory
     */
    public function setDownloadPercent($downloadPercent)
    {
        $this->downloadPercent = $downloadPercent;

        return $this;
    }

    /**
     * Get downloadPercent
     *
     * @return string
     */
    public function getDownloadPercent()
    {
        return $this->downloadPercent;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return OrderDownloadHistory
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }
}
