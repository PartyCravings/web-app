<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupplyOrder
 *
 * @ORM\Table(name="supply_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplyOrderRepository")
 */
class SupplyOrder
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
     * @ORM\Column(name="id_supplier", type="string", length=255)
     */
    private $idSupplier;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_name", type="string", length=255)
     */
    private $supplierName;

    /**
     * @var string
     *
     * @ORM\Column(name="id_lang", type="string", length=255)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="id_warehouse", type="string", length=255)
     */
    private $idWarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="id_supply_order_state", type="string", length=255)
     */
    private $idSupplyOrderState;

    /**
     * @var string
     *
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="id_ref_currency", type="string", length=255)
     */
    private $idRefCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

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
     * @ORM\Column(name="date_delivery_expected", type="string", length=255)
     */
    private $dateDeliveryExpected;

    /**
     * @var string
     *
     * @ORM\Column(name="total_te", type="string", length=255)
     */
    private $totalTe;

    /**
     * @var string
     *
     * @ORM\Column(name="total_with_discount_te", type="string", length=255)
     */
    private $totalWithDiscountTe;

    /**
     * @var string
     *
     * @ORM\Column(name="total_tax", type="string", length=255)
     */
    private $totalTax;

    /**
     * @var string
     *
     * @ORM\Column(name="total_ti", type="string", length=255)
     */
    private $totalTi;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_rate", type="string", length=255)
     */
    private $discountRate;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_value_te", type="string", length=255)
     */
    private $discountValueTe;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=255)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="history", type="string", length=255)
     */
    private $history;

    /**
     * @var string
     *
     * @ORM\Column(name="receipt_history", type="string", length=255)
     */
    private $receiptHistory;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="state_lang", type="string", length=255)
     */
    private $stateLang;


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
     * Set idSupplier
     *
     * @param string $idSupplier
     *
     * @return SupplyOrder
     */
    public function setIdSupplier($idSupplier)
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    /**
     * Get idSupplier
     *
     * @return string
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set supplierName
     *
     * @param string $supplierName
     *
     * @return SupplyOrder
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    /**
     * Get supplierName
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Set idLang
     *
     * @param string $idLang
     *
     * @return SupplyOrder
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
     * Set idWarehouse
     *
     * @param string $idWarehouse
     *
     * @return SupplyOrder
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
     * Set idSupplyOrderState
     *
     * @param string $idSupplyOrderState
     *
     * @return SupplyOrder
     */
    public function setIdSupplyOrderState($idSupplyOrderState)
    {
        $this->idSupplyOrderState = $idSupplyOrderState;

        return $this;
    }

    /**
     * Get idSupplyOrderState
     *
     * @return string
     */
    public function getIdSupplyOrderState()
    {
        return $this->idSupplyOrderState;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return SupplyOrder
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
     * Set idRefCurrency
     *
     * @param string $idRefCurrency
     *
     * @return SupplyOrder
     */
    public function setIdRefCurrency($idRefCurrency)
    {
        $this->idRefCurrency = $idRefCurrency;

        return $this;
    }

    /**
     * Get idRefCurrency
     *
     * @return string
     */
    public function getIdRefCurrency()
    {
        return $this->idRefCurrency;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return SupplyOrder
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
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return SupplyOrder
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
     * @return SupplyOrder
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
     * Set dateDeliveryExpected
     *
     * @param string $dateDeliveryExpected
     *
     * @return SupplyOrder
     */
    public function setDateDeliveryExpected($dateDeliveryExpected)
    {
        $this->dateDeliveryExpected = $dateDeliveryExpected;

        return $this;
    }

    /**
     * Get dateDeliveryExpected
     *
     * @return string
     */
    public function getDateDeliveryExpected()
    {
        return $this->dateDeliveryExpected;
    }

    /**
     * Set totalTe
     *
     * @param string $totalTe
     *
     * @return SupplyOrder
     */
    public function setTotalTe($totalTe)
    {
        $this->totalTe = $totalTe;

        return $this;
    }

    /**
     * Get totalTe
     *
     * @return string
     */
    public function getTotalTe()
    {
        return $this->totalTe;
    }

    /**
     * Set totalWithDiscountTe
     *
     * @param string $totalWithDiscountTe
     *
     * @return SupplyOrder
     */
    public function setTotalWithDiscountTe($totalWithDiscountTe)
    {
        $this->totalWithDiscountTe = $totalWithDiscountTe;

        return $this;
    }

    /**
     * Get totalWithDiscountTe
     *
     * @return string
     */
    public function getTotalWithDiscountTe()
    {
        return $this->totalWithDiscountTe;
    }

    /**
     * Set totalTax
     *
     * @param string $totalTax
     *
     * @return SupplyOrder
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * Get totalTax
     *
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * Set totalTi
     *
     * @param string $totalTi
     *
     * @return SupplyOrder
     */
    public function setTotalTi($totalTi)
    {
        $this->totalTi = $totalTi;

        return $this;
    }

    /**
     * Get totalTi
     *
     * @return string
     */
    public function getTotalTi()
    {
        return $this->totalTi;
    }

    /**
     * Set discountRate
     *
     * @param string $discountRate
     *
     * @return SupplyOrder
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate
     *
     * @return string
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Set discountValueTe
     *
     * @param string $discountValueTe
     *
     * @return SupplyOrder
     */
    public function setDiscountValueTe($discountValueTe)
    {
        $this->discountValueTe = $discountValueTe;

        return $this;
    }

    /**
     * Get discountValueTe
     *
     * @return string
     */
    public function getDiscountValueTe()
    {
        return $this->discountValueTe;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return SupplyOrder
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set history
     *
     * @param string $history
     *
     * @return SupplyOrder
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return string
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set receiptHistory
     *
     * @param string $receiptHistory
     *
     * @return SupplyOrder
     */
    public function setReceiptHistory($receiptHistory)
    {
        $this->receiptHistory = $receiptHistory;

        return $this;
    }

    /**
     * Get receiptHistory
     *
     * @return string
     */
    public function getReceiptHistory()
    {
        return $this->receiptHistory;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return SupplyOrder
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set stateLang
     *
     * @param string $stateLang
     *
     * @return SupplyOrder
     */
    public function setStateLang($stateLang)
    {
        $this->stateLang = $stateLang;

        return $this;
    }

    /**
     * Get stateLang
     *
     * @return string
     */
    public function getStateLang()
    {
        return $this->stateLang;
    }
}

