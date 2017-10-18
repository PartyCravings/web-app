<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DrinkOrders
 *
 * @ORM\Table(name="drink_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DrinkOrdersRepository")
 */
class DrinkOrders
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
     * @ORM\Column(name="drink_id", type="integer")
     */
    private $drinkId;

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
     * @ORM\Column(name="drink_langg", type="string", length=255)
     */
    private $drinkLangg;

    /**
     * @var string
     *
     * @ORM\Column(name="drink_currency", type="string", length=255)
     */
    private $drinkCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="id_warehouse", type="string", length=255)
     */
    private $idWarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="id_warehouse_invoice", type="string", length=255)
     */
    private $idWarehouseInvoice;

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
     * @ORM\Column(name="drink_size", type="string", length=255)
     */
    private $drinkSize;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_no", type="string", length=255)
     */
    private $trackingNo;

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
     * @ORM\Column(name="total_drinks_cost", type="string", length=255)
     */
    private $totalDrinksCost;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_status", type="string", length=255)
     */
    private $deliveryStatus;

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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="recyclable", type="string", length=255)
     */
    private $recyclable;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="string", length=255)
     */
    private $conversionRate;

    /**
     * @var string
     *
     * @ORM\Column(name="current_state", type="string", length=255)
     */
    private $currentState;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;


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
     * Set drinkId
     *
     * @param integer $drinkId
     *
     * @return DrinkOrders
     */
    public function setDrinkId($drinkId)
    {
        $this->drinkId = $drinkId;

        return $this;
    }

    /**
     * Get drinkId
     *
     * @return int
     */
    public function getDrinkId()
    {
        return $this->drinkId;
    }

    /**
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * Set category
     *
     * @param string $category
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * Set drinkLangg
     *
     * @param string $drinkLangg
     *
     * @return DrinkOrders
     */
    public function setDrinkLangg($drinkLangg)
    {
        $this->drinkLangg = $drinkLangg;

        return $this;
    }

    /**
     * Get drinkLangg
     *
     * @return string
     */
    public function getDrinkLangg()
    {
        return $this->drinkLangg;
    }

    /**
     * Set drinkCurrency
     *
     * @param string $drinkCurrency
     *
     * @return DrinkOrders
     */
    public function setDrinkCurrency($drinkCurrency)
    {
        $this->drinkCurrency = $drinkCurrency;

        return $this;
    }

    /**
     * Get drinkCurrency
     *
     * @return string
     */
    public function getDrinkCurrency()
    {
        return $this->drinkCurrency;
    }

    /**
     * Set idWarehouse
     *
     * @param string $idWarehouse
     *
     * @return DrinkOrders
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
     * Set idWarehouseInvoice
     *
     * @param string $idWarehouseInvoice
     *
     * @return DrinkOrders
     */
    public function setIdWarehouseInvoice($idWarehouseInvoice)
    {
        $this->idWarehouseInvoice = $idWarehouseInvoice;

        return $this;
    }

    /**
     * Get idWarehouseInvoice
     *
     * @return string
     */
    public function getIdWarehouseInvoice()
    {
        return $this->idWarehouseInvoice;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * Set gift
     *
     * @param string $gift
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * Set drinkSize
     *
     * @param string $drinkSize
     *
     * @return DrinkOrders
     */
    public function setDrinkSize($drinkSize)
    {
        $this->drinkSize = $drinkSize;

        return $this;
    }

    /**
     * Get drinkSize
     *
     * @return string
     */
    public function getDrinkSize()
    {
        return $this->drinkSize;
    }

    /**
     * Set trackingNo
     *
     * @param string $trackingNo
     *
     * @return DrinkOrders
     */
    public function setTrackingNo($trackingNo)
    {
        $this->trackingNo = $trackingNo;

        return $this;
    }

    /**
     * Get trackingNo
     *
     * @return string
     */
    public function getTrackingNo()
    {
        return $this->trackingNo;
    }

    /**
     * Set totalDiscounts
     *
     * @param string $totalDiscounts
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * Set totalDrinksCost
     *
     * @param string $totalDrinksCost
     *
     * @return DrinkOrders
     */
    public function setTotalDrinksCost($totalDrinksCost)
    {
        $this->totalDrinksCost = $totalDrinksCost;

        return $this;
    }

    /**
     * Get totalDrinksCost
     *
     * @return string
     */
    public function getTotalDrinksCost()
    {
        return $this->totalDrinksCost;
    }

    /**
     * Set deliveryStatus
     *
     * @param string $deliveryStatus
     *
     * @return DrinkOrders
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;

        return $this;
    }

    /**
     * Get deliveryStatus
     *
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * Set partyId
     *
     * @param integer $partyId
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * Set reference
     *
     * @param string $reference
     *
     * @return DrinkOrders
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
     * Set recyclable
     *
     * @param string $recyclable
     *
     * @return DrinkOrders
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
     * Set conversionRate
     *
     * @param string $conversionRate
     *
     * @return DrinkOrders
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
     * Set currentState
     *
     * @param string $currentState
     *
     * @return DrinkOrders
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
     * Set valid
     *
     * @param string $valid
     *
     * @return DrinkOrders
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
     * @return DrinkOrders
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
     * @return DrinkOrders
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
}
