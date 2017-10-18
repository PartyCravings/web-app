<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LightingAndSoundOrders
 *
 * @ORM\Table(name="lighting_and_sound_orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LightingAndSoundOrdersRepository")
 */
class LightingAndSoundOrders
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
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\Column(name="party_id", type="integer")
     */
    private $partyId;

    /**
     * @var int
     *
     * @ORM\Column(name="ls_engineers", type="integer")
     */
    private $lsEngineers;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="ls_notes", type="string", length=255)
     */
    private $lsNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="hall_size", type="string", length=255)
     */
    private $hallSize;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="string", length=255)
     */
    private $capacity;

    /**
     * @var int
     *
     * @ORM\Column(name="eventcr_id", type="integer")
     */
    private $eventcrId;

    /**
     * @var string
     *
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="current_state", type="string", length=255)
     */
    private $currentState;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="string", length=255)
     */
    private $conversionRate;

    /**
     * @var string
     *
     * @ORM\Column(name="recyclable", type="string", length=255)
     */
    private $recyclable;

    /**
     * @var string
     *
     * @ORM\Column(name="gift", type="string", length=255)
     */
    private $gift;

    /**
     * @var string
     *
     * @ORM\Column(name="gift_notes", type="string", length=255)
     */
    private $giftNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_number", type="string", length=255)
     */
    private $trackingNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts", type="string", length=255)
     */
    private $totalDiscounts;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_incl", type="string", length=255)
     */
    private $totalDiscountsTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_excl", type="string", length=255)
     */
    private $totalDiscountsTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="string", length=255)
     */
    private $totalPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_incl", type="string", length=255)
     */
    private $totalPaidTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="string", length=255)
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="string", length=255)
     */
    private $totalPaidReal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_ls_cost", type="string", length=255)
     */
    private $totalLsCost;

    /**
     * @var string
     *
     * @ORM\Column(name="valid", type="string", length=255)
     */
    private $valid;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_no", type="string", length=255)
     */
    private $reservationNo;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_date", type="string", length=255)
     */
    private $reservationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_approved", type="string", length=255)
     */
    private $reservationApproved;

    /**
     * @var string
     *
     * @ORM\Column(name="deployment_date", type="string", length=255)
     */
    private $deploymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="deployment_status", type="string", length=255)
     */
    private $deploymentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=255)
     */
    private $payment;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255)
     */
    private $module;


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
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return LightingAndSoundOrders
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return LightingAndSoundOrders
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set partyId
     *
     * @param integer $partyId
     *
     * @return LightingAndSoundOrders
     */
    public function setPartyId($partyId)
    {
        $this->partyId = $partyId;

        return $this;
    }

    /**
     * Get partyId
     *
     * @return int
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Set lsEngineers
     *
     * @param integer $lsEngineers
     *
     * @return LightingAndSoundOrders
     */
    public function setLsEngineers($lsEngineers)
    {
        $this->lsEngineers = $lsEngineers;

        return $this;
    }

    /**
     * Get lsEngineers
     *
     * @return int
     */
    public function getLsEngineers()
    {
        return $this->lsEngineers;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return LightingAndSoundOrders
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return LightingAndSoundOrders
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return LightingAndSoundOrders
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set lsNotes
     *
     * @param string $lsNotes
     *
     * @return LightingAndSoundOrders
     */
    public function setLsNotes($lsNotes)
    {
        $this->lsNotes = $lsNotes;

        return $this;
    }

    /**
     * Get lsNotes
     *
     * @return string
     */
    public function getLsNotes()
    {
        return $this->lsNotes;
    }

    /**
     * Set hallSize
     *
     * @param string $hallSize
     *
     * @return LightingAndSoundOrders
     */
    public function setHallSize($hallSize)
    {
        $this->hallSize = $hallSize;

        return $this;
    }

    /**
     * Get hallSize
     *
     * @return string
     */
    public function getHallSize()
    {
        return $this->hallSize;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return LightingAndSoundOrders
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set eventcrId
     *
     * @param integer $eventcrId
     *
     * @return LightingAndSoundOrders
     */
    public function setEventcrId($eventcrId)
    {
        $this->eventcrId = $eventcrId;

        return $this;
    }

    /**
     * Get eventcrId
     *
     * @return int
     */
    public function getEventcrId()
    {
        return $this->eventcrId;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return LightingAndSoundOrders
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return string
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return LightingAndSoundOrders
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set currentState
     *
     * @param string $currentState
     *
     * @return LightingAndSoundOrders
     */
    public function setCurrentState($currentState)
    {
        $this->currentState = $currentState;

        return $this;
    }

    /**
     * Get currentState
     *
     * @return string
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     *
     * @return LightingAndSoundOrders
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set recyclable
     *
     * @param string $recyclable
     *
     * @return LightingAndSoundOrders
     */
    public function setRecyclable($recyclable)
    {
        $this->recyclable = $recyclable;

        return $this;
    }

    /**
     * Get recyclable
     *
     * @return string
     */
    public function getRecyclable()
    {
        return $this->recyclable;
    }

    /**
     * Set gift
     *
     * @param string $gift
     *
     * @return LightingAndSoundOrders
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get gift
     *
     * @return string
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set giftNotes
     *
     * @param string $giftNotes
     *
     * @return LightingAndSoundOrders
     */
    public function setGiftNotes($giftNotes)
    {
        $this->giftNotes = $giftNotes;

        return $this;
    }

    /**
     * Get giftNotes
     *
     * @return string
     */
    public function getGiftNotes()
    {
        return $this->giftNotes;
    }

    /**
     * Set trackingNumber
     *
     * @param string $trackingNumber
     *
     * @return LightingAndSoundOrders
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Set totalDiscounts
     *
     * @param string $totalDiscounts
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    /**
     * Get totalDiscounts
     *
     * @return string
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    /**
     * Set totalDiscountsTaxIncl
     *
     * @param string $totalDiscountsTaxIncl
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalDiscountsTaxIncl($totalDiscountsTaxIncl)
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxIncl
     *
     * @return string
     */
    public function getTotalDiscountsTaxIncl()
    {
        return $this->totalDiscountsTaxIncl;
    }

    /**
     * Set totalDiscountsTaxExcl
     *
     * @param string $totalDiscountsTaxExcl
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalDiscountsTaxExcl($totalDiscountsTaxExcl)
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxExcl
     *
     * @return string
     */
    public function getTotalDiscountsTaxExcl()
    {
        return $this->totalDiscountsTaxExcl;
    }

    /**
     * Set totalPaid
     *
     * @param string $totalPaid
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalPaid($totalPaid)
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    /**
     * Get totalPaid
     *
     * @return string
     */
    public function getTotalPaid()
    {
        return $this->totalPaid;
    }

    /**
     * Set totalPaidTaxIncl
     *
     * @param string $totalPaidTaxIncl
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalPaidTaxIncl($totalPaidTaxIncl)
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;

        return $this;
    }

    /**
     * Get totalPaidTaxIncl
     *
     * @return string
     */
    public function getTotalPaidTaxIncl()
    {
        return $this->totalPaidTaxIncl;
    }

    /**
     * Set totalPaidTaxExcl
     *
     * @param string $totalPaidTaxExcl
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalPaidTaxExcl($totalPaidTaxExcl)
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;

        return $this;
    }

    /**
     * Get totalPaidTaxExcl
     *
     * @return string
     */
    public function getTotalPaidTaxExcl()
    {
        return $this->totalPaidTaxExcl;
    }

    /**
     * Set totalPaidReal
     *
     * @param string $totalPaidReal
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalPaidReal($totalPaidReal)
    {
        $this->totalPaidReal = $totalPaidReal;

        return $this;
    }

    /**
     * Get totalPaidReal
     *
     * @return string
     */
    public function getTotalPaidReal()
    {
        return $this->totalPaidReal;
    }

    /**
     * Set totalLsCost
     *
     * @param string $totalLsCost
     *
     * @return LightingAndSoundOrders
     */
    public function setTotalLsCost($totalLsCost)
    {
        $this->totalLsCost = $totalLsCost;

        return $this;
    }

    /**
     * Get totalLsCost
     *
     * @return string
     */
    public function getTotalLsCost()
    {
        return $this->totalLsCost;
    }

    /**
     * Set valid
     *
     * @param string $valid
     *
     * @return LightingAndSoundOrders
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return string
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return LightingAndSoundOrders
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return LightingAndSoundOrders
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
     * @param string $dateUpd
     *
     * @return LightingAndSoundOrders
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set reservationNo
     *
     * @param string $reservationNo
     *
     * @return LightingAndSoundOrders
     */
    public function setReservationNo($reservationNo)
    {
        $this->reservationNo = $reservationNo;

        return $this;
    }

    /**
     * Get reservationNo
     *
     * @return string
     */
    public function getReservationNo()
    {
        return $this->reservationNo;
    }

    /**
     * Set reservationDate
     *
     * @param string $reservationDate
     *
     * @return LightingAndSoundOrders
     */
    public function setReservationDate($reservationDate)
    {
        $this->reservationDate = $reservationDate;

        return $this;
    }

    /**
     * Get reservationDate
     *
     * @return string
     */
    public function getReservationDate()
    {
        return $this->reservationDate;
    }

    /**
     * Set reservationApproved
     *
     * @param string $reservationApproved
     *
     * @return LightingAndSoundOrders
     */
    public function setReservationApproved($reservationApproved)
    {
        $this->reservationApproved = $reservationApproved;

        return $this;
    }

    /**
     * Get reservationApproved
     *
     * @return string
     */
    public function getReservationApproved()
    {
        return $this->reservationApproved;
    }

    /**
     * Set deploymentDate
     *
     * @param string $deploymentDate
     *
     * @return LightingAndSoundOrders
     */
    public function setDeploymentDate($deploymentDate)
    {
        $this->deploymentDate = $deploymentDate;

        return $this;
    }

    /**
     * Get deploymentDate
     *
     * @return string
     */
    public function getDeploymentDate()
    {
        return $this->deploymentDate;
    }

    /**
     * Set deploymentStatus
     *
     * @param string $deploymentStatus
     *
     * @return LightingAndSoundOrders
     */
    public function setDeploymentStatus($deploymentStatus)
    {
        $this->deploymentStatus = $deploymentStatus;

        return $this;
    }

    /**
     * Get deploymentStatus
     *
     * @return string
     */
    public function getDeploymentStatus()
    {
        return $this->deploymentStatus;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return LightingAndSoundOrders
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return LightingAndSoundOrders
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }
}
