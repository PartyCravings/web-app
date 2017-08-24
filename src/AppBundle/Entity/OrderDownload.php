<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDownload
 *
 * @ORM\Table(name="order_download")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderDownloadRepository")
 */
class OrderDownload
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
     * @ORM\Column(name="order_id", type="integer")
     */
    private $orderId;

    /**
     * @ORM\OneToMany(targetEntity="OrderDownloadHistory", mappedBy="orderDownloadId")
     */
    private $orderDownloadHistory;

    /**
     * @var int
     *
     * @ORM\Column(name="order_service_id", type="integer")
     */
    private $orderserviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="remaining_count", type="integer")
     */
    private $remainingCount;

    /**
     * @var string
     *
     * @ORM\Column(name="percentage", type="decimal", precision=10, scale=0)
     */
    private $percentage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="datetime")
     */
    private $expireDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sort_order", type="string", length=255)
     */
    private $sortOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="activate", type="string", length=255)
     */
    private $activate;

    /**
     * @var int
     *
     * @ORM\Column(name="activate_order_status_id", type="integer")
     */
    private $activateOrderStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="attributes_data", type="string", length=255)
     */
    private $attributesData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;


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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrderDownload
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
     * @return OrderDownload
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
     * Set name
     *
     * @param string $name
     *
     * @return OrderDownload
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
     * Set filename
     *
     * @param string $filename
     *
     * @return OrderDownload
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
     * @return OrderDownload
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
     * @return OrderDownload
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
     * Set status
     *
     * @param string $status
     *
     * @return OrderDownload
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
     * Set remainingCount
     *
     * @param integer $remainingCount
     *
     * @return OrderDownload
     */
    public function setRemainingCount($remainingCount)
    {
        $this->remainingCount = $remainingCount;

        return $this;
    }

    /**
     * Get remainingCount
     *
     * @return int
     */
    public function getRemainingCount()
    {
        return $this->remainingCount;
    }

    /**
     * Set percentage
     *
     * @param string $percentage
     *
     * @return OrderDownload
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     *
     * @return OrderDownload
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set sortOrder
     *
     * @param string $sortOrder
     *
     * @return OrderDownload
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set activate
     *
     * @param string $activate
     *
     * @return OrderDownload
     */
    public function setActivate($activate)
    {
        $this->activate = $activate;

        return $this;
    }

    /**
     * Get activate
     *
     * @return string
     */
    public function getActivate()
    {
        return $this->activate;
    }

    /**
     * Set activateOrderStatusId
     *
     * @param integer $activateOrderStatusId
     *
     * @return OrderDownload
     */
    public function setActivateOrderStatusId($activateOrderStatusId)
    {
        $this->activateOrderStatusId = $activateOrderStatusId;

        return $this;
    }

    /**
     * Get activateOrderStatusId
     *
     * @return int
     */
    public function getActivateOrderStatusId()
    {
        return $this->activateOrderStatusId;
    }

    /**
     * Set attributesData
     *
     * @param string $attributesData
     *
     * @return OrderDownload
     */
    public function setAttributesData($attributesData)
    {
        $this->attributesData = $attributesData;

        return $this;
    }

    /**
     * Get attributesData
     *
     * @return string
     */
    public function getAttributesData()
    {
        return $this->attributesData;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return OrderDownload
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
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return OrderDownload
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
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return OrderDownload
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;

        return $this;
    }

    /**
     * Get isSuspended
     *
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return OrderDownload
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return OrderDownload
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @return string
     */
    public function getOrderDownloadHistory(): string
    {
        return $this->orderDownloadHistory;
    }

    /**
     * @param string $orderDownloadHistory
     */
    public function setOrderDownloadHistory(string $orderDownloadHistory)
    {
        $this->orderDownloadHistory = $orderDownloadHistory;
    }
}
