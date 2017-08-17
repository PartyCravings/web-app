<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 */
class Orders
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
     * @ORM\Column(name="invoice_id", type="integer")
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_prefix", type="string", length=255)
     */
    private $invoicePrefix;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer")
     */
    private $storeId;

    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=255)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="store_url", type="string", length=255)
     */
    private $storeUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer")
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer")
     */
    private $customerGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_number", type="integer")
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_firstname", type="string", length=255)
     */
    private $shippingFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_lastname", type="string", length=255)
     */
    private $shippingLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_company", type="string", length=255)
     */
    private $shippingCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_1", type="string", length=255)
     */
    private $shippingAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_2", type="string", length=255)
     */
    private $shippingAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_city", type="string", length=255)
     */
    private $shippingCity;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_postcode", type="string", length=255)
     */
    private $shippingPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_zone", type="string", length=255)
     */
    private $shippingZone;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_zone_id", type="integer")
     */
    private $shippingZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_country", type="string", length=255)
     */
    private $shippingCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_country_id", type="integer")
     */
    private $shippingCountryId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_format", type="string", length=255)
     */
    private $shippingAddressFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_method", type="string", length=255)
     */
    private $shippingMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_method_key", type="string", length=255)
     */
    private $shippingMethodKey;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_firstname", type="string", length=255)
     */
    private $paymentFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_lastname", type="string", length=255)
     */
    private $paymentLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_company", type="string", length=255)
     */
    private $paymentCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_1", type="string", length=255)
     */
    private $paymentAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_2", type="string", length=255)
     */
    private $paymentAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_city", type="string", length=255)
     */
    private $paymentCity;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_postcode", type="string", length=255)
     */
    private $paymentPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_zone", type="string", length=255)
     */
    private $paymentZone;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_zone_id", type="integer")
     */
    private $paymentZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_country", type="string", length=255)
     */
    private $paymentCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_country_id", type="integer")
     */
    private $paymentCountryId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_format", type="string", length=255)
     */
    private $paymentAddressFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=255)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_key", type="string", length=255)
     */
    private $paymentMethodKey;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=0)
     */
    private $total;

    /**
     * @var int
     *
     * @ORM\Column(name="order_status_id", type="integer")
     */
    private $orderStatusId;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;

    /**
     * @var int
     *
     * @ORM\Column(name="currency_id", type="integer")
     */
    private $currencyId;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=10, scale=0)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="coupon_id", type="integer")
     */
    private $couponId;

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
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_data", type="string", length=255)
     */
    private $paymentMethodData;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;


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
     * Set invoiceId
     *
     * @param integer $invoiceId
     *
     * @return Orders
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * Get invoiceId
     *
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set invoicePrefix
     *
     * @param string $invoicePrefix
     *
     * @return Orders
     */
    public function setInvoicePrefix($invoicePrefix)
    {
        $this->invoicePrefix = $invoicePrefix;

        return $this;
    }

    /**
     * Get invoicePrefix
     *
     * @return string
     */
    public function getInvoicePrefix()
    {
        return $this->invoicePrefix;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return Orders
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set storeName
     *
     * @param string $storeName
     *
     * @return Orders
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set storeUrl
     *
     * @param string $storeUrl
     *
     * @return Orders
     */
    public function setStoreUrl($storeUrl)
    {
        $this->storeUrl = $storeUrl;

        return $this;
    }

    /**
     * Get storeUrl
     *
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->storeUrl;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Orders
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
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return Orders
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId
     *
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Orders
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Orders
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Orders
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Orders
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set shippingFirstname
     *
     * @param string $shippingFirstname
     *
     * @return Orders
     */
    public function setShippingFirstname($shippingFirstname)
    {
        $this->shippingFirstname = $shippingFirstname;

        return $this;
    }

    /**
     * Get shippingFirstname
     *
     * @return string
     */
    public function getShippingFirstname()
    {
        return $this->shippingFirstname;
    }

    /**
     * Set shippingLastname
     *
     * @param string $shippingLastname
     *
     * @return Orders
     */
    public function setShippingLastname($shippingLastname)
    {
        $this->shippingLastname = $shippingLastname;

        return $this;
    }

    /**
     * Get shippingLastname
     *
     * @return string
     */
    public function getShippingLastname()
    {
        return $this->shippingLastname;
    }

    /**
     * Set shippingCompany
     *
     * @param string $shippingCompany
     *
     * @return Orders
     */
    public function setShippingCompany($shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;

        return $this;
    }

    /**
     * Get shippingCompany
     *
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->shippingCompany;
    }

    /**
     * Set shippingAddress1
     *
     * @param string $shippingAddress1
     *
     * @return Orders
     */
    public function setShippingAddress1($shippingAddress1)
    {
        $this->shippingAddress1 = $shippingAddress1;

        return $this;
    }

    /**
     * Get shippingAddress1
     *
     * @return string
     */
    public function getShippingAddress1()
    {
        return $this->shippingAddress1;
    }

    /**
     * Set shippingAddress2
     *
     * @param string $shippingAddress2
     *
     * @return Orders
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shippingAddress2 = $shippingAddress2;

        return $this;
    }

    /**
     * Get shippingAddress2
     *
     * @return string
     */
    public function getShippingAddress2()
    {
        return $this->shippingAddress2;
    }

    /**
     * Set shippingCity
     *
     * @param string $shippingCity
     *
     * @return Orders
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    /**
     * Get shippingCity
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Set shippingPostcode
     *
     * @param string $shippingPostcode
     *
     * @return Orders
     */
    public function setShippingPostcode($shippingPostcode)
    {
        $this->shippingPostcode = $shippingPostcode;

        return $this;
    }

    /**
     * Get shippingPostcode
     *
     * @return string
     */
    public function getShippingPostcode()
    {
        return $this->shippingPostcode;
    }

    /**
     * Set shippingZone
     *
     * @param string $shippingZone
     *
     * @return Orders
     */
    public function setShippingZone($shippingZone)
    {
        $this->shippingZone = $shippingZone;

        return $this;
    }

    /**
     * Get shippingZone
     *
     * @return string
     */
    public function getShippingZone()
    {
        return $this->shippingZone;
    }

    /**
     * Set shippingZoneId
     *
     * @param integer $shippingZoneId
     *
     * @return Orders
     */
    public function setShippingZoneId($shippingZoneId)
    {
        $this->shippingZoneId = $shippingZoneId;

        return $this;
    }

    /**
     * Get shippingZoneId
     *
     * @return int
     */
    public function getShippingZoneId()
    {
        return $this->shippingZoneId;
    }

    /**
     * Set shippingCountry
     *
     * @param string $shippingCountry
     *
     * @return Orders
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shippingCountry = $shippingCountry;

        return $this;
    }

    /**
     * Get shippingCountry
     *
     * @return string
     */
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * Set shippingCountryId
     *
     * @param integer $shippingCountryId
     *
     * @return Orders
     */
    public function setShippingCountryId($shippingCountryId)
    {
        $this->shippingCountryId = $shippingCountryId;

        return $this;
    }

    /**
     * Get shippingCountryId
     *
     * @return int
     */
    public function getShippingCountryId()
    {
        return $this->shippingCountryId;
    }

    /**
     * Set shippingAddressFormat
     *
     * @param string $shippingAddressFormat
     *
     * @return Orders
     */
    public function setShippingAddressFormat($shippingAddressFormat)
    {
        $this->shippingAddressFormat = $shippingAddressFormat;

        return $this;
    }

    /**
     * Get shippingAddressFormat
     *
     * @return string
     */
    public function getShippingAddressFormat()
    {
        return $this->shippingAddressFormat;
    }

    /**
     * Set shippingMethod
     *
     * @param string $shippingMethod
     *
     * @return Orders
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * Get shippingMethod
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set shippingMethodKey
     *
     * @param string $shippingMethodKey
     *
     * @return Orders
     */
    public function setShippingMethodKey($shippingMethodKey)
    {
        $this->shippingMethodKey = $shippingMethodKey;

        return $this;
    }

    /**
     * Get shippingMethodKey
     *
     * @return string
     */
    public function getShippingMethodKey()
    {
        return $this->shippingMethodKey;
    }

    /**
     * Set paymentFirstname
     *
     * @param string $paymentFirstname
     *
     * @return Orders
     */
    public function setPaymentFirstname($paymentFirstname)
    {
        $this->paymentFirstname = $paymentFirstname;

        return $this;
    }

    /**
     * Get paymentFirstname
     *
     * @return string
     */
    public function getPaymentFirstname()
    {
        return $this->paymentFirstname;
    }

    /**
     * Set paymentLastname
     *
     * @param string $paymentLastname
     *
     * @return Orders
     */
    public function setPaymentLastname($paymentLastname)
    {
        $this->paymentLastname = $paymentLastname;

        return $this;
    }

    /**
     * Get paymentLastname
     *
     * @return string
     */
    public function getPaymentLastname()
    {
        return $this->paymentLastname;
    }

    /**
     * Set paymentCompany
     *
     * @param string $paymentCompany
     *
     * @return Orders
     */
    public function setPaymentCompany($paymentCompany)
    {
        $this->paymentCompany = $paymentCompany;

        return $this;
    }

    /**
     * Get paymentCompany
     *
     * @return string
     */
    public function getPaymentCompany()
    {
        return $this->paymentCompany;
    }

    /**
     * Set paymentAddress1
     *
     * @param string $paymentAddress1
     *
     * @return Orders
     */
    public function setPaymentAddress1($paymentAddress1)
    {
        $this->paymentAddress1 = $paymentAddress1;

        return $this;
    }

    /**
     * Get paymentAddress1
     *
     * @return string
     */
    public function getPaymentAddress1()
    {
        return $this->paymentAddress1;
    }

    /**
     * Set paymentAddress2
     *
     * @param string $paymentAddress2
     *
     * @return Orders
     */
    public function setPaymentAddress2($paymentAddress2)
    {
        $this->paymentAddress2 = $paymentAddress2;

        return $this;
    }

    /**
     * Get paymentAddress2
     *
     * @return string
     */
    public function getPaymentAddress2()
    {
        return $this->paymentAddress2;
    }

    /**
     * Set paymentCity
     *
     * @param string $paymentCity
     *
     * @return Orders
     */
    public function setPaymentCity($paymentCity)
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * Get paymentCity
     *
     * @return string
     */
    public function getPaymentCity()
    {
        return $this->paymentCity;
    }

    /**
     * Set paymentPostcode
     *
     * @param string $paymentPostcode
     *
     * @return Orders
     */
    public function setPaymentPostcode($paymentPostcode)
    {
        $this->paymentPostcode = $paymentPostcode;

        return $this;
    }

    /**
     * Get paymentPostcode
     *
     * @return string
     */
    public function getPaymentPostcode()
    {
        return $this->paymentPostcode;
    }

    /**
     * Set paymentZone
     *
     * @param string $paymentZone
     *
     * @return Orders
     */
    public function setPaymentZone($paymentZone)
    {
        $this->paymentZone = $paymentZone;

        return $this;
    }

    /**
     * Get paymentZone
     *
     * @return string
     */
    public function getPaymentZone()
    {
        return $this->paymentZone;
    }

    /**
     * Set paymentZoneId
     *
     * @param integer $paymentZoneId
     *
     * @return Orders
     */
    public function setPaymentZoneId($paymentZoneId)
    {
        $this->paymentZoneId = $paymentZoneId;

        return $this;
    }

    /**
     * Get paymentZoneId
     *
     * @return int
     */
    public function getPaymentZoneId()
    {
        return $this->paymentZoneId;
    }

    /**
     * Set paymentCountry
     *
     * @param string $paymentCountry
     *
     * @return Orders
     */
    public function setPaymentCountry($paymentCountry)
    {
        $this->paymentCountry = $paymentCountry;

        return $this;
    }

    /**
     * Get paymentCountry
     *
     * @return string
     */
    public function getPaymentCountry()
    {
        return $this->paymentCountry;
    }

    /**
     * Set paymentCountryId
     *
     * @param integer $paymentCountryId
     *
     * @return Orders
     */
    public function setPaymentCountryId($paymentCountryId)
    {
        $this->paymentCountryId = $paymentCountryId;

        return $this;
    }

    /**
     * Get paymentCountryId
     *
     * @return int
     */
    public function getPaymentCountryId()
    {
        return $this->paymentCountryId;
    }

    /**
     * Set paymentAddressFormat
     *
     * @param string $paymentAddressFormat
     *
     * @return Orders
     */
    public function setPaymentAddressFormat($paymentAddressFormat)
    {
        $this->paymentAddressFormat = $paymentAddressFormat;

        return $this;
    }

    /**
     * Get paymentAddressFormat
     *
     * @return string
     */
    public function getPaymentAddressFormat()
    {
        return $this->paymentAddressFormat;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return Orders
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set paymentMethodKey
     *
     * @param string $paymentMethodKey
     *
     * @return Orders
     */
    public function setPaymentMethodKey($paymentMethodKey)
    {
        $this->paymentMethodKey = $paymentMethodKey;

        return $this;
    }

    /**
     * Get paymentMethodKey
     *
     * @return string
     */
    public function getPaymentMethodKey()
    {
        return $this->paymentMethodKey;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Orders
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Orders
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set orderStatusId
     *
     * @param integer $orderStatusId
     *
     * @return Orders
     */
    public function setOrderStatusId($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    /**
     * Get orderStatusId
     *
     * @return int
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return Orders
     */
    public function setLangId($langId)
    {
        $this->langId = $langId;

        return $this;
    }

    /**
     * Get langId
     *
     * @return int
     */
    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return Orders
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Orders
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Orders
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set couponId
     *
     * @param integer $couponId
     *
     * @return Orders
     */
    public function setCouponId($couponId)
    {
        $this->couponId = $couponId;

        return $this;
    }

    /**
     * Get couponId
     *
     * @return int
     */
    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Orders
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
     * @return Orders
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
     * Set ip
     *
     * @param string $ip
     *
     * @return Orders
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
     * Set paymentMethodData
     *
     * @param string $paymentMethodData
     *
     * @return Orders
     */
    public function setPaymentMethodData($paymentMethodData)
    {
        $this->paymentMethodData = $paymentMethodData;

        return $this;
    }

    /**
     * Get paymentMethodData
     *
     * @return string
     */
    public function getPaymentMethodData()
    {
        return $this->paymentMethodData;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Orders
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return Orders
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
}

