<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\IpTraceable\Traits\IpTraceableEntity;

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
     * @ORM\ManyToMany(targetEntity="OrderData")
     * @ORM\JoinColumn(nullable=false)
     */
    private $serviceDatas;

    /**
     * @var Accounts
     *
     * @ORM\ManyToOne(targetEntity="Accounts")
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
     * @ORM\Column(name="payment_method", type="string")
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_data", type="string")
     */
    private $paymentMethodData;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_key", type="string")
     */
    private $paymentMethodKey;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts", type="float")
     */
    private $totalDiscounts;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_incl", type="float")
     */
    private $totalDiscountsTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_discounts_tax_excl", type="float")
     */
    private $totalDiscountsTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid", type="float")
     */
    private $totalPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_incl", type="float")
     */
    private $totalPaidTaxIncl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_tax_excl", type="float")
     */
    private $totalPaidTaxExcl;

    /**
     * @var string
     *
     * @ORM\Column(name="total_paid_real", type="float")
     */
    private $totalPaidReal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_cost", type="float")
     */
    private $totalCost;

    /**
     * @var int
     *
     * @ORM\Column(name="invoice_id", type="string")
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string")
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="coupon_id", type="integer")
     */
    private $coupon;
}
