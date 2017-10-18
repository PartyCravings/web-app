<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeautyAndMakeupOrders
 *
 * @ORM\Table(name="beauty_and_makeup_orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BeautyAndMakeupOrdersRepository")
 */
class BeautyAndMakeupOrders
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
     * @ORM\Column(name="clients_number", type="string", length=255)
     */
    private $clientsNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=255)
     */
    private $sex;

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
     * @ORM\Column(name="beauty_notes", type="string", length=255)
     */
    private $beautyNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_date", type="string", length=255)
     */
    private $reservationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="special_requirements", type="string", length=255)
     */
    private $specialRequirements;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

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
     * @ORM\Column(name="total_beaty_cost", type="string", length=255)
     */
    private $totalBeatyCost;

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
     * @var int
     *
     * @ORM\Column(name="deployment_status", type="integer")
     */
    private $deploymentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="beaty_notes", type="string", length=255)
     */
    private $beatyNotes;

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
     * @var string
     *
     * @ORM\Column(name="order_note", type="string", length=255)
     */
    private $orderNote;


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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * Set clientsNumber
     *
     * @param string $clientsNumber
     *
     * @return BeautyAndMakeupOrders
     */
    public function setClientsNumber($clientsNumber)
    {
        $this->clientsNumber = $clientsNumber;

        return $this;
    }

    /**
     * Get clientsNumber
     *
     * @return string
     */
    public function getClientsNumber()
    {
        return $this->clientsNumber;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return BeautyAndMakeupOrders
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * Set beautyNotes
     *
     * @param string $beautyNotes
     *
     * @return BeautyAndMakeupOrders
     */
    public function setBeautyNotes($beautyNotes)
    {
        $this->beautyNotes = $beautyNotes;

        return $this;
    }

    /**
     * Get beautyNotes
     *
     * @return string
     */
    public function getBeautyNotes()
    {
        return $this->beautyNotes;
    }

    /**
     * Set reservationDate
     *
     * @param string $reservationDate
     *
     * @return BeautyAndMakeupOrders
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
     * Set specialRequirements
     *
     * @param string $specialRequirements
     *
     * @return BeautyAndMakeupOrders
     */
    public function setSpecialRequirements($specialRequirements)
    {
        $this->specialRequirements = $specialRequirements;

        return $this;
    }

    /**
     * Get specialRequirements
     *
     * @return string
     */
    public function getSpecialRequirements()
    {
        return $this->specialRequirements;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return BeautyAndMakeupOrders
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
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return BeautyAndMakeupOrders
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
     * Set currentState
     *
     * @param string $currentState
     *
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
 * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * Set totalBeatyCost
     *
     * @param string $totalBeatyCost
     *
     * @return BeautyAndMakeupOrders
     */
    public function setTotalBeatyCost($totalBeatyCost)
    {
        $this->totalBeatyCost = $totalBeatyCost;

        return $this;
    }

    /**
     * Get totalBeatyCost
     *
     * @return string
     */
    public function getTotalBeatyCost()
    {
        return $this->totalBeatyCost;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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
     * Set valid
     *
     * @param integer $valid
     *
     * @return BeautyAndMakeupOrders
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
 * @return BeautyAndMakeupOrders
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
     * Set reservationNo
     *
     * @param string $reservationNo
     *
     * @return BeautyAndMakeupOrders
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
 * @return BeautyAndMakeupOrders
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
     * Set deploymentStatus
     *
     * @param integer $deploymentStatus
     *
 * @return BeautyAndMakeupOrders
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
     * Set beatyNotes
     *
     * @param string $beatyNotes
     *
     * @return BeautyAndMakeupOrders
     */
    public function setBeatyNotes($beatyNotes)
    {
        $this->beatyNotes = $beatyNotes;

        return $this;
    }

    /**
     * Get beatyNotes
     *
     * @return string
     */
    public function getBeatyNotes()
    {
        return $this->beatyNotes;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return BeautyAndMakeupOrders
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
     * @return BeautyAndMakeupOrders
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

    /**
     * Set orderNote
     *
     * @param string $orderNote
     *
     * @return BeautyAndMakeupOrders
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
}
