<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JanitorialServices
 *
 * @ORM\Table(name="janitorial_services_orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JanitorialServicesOrdersRepository")
 */
class JanitorialServicesOrders
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
     * @ORM\Column(name="party_id", type="integer")
     */
    private $partyId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="janitor_numbers", type="string", length=255)
     */
    private $janitorNumbers;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="janitor_notes", type="string", length=255)
     */
    private $janitorNotes;

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
     * @ORM\Column(name="total_discounts_tax_excl", type="string", length=255)
     */
    private $totalDiscountsTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_incl", type="string", length=255)
     */
    private $totalDiscountsTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="string", length=255)
     */
    private $totalPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="string", length=255)
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_incl", type="string", length=255)
     */
    private $totalPaidTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="string", length=255)
     */
    private $totalPaidReal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_janitor_cost", type="string", length=255)
     */
    private $totalJanitorCost;

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
     * @var int
     *
     * @ORM\Column(name="valid", type="integer")
     */
    private $valid;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer")
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_date", type="datetime")
     */
    private $reservationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_no", type="string", length=255)
     */
    private $reservationNo;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_approved", type="string", length=255)
     */
    private $reservationApproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deployment_date", type="date")
     */
    private $deploymentDate;

    /**
     * @var int
     *
     * @ORM\Column(name="deployment_status", type="integer")
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return JanitorialServicesOrders
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
     * Set janitorNumbers
     *
     * @param string $janitorNumbers
     *
     * @return JanitorialServicesOrders
     */
    public function setJanitorNumbers($janitorNumbers)
    {
        $this->janitorNumbers = $janitorNumbers;

        return $this;
    }

    /**
     * Get janitorNumbers
     *
     * @return string
     */
    public function getJanitorNumbers()
    {
        return $this->janitorNumbers;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return JanitorialServicesOrders
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
     * Set janitorNotes
     *
     * @param string $janitorNotes
     *
     * @return JanitorialServicesOrders
     */
    public function setJanitorNotes($janitorNotes)
    {
        $this->janitorNotes = $janitorNotes;

        return $this;
    }

    /**
     * Get janitorNotes
     *
     * @return string
     */
    public function getJanitorNotes()
    {
        return $this->janitorNotes;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * Set totalDiscountsTaxExcl
     *
     * @param string $totalDiscountsTaxExcl
     *
     * @return JanitorialServicesOrders
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
     * Set totalDiscountsTaxIncl
     *
     * @param string $totalDiscountsTaxIncl
     *
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * Set totalPaidTaxExcl
     *
     * @param string $totalPaidTaxExcl
     *
     * @return JanitorialServicesOrders
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
     * Set totalPaidTaxIncl
     *
     * @param string $totalPaidTaxIncl
     *
     * @return JanitorialServicesOrders
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
     * Set totalPaidReal
     *
     * @param string $totalPaidReal
     *
     * @return JanitorialServicesOrders
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
     * Set totalJanitorCost
     *
     * @param string $totalJanitorCost
     *
     * @return JanitorialServicesOrders
     */
    public function setTotalJanitorCost($totalJanitorCost)
    {
        $this->totalJanitorCost = $totalJanitorCost;

        return $this;
    }

    /**
     * Get totalJanitorCost
     *
     * @return string
     */
    public function getTotalJanitorCost()
    {
        return $this->totalJanitorCost;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
     * Set valid
     *
     * @param integer $valid
     *
     * @return JanitorialServicesOrders
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return int
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return JanitorialServicesOrders
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return int
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set reservationDate
     *
     * @param \DateTime $reservationDate
     *
     * @return JanitorialServicesOrders
     */
    public function setReservationDate($reservationDate)
    {
        $this->reservationDate = $reservationDate;

        return $this;
    }

    /**
     * Get reservationDate
     *
     * @return \DateTime
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
     * @return JanitorialServicesOrders
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
     * @param string $reservationApproved
     *
     * @return JanitorialServicesOrders
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
     * @param \DateTime $deploymentDate
     *
     * @return JanitorialServicesOrders
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
     * @param integer $deploymentStatus
     *
     * @return JanitorialServicesOrders
     */
    public function setDeploymentStatus($deploymentStatus)
    {
        $this->deploymentStatus = $deploymentStatus;

        return $this;
    }

    /**
     * Get deploymentStatus
     *
     * @return int
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
     * @return JanitorialServicesOrders
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
     * @return JanitorialServicesOrders
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
