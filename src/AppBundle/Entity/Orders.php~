<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\IpTraceable\Traits\IpTraceableEntity;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * Hook ip-traceable behavior
     * updates createdFromIp, updatedFromIp fields
     */
    use IpTraceableEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var Service
     *
     * @Assert\Valid
     * @Assert\NotBlank(message="order.orderDatas.blank")
     * @ORM\ManyToMany(targetEntity="OrderData")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderDatas;

    /**
     * @var Account
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Account")
     * @ORM\JoinColumn(nullable=false)
     */
    private $account;

    /**
     * @var Party
     *
     * @ORM\ManyToOne(targetEntity="Party", inversedBy="orders")
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", nullable=true)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_data", type="string", nullable=true)
     */
    private $paymentMethodData;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_key", type="string", nullable=true)
     */
    private $paymentMethodKey;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts", type="float", nullable=true)
     */
    private $totalDiscounts;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_incl", type="float", nullable=true)
     */
    private $totalDiscountsTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_excl", type="float", nullable=true)
     */
    private $totalDiscountsTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="float", nullable=true)
     */
    private $totalPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_incl", type="float", nullable=true)
     */
    private $totalPaidTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="float", nullable=true)
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="float", nullable=true)
     */
    private $totalPaidReal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_cost", type="float", nullable=true)
     */
    private $totalCost;

    /**
     * @var int
     *
     * @ORM\Column(name="invoice_id", type="string", nullable=true)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", nullable=true)
     */
    private $comment;

    /**
     * @var Coupon
     *
     * @ORM\ManyToOne(targetEntity="Coupon")
     */
    private $coupon;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $updatedBy;

    public function __toString()
    {
        return $this->orderDatas;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderDatas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
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
     * Set totalDiscounts
     *
     * @param float $totalDiscounts
     *
     * @return Orders
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    /**
     * Get totalDiscounts
     *
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    /**
     * Set totalDiscountsTaxIncl
     *
     * @param float $totalDiscountsTaxIncl
     *
     * @return Orders
     */
    public function setTotalDiscountsTaxIncl($totalDiscountsTaxIncl)
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxIncl
     *
     * @return float
     */
    public function getTotalDiscountsTaxIncl()
    {
        return $this->totalDiscountsTaxIncl;
    }

    /**
     * Set totalDiscountsTaxExcl
     *
     * @param float $totalDiscountsTaxExcl
     *
     * @return Orders
     */
    public function setTotalDiscountsTaxExcl($totalDiscountsTaxExcl)
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxExcl
     *
     * @return float
     */
    public function getTotalDiscountsTaxExcl()
    {
        return $this->totalDiscountsTaxExcl;
    }

    /**
     * Set totalPaid
     *
     * @param float $totalPaid
     *
     * @return Orders
     */
    public function setTotalPaid($totalPaid)
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    /**
     * Get totalPaid
     *
     * @return float
     */
    public function getTotalPaid()
    {
        return $this->totalPaid;
    }

    /**
     * Set totalPaidTaxIncl
     *
     * @param float $totalPaidTaxIncl
     *
     * @return Orders
     */
    public function setTotalPaidTaxIncl($totalPaidTaxIncl)
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;

        return $this;
    }

    /**
     * Get totalPaidTaxIncl
     *
     * @return float
     */
    public function getTotalPaidTaxIncl()
    {
        return $this->totalPaidTaxIncl;
    }

    /**
     * Set totalPaidTaxExcl
     *
     * @param float $totalPaidTaxExcl
     *
     * @return Orders
     */
    public function setTotalPaidTaxExcl($totalPaidTaxExcl)
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;

        return $this;
    }

    /**
     * Get totalPaidTaxExcl
     *
     * @return float
     */
    public function getTotalPaidTaxExcl()
    {
        return $this->totalPaidTaxExcl;
    }

    /**
     * Set totalPaidReal
     *
     * @param float $totalPaidReal
     *
     * @return Orders
     */
    public function setTotalPaidReal($totalPaidReal)
    {
        $this->totalPaidReal = $totalPaidReal;

        return $this;
    }

    /**
     * Get totalPaidReal
     *
     * @return float
     */
    public function getTotalPaidReal()
    {
        return $this->totalPaidReal;
    }

    /**
     * Set totalCost
     *
     * @param float $totalCost
     *
     * @return Orders
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * Get totalCost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * Set invoiceId
     *
     * @param string $invoiceId
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
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Orders
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Orders
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add orderData
     *
     * @param \AppBundle\Entity\OrderData $orderData
     *
     * @return Orders
     */
    public function addOrderData(\AppBundle\Entity\OrderData $orderData)
    {
        $this->orderDatas[] = $orderData;

        return $this;
    }

    /**
     * Remove orderData
     *
     * @param \AppBundle\Entity\OrderData $orderData
     */
    public function removeOrderData(\AppBundle\Entity\OrderData $orderData)
    {
        $this->orderDatas->removeElement($orderData);
    }

    /**
     * Get orderDatas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderDatas()
    {
        return $this->orderDatas;
    }

    /**
     * Set account
     *
     * @param \AppBundle\Entity\Account $account
     *
     * @return Orders
     */
    public function setAccount(\AppBundle\Entity\Account $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set party
     *
     * @param \AppBundle\Entity\Party $party
     *
     * @return Orders
     */
    public function setParty(\AppBundle\Entity\Party $party = null)
    {
        $this->party = $party;

        return $this;
    }

    /**
     * Get party
     *
     * @return \AppBundle\Entity\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Set coupon
     *
     * @param \AppBundle\Entity\Coupon $coupon
     *
     * @return Orders
     */
    public function setCoupon(\AppBundle\Entity\Coupon $coupon = null)
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * Get coupon
     *
     * @return \AppBundle\Entity\Coupon
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\Account $updatedBy
     *
     * @return Orders
     */
    public function setUpdatedBy(\AppBundle\Entity\Account $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \AppBundle\Entity\Account
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
