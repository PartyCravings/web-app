<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartyEditor
 *
 * @ORM\Table(name="party_editor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartyEditorRepository")
 */
class PartyEditor
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
     * @ORM\Column(name="vendor_group", type="string", length=255)
     */
    private $vendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_carrier", type="string", length=255)
     */
    private $idCarrier;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_option", type="string", length=255)
     */
    private $deliveryOption;

    /**
     * @var string
     *
     * @ORM\Column(name="id_lang", type="string", length=255)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="id_address_delivery", type="string", length=255)
     */
    private $idAddressDelivery;

    /**
     * @var string
     *
     * @ORM\Column(name="id_address_invoice", type="string", length=255)
     */
    private $idAddressInvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="id_customer", type="string", length=255)
     */
    private $idCustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="id_guest", type="string", length=255)
     */
    private $idGuest;

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
     * @ORM\Column(name="allow_seperated_package", type="string", length=255)
     */
    private $allowSeperatedPackage;

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
     * @ORM\Column(name="cart_rule", type="string", length=255)
     */
    private $cartRule;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=255)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="rule", type="string", length=255)
     */
    private $rule;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_carrier", type="string", length=255)
     */
    private $ruleCarrier;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_combination", type="string", length=255)
     */
    private $ruleCombination;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_country", type="string", length=255)
     */
    private $ruleCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_group", type="string", length=255)
     */
    private $ruleGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_language", type="string", length=255)
     */
    private $ruleLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_product_rule", type="string", length=255)
     */
    private $ruleProductRule;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_service_rule_group", type="string", length=255)
     */
    private $ruleServiceRuleGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_service_rule_value", type="string", length=255)
     */
    private $ruleServiceRuleValue;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_vendor", type="string", length=255)
     */
    private $ruleVendor;


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
     * Set vendorGroup
     *
     * @param string $vendorGroup
     *
     * @return PartyEditor
     */
    public function setVendorGroup($vendorGroup)
    {
        $this->vendorGroup = $vendorGroup;

        return $this;
    }

    /**
     * Get vendorGroup
     *
     * @return string
     */
    public function getVendorGroup()
    {
        return $this->vendorGroup;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return PartyEditor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set idCarrier
     *
     * @param string $idCarrier
     *
     * @return PartyEditor
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return string
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set deliveryOption
     *
     * @param string $deliveryOption
     *
     * @return PartyEditor
     */
    public function setDeliveryOption($deliveryOption)
    {
        $this->deliveryOption = $deliveryOption;

        return $this;
    }

    /**
     * Get deliveryOption
     *
     * @return string
     */
    public function getDeliveryOption()
    {
        return $this->deliveryOption;
    }

    /**
     * Set idLang
     *
     * @param string $idLang
     *
     * @return PartyEditor
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
     * Set idAddressDelivery
     *
     * @param string $idAddressDelivery
     *
     * @return PartyEditor
     */
    public function setIdAddressDelivery($idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    /**
     * Get idAddressDelivery
     *
     * @return string
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * Set idAddressInvoice
     *
     * @param string $idAddressInvoice
     *
     * @return PartyEditor
     */
    public function setIdAddressInvoice($idAddressInvoice)
    {
        $this->idAddressInvoice = $idAddressInvoice;

        return $this;
    }

    /**
     * Get idAddressInvoice
     *
     * @return string
     */
    public function getIdAddressInvoice()
    {
        return $this->idAddressInvoice;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return PartyEditor
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
     * Set idCustomer
     *
     * @param string $idCustomer
     *
     * @return PartyEditor
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
     * Set idGuest
     *
     * @param string $idGuest
     *
     * @return PartyEditor
     */
    public function setIdGuest($idGuest)
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    /**
     * Get idGuest
     *
     * @return string
     */
    public function getIdGuest()
    {
        return $this->idGuest;
    }

    /**
     * Set recyclable
     *
     * @param string $recyclable
     *
     * @return PartyEditor
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
     * @return PartyEditor
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
     * @return PartyEditor
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
     * Set allowSeperatedPackage
     *
     * @param string $allowSeperatedPackage
     *
     * @return PartyEditor
     */
    public function setAllowSeperatedPackage($allowSeperatedPackage)
    {
        $this->allowSeperatedPackage = $allowSeperatedPackage;

        return $this;
    }

    /**
     * Get allowSeperatedPackage
     *
     * @return string
     */
    public function getAllowSeperatedPackage()
    {
        return $this->allowSeperatedPackage;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return PartyEditor
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
     * @return PartyEditor
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
     * @return PartyEditor
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
     * Set cartRule
     *
     * @param string $cartRule
     *
     * @return PartyEditor
     */
    public function setCartRule($cartRule)
    {
        $this->cartRule = $cartRule;

        return $this;
    }

    /**
     * Get cartRule
     *
     * @return string
     */
    public function getCartRule()
    {
        return $this->cartRule;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return PartyEditor
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set rule
     *
     * @param string $rule
     *
     * @return PartyEditor
     */
    public function setRule($rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Get rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Set ruleCarrier
     *
     * @param string $ruleCarrier
     *
     * @return PartyEditor
     */
    public function setRuleCarrier($ruleCarrier)
    {
        $this->ruleCarrier = $ruleCarrier;

        return $this;
    }

    /**
     * Get ruleCarrier
     *
     * @return string
     */
    public function getRuleCarrier()
    {
        return $this->ruleCarrier;
    }

    /**
     * Set ruleCombination
     *
     * @param string $ruleCombination
     *
     * @return PartyEditor
     */
    public function setRuleCombination($ruleCombination)
    {
        $this->ruleCombination = $ruleCombination;

        return $this;
    }

    /**
     * Get ruleCombination
     *
     * @return string
     */
    public function getRuleCombination()
    {
        return $this->ruleCombination;
    }

    /**
     * Set ruleCountry
     *
     * @param string $ruleCountry
     *
     * @return PartyEditor
     */
    public function setRuleCountry($ruleCountry)
    {
        $this->ruleCountry = $ruleCountry;

        return $this;
    }

    /**
     * Get ruleCountry
     *
     * @return string
     */
    public function getRuleCountry()
    {
        return $this->ruleCountry;
    }

    /**
     * Set ruleGroup
     *
     * @param string $ruleGroup
     *
     * @return PartyEditor
     */
    public function setRuleGroup($ruleGroup)
    {
        $this->ruleGroup = $ruleGroup;

        return $this;
    }

    /**
     * Get ruleGroup
     *
     * @return string
     */
    public function getRuleGroup()
    {
        return $this->ruleGroup;
    }

    /**
     * Set ruleLanguage
     *
     * @param string $ruleLanguage
     *
     * @return PartyEditor
     */
    public function setRuleLanguage($ruleLanguage)
    {
        $this->ruleLanguage = $ruleLanguage;

        return $this;
    }

    /**
     * Get ruleLanguage
     *
     * @return string
     */
    public function getRuleLanguage()
    {
        return $this->ruleLanguage;
    }

    /**
     * Set ruleProductRule
     *
     * @param string $ruleProductRule
     *
     * @return PartyEditor
     */
    public function setRuleProductRule($ruleProductRule)
    {
        $this->ruleProductRule = $ruleProductRule;

        return $this;
    }

    /**
     * Get ruleProductRule
     *
     * @return string
     */
    public function getRuleProductRule()
    {
        return $this->ruleProductRule;
    }

    /**
     * Set ruleServiceRuleGroup
     *
     * @param string $ruleServiceRuleGroup
     *
     * @return PartyEditor
     */
    public function setRuleServiceRuleGroup($ruleServiceRuleGroup)
    {
        $this->ruleServiceRuleGroup = $ruleServiceRuleGroup;

        return $this;
    }

    /**
     * Get ruleServiceRuleGroup
     *
     * @return string
     */
    public function getRuleServiceRuleGroup()
    {
        return $this->ruleServiceRuleGroup;
    }

    /**
     * Set ruleProductRuleValue
     *
     * @param string $ruleServiceRuleValue
     *
     * @return PartyEditor
     */
    public function setRuleServiceRuleValue($ruleServiceRuleValue)
    {
        $this->ruleServiceRuleValue = $ruleServiceRuleValue;

        return $this;
    }

    /**
     * Get ruleProductRuleValue
     *
     * @return string
     */
    public function getRuleServiceRuleValue()
    {
        return $this->ruleServiceRuleValue;
    }

    /**
     * Set ruleVendor
     *
     * @param string $ruleVendor
     *
     * @return PartyEditor
     */
    public function setRuleVendor($ruleVendor)
    {
        $this->ruleVendor = $ruleVendor;

        return $this;
    }

    /**
     * Get ruleVendor
     *
     * @return string
     */
    public function getRuleVendor()
    {
        return $this->ruleVendor;
    }
}