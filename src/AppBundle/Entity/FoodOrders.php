<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoodOrders
 *
 * @ORM\Table(name="food_orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FoodOrdersRepository")
 */
class FoodOrders
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
     * @ORM\Column(name="party_id", type="integer")
     */
    private $partyId;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="food_id", type="integer")
     */
    private $foodId;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="id_lang", type="string", length=255)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="id_customer", type="string", length=255)
     */
    private $idCustomer;

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
     * @ORM\Column(name="id_warehouse", type="string", length=255)
     */
    private $idWarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="current_state", type="string", length=255)
     */
    private $currentState;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="string", length=255)
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
     * @ORM\Column(name="gift_note", type="string", length=255)
     */
    private $giftNote;

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
     * @ORM\Column(name="total_discount_tax_incl", type="string", length=255)
     */
    private $totalDiscountTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discount_tax_excl", type="string", length=255)
     */
    private $totalDiscountTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="string", length=255)
     */
    private $totalPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="string", length=255)
     */
    private $totalPaidReal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_food_cost", type="string", length=255)
     */
    private $totalFoodCost;

    /**
     * @var string
     *
     * @ORM\Column(name="valid", type="string", length=255)
     */
    private $valid;

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
     * @var string
     *
     * @ORM\Column(name="reservation_approved", type="string", length=255)
     */
    private $reservationApproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deployment_date", type="datetime")
     */
    private $deploymentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deployment_status", type="datetime")
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
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="food_paid", type="string", length=255)
     */
    private $foodPaid;


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
     * Set partyId
     *
     * @param integer $partyId
     *
     * @return FoodOrders
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
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return FoodOrders
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return FoodOrders
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set foodId
     *
     * @param integer $foodId
     *
     * @return FoodOrders
     */
    public function setFoodId($foodId)
    {
        $this->foodId = $foodId;

        return $this;
    }

    /**
     * Get foodId
     *
     * @return int
     */
    public function getFoodId()
    {
        return $this->foodId;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return FoodOrders
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
     * Set category
     *
     * @param string $category
     *
     * @return FoodOrders
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
     * Set size
     *
     * @param string $size
     *
     * @return FoodOrders
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set idLang
     *
     * @param string $idLang
     *
     * @return FoodOrders
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return string
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set idCustomer
     *
     * @param string $idCustomer
     *
     * @return FoodOrders
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return string
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return FoodOrders
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
     * @return FoodOrders
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
     * Set idWarehouse
     *
     * @param string $idWarehouse
     *
     * @return FoodOrders
     */
    public function setIdWarehouse($idWarehouse)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

    /**
     * Get idWarehouse
     *
     * @return string
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    /**
     * Set currentState
     *
     * @param string $currentState
     *
     * @return FoodOrders
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
     * Set notes
     *
     * @param string $notes
     *
     * @return FoodOrders
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
     * Set conversionRate
     *
     * @param string $conversionRate
     *
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * Set giftNote
     *
     * @param string $giftNote
     *
     * @return FoodOrders
     */
    public function setGiftNote($giftNote)
    {
        $this->giftNote = $giftNote;

        return $this;
    }

    /**
     * Get giftNote
     *
     * @return string
     */
    public function getGiftNote()
    {
        return $this->giftNote;
    }

    /**
     * Set trackingNumber
     *
     * @param string $trackingNumber
     *
     * @return FoodOrders
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
     * @return FoodOrders
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
     * Set totalDiscountTaxIncl
     *
     * @param string $totalDiscountTaxIncl
     *
     * @return FoodOrders
     */
    public function setTotalDiscountTaxIncl($totalDiscountTaxIncl)
    {
        $this->totalDiscountTaxIncl = $totalDiscountTaxIncl;

        return $this;
    }

    /**
     * Get totalDiscountTaxIncl
     *
     * @return string
     */
    public function getTotalDiscountTaxIncl()
    {
        return $this->totalDiscountTaxIncl;
    }

    /**
     * Set totalDiscountTaxExcl
     *
     * @param string $totalDiscountTaxExcl
     *
     * @return FoodOrders
     */
    public function setTotalDiscountTaxExcl($totalDiscountTaxExcl)
    {
        $this->totalDiscountTaxExcl = $totalDiscountTaxExcl;

        return $this;
    }

    /**
     * Get totalDiscountTaxExcl
     *
     * @return string
     */
    public function getTotalDiscountTaxExcl()
    {
        return $this->totalDiscountTaxExcl;
    }

    /**
     * Set totalPaid
     *
     * @param string $totalPaid
     *
     * @return FoodOrders
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
     * Set totalPaidReal
     *
     * @param string $totalPaidReal
     *
     * @return FoodOrders
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
     * Set totalFoodCost
     *
     * @param string $totalFoodCost
     *
     * @return FoodOrders
     */
    public function setTotalFoodCost($totalFoodCost)
    {
        $this->totalFoodCost = $totalFoodCost;

        return $this;
    }

    /**
     * Get totalFoodCost
     *
     * @return string
     */
    public function getTotalFoodCost()
    {
        return $this->totalFoodCost;
    }

    /**
     * Set valid
     *
     * @param string $valid
     *
     * @return FoodOrders
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
     * @param \DateTime $dateAdd
     *
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * @param \DateTime $deploymentStatus
     *
     * @return FoodOrders
     */
    public function setDeploymentStatus($deploymentStatus)
    {
        $this->deploymentStatus = $deploymentStatus;

        return $this;
    }

    /**
     * Get deploymentStatus
     *
     * @return \DateTime
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
     * @return FoodOrders
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
     * @return FoodOrders
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
     * Set note
     *
     * @param string $note
     *
     * @return FoodOrders
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set foodPaid
     *
     * @param string $foodPaid
     *
     * @return FoodOrders
     */
    public function setFoodPaid($foodPaid)
    {
        $this->foodPaid = $foodPaid;

        return $this;
    }

    /**
     * Get foodPaid
     *
     * @return string
     */
    public function getFoodPaid()
    {
        return $this->foodPaid;
    }
}

