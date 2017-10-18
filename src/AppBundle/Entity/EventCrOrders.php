<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventCrOrders
 *
 * @ORM\Table(name="event_cr_orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventCrOrdersRepository")
 */
class EventCrOrders
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
     * @ORM\Column(name="eventcr_id", type="integer")
     */
    private $eventcrId;

    /**
     * @var int
     *
     * @ORM\Column(name="prop_exp", type="integer")
     */
    private $propExp;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @var int
     *
     * @ORM\Column(name="party_id", type="integer")
     */
    private $partyId;

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
     * @var int
     *
     * @ORM\Column(name="current_state", type="integer")
     */
    private $currentState;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=10, scale=0)
     */
    private $conversionRate;

    /**
     * @var int
     *
     * @ORM\Column(name="recyclable", type="integer")
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
     * @ORM\Column(name="gift_message", type="string", length=255)
     */
    private $giftMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_number", type="string", length=255)
     */
    private $trackingNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_excl", type="decimal", precision=10, scale=0)
     */
    private $totalDiscountsTaxExcl;

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
     * @ORM\Column(name="total_paid", type="decimal", precision=10, scale=0)
     */
    private $totalPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_icl", type="decimal", precision=10, scale=0)
     */
    private $totalPaidTaxIcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="decimal", precision=10, scale=0)
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="decimal", precision=10, scale=0)
     */
    private $totalPaidReal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_eventcr", type="string", length=255)
     */
    private $totalEventcr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime")
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="valid", type="string", length=255)
     */
    private $valid;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
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
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_date", type="string", length=255)
     */
    private $reservationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_no", type="string", length=255)
     */
    private $reservationNo;

    /**
     * @var int
     *
     * @ORM\Column(name="reservation_approved", type="integer")
     */
    private $reservationApproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deployment_date", type="datetime")
     */
    private $deploymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="deployment_status", type="decimal", precision=10, scale=0)
     */
    private $deploymentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="order_note", type="string", length=255)
     */
    private $orderNote;

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
     * Set eventcrId
     *
     * @param integer $eventcrId
     *
     * @return EventCrOrders
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
     * Set propExp
     *
     * @param integer $propExp
     *
     * @return EventCrOrders
     */
    public function setPropExp($propExp)
    {
        $this->propExp = $propExp;

        return $this;
    }

    /**
     * Get propExp
     *
     * @return int
     */
    public function getPropExp()
    {
        return $this->propExp;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return EventCrOrders
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
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return EventCrOrders
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
     * Set partyId
     *
     * @param integer $partyId
     *
     * @return EventCrOrders
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
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return EventCrOrders
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
     * @return EventCrOrders
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
     * @param integer $currentState
     *
     * @return EventCrOrders
     */
    public function setCurrentState($currentState)
    {
        $this->currentState = $currentState;

        return $this;
    }

    /**
     * Get currentState
     *
     * @return int
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
     * @return EventCrOrders
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
     * @param integer $recyclable
     *
     * @return EventCrOrders
     */
    public function setRecyclable($recyclable)
    {
        $this->recyclable = $recyclable;

        return $this;
    }

    /**
     * Get recyclable
     *
     * @return int
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
     * @return EventCrOrders
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
     * Set giftMessage
     *
     * @param string $giftMessage
     *
     * @return EventCrOrders
     */
    public function setGiftMessage($giftMessage)
    {
        $this->giftMessage = $giftMessage;

        return $this;
    }

    /**
     * Get giftMessage
     *
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->giftMessage;
    }

    /**
     * Set trackingNumber
     *
     * @param string $trackingNumber
     *
     * @return EventCrOrders
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
     * Set totalDiscountsTaxExcl
     *
     * @param string $totalDiscountsTaxExcl
     *
     * @return EventCrOrders
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
     * Set totalDiscounts
     *
     * @param string $totalDiscounts
     *
     * @return EventCrOrders
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
     * @return EventCrOrders
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
     * Set totalPaid
     *
     * @param string $totalPaid
     *
     * @return EventCrOrders
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
     * Set totalPaidTaxIcl
     *
     * @param string $totalPaidTaxIcl
     *
     * @return EventCrOrders
     */
    public function setTotalPaidTaxIcl($totalPaidTaxIcl)
    {
        $this->totalPaidTaxIcl = $totalPaidTaxIcl;

        return $this;
    }

    /**
     * Get totalPaidTaxIcl
     *
     * @return string
     */
    public function getTotalPaidTaxIcl()
    {
        return $this->totalPaidTaxIcl;
    }

    /**
     * Set totalPaidTaxExcl
     *
     * @param string $totalPaidTaxExcl
     *
     * @return EventCrOrders
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
     * @return EventCrOrders
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
     * Set totalEventcr
     *
     * @param string $totalEventcr
     *
     * @return EventCrOrders
     */
    public function setTotalEventcr($totalEventcr)
    {
        $this->totalEventcr = $totalEventcr;

        return $this;
    }

    /**
     * Get totalEventcr
     *
     * @return string
     */
    public function getTotalEventcr()
    {
        return $this->totalEventcr;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return EventCrOrders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set valid
     *
     * @param string $valid
     *
     * @return EventCrOrders
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
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return EventCrOrders
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
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
     * @return EventCrOrders
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
     * Set deleted
     *
     * @param string $deleted
     *
     * @return EventCrOrders
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
     * Set reservationDate
     *
     * @param string $reservationDate
     *
     * @return EventCrOrders
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
     * Set reservationNo
     *
     * @param string $reservationNo
     *
     * @return EventCrOrders
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
     * Set reservationApproved
     *
     * @param integer $reservationApproved
     *
     * @return EventCrOrders
     */
    public function setReservationApproved($reservationApproved)
    {
        $this->reservationApproved = $reservationApproved;

        return $this;
    }

    /**
     * Get reservationApproved
     *
     * @return int
     */
    public function getReservationApproved()
    {
        return $this->reservationApproved;
    }

    /**
     * Set deploymentDate
     *
     * @param \DateTime $deploymentDate
     *
     * @return EventCrOrders
     */
    public function setDeploymentDate($deploymentDate)
    {
        $this->deploymentDate = $deploymentDate;

        return $this;
    }

    /**
     * Get deploymentDate
     *
     * @return \DateTime
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
     * @return EventCrOrders
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
     * Set orderNote
     *
     * @param string $orderNote
     *
     * @return EventCrOrders
     */
    public function setOrderNote($orderNote)
    {
        $this->orderNote = $orderNote;

        return $this;
    }

    /**
     * Get orderNote
     *
     * @return string
     */
    public function getOrderNote()
    {
        return $this->orderNote;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return EventCrOrders
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
     * @return EventCrOrders
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
