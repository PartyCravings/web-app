<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\Column(name="id_profile", type="string", length=255)
     */
    private $idProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="id_lang", type="string", length=255)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="plain_pwd", type="string", length=255)
     */
    private $plainPwd;

    /**
     * @var string
     *
     * @ORM\Column(name="last_pwd_gen", type="string", length=255)
     */
    private $lastPwdGen;

    /**
     * @var string
     *
     * @ORM\Column(name="stats_date_from", type="string", length=255)
     */
    private $statsDateFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="stats_date_to", type="string", length=255)
     */
    private $statsDateTo;

    /**
     * @var string
     *
     * @ORM\Column(name="stats_compare_from", type="string", length=255)
     */
    private $statsCompareFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="stats_compare_to", type="string", length=255)
     */
    private $statsCompareTo;

    /**
     * @var string
     *
     * @ORM\Column(name="stats_compare_option", type="string", length=255)
     */
    private $statsCompareOption;

    /**
     * @var string
     *
     * @ORM\Column(name="preselect_date_range", type="string", length=255)
     */
    private $preselectDateRange;

    /**
     * @var string
     *
     * @ORM\Column(name="bo_color", type="string", length=255)
     */
    private $boColor;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="optin", type="string", length=255)
     */
    private $optin;

    /**
     * @var string
     *
     * @ORM\Column(name="id_last_order", type="string", length=255)
     */
    private $idLastOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="id_last_customer_message", type="string", length=255)
     */
    private $idLastCustomerMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="id_last_customer", type="string", length=255)
     */
    private $idLastCustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="last_connection_date", type="string", length=255)
     */
    private $lastConnectionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;


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
     * Set idProfile
     *
     * @param string $idProfile
     *
     * @return Employee
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return string
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set idLang
     *
     * @param string $idLang
     *
     * @return Employee
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Employee
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Employee
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
     * Set email
     *
     * @param string $email
     *
     * @return Employee
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
     * Set passwd
     *
     * @param string $passwd
     *
     * @return Employee
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set plainPwd
     *
     * @param string $plainPwd
     *
     * @return Employee
     */
    public function setPlainPwd($plainPwd)
    {
        $this->plainPwd = $plainPwd;

        return $this;
    }

    /**
     * Get plainPwd
     *
     * @return string
     */
    public function getPlainPwd()
    {
        return $this->plainPwd;
    }

    /**
     * Set lastPwdGen
     *
     * @param string $lastPwdGen
     *
     * @return Employee
     */
    public function setLastPwdGen($lastPwdGen)
    {
        $this->lastPwdGen = $lastPwdGen;

        return $this;
    }

    /**
     * Get lastPwdGen
     *
     * @return string
     */
    public function getLastPwdGen()
    {
        return $this->lastPwdGen;
    }

    /**
     * Set statsDateFrom
     *
     * @param string $statsDateFrom
     *
     * @return Employee
     */
    public function setStatsDateFrom($statsDateFrom)
    {
        $this->statsDateFrom = $statsDateFrom;

        return $this;
    }

    /**
     * Get statsDateFrom
     *
     * @return string
     */
    public function getStatsDateFrom()
    {
        return $this->statsDateFrom;
    }

    /**
     * Set statsDateTo
     *
     * @param string $statsDateTo
     *
     * @return Employee
     */
    public function setStatsDateTo($statsDateTo)
    {
        $this->statsDateTo = $statsDateTo;

        return $this;
    }

    /**
     * Get statsDateTo
     *
     * @return string
     */
    public function getStatsDateTo()
    {
        return $this->statsDateTo;
    }

    /**
     * Set statsCompareFrom
     *
     * @param string $statsCompareFrom
     *
     * @return Employee
     */
    public function setStatsCompareFrom($statsCompareFrom)
    {
        $this->statsCompareFrom = $statsCompareFrom;

        return $this;
    }

    /**
     * Get statsCompareFrom
     *
     * @return string
     */
    public function getStatsCompareFrom()
    {
        return $this->statsCompareFrom;
    }

    /**
     * Set statsCompareTo
     *
     * @param string $statsCompareTo
     *
     * @return Employee
     */
    public function setStatsCompareTo($statsCompareTo)
    {
        $this->statsCompareTo = $statsCompareTo;

        return $this;
    }

    /**
     * Get statsCompareTo
     *
     * @return string
     */
    public function getStatsCompareTo()
    {
        return $this->statsCompareTo;
    }

    /**
     * Set statsCompareOption
     *
     * @param string $statsCompareOption
     *
     * @return Employee
     */
    public function setStatsCompareOption($statsCompareOption)
    {
        $this->statsCompareOption = $statsCompareOption;

        return $this;
    }

    /**
     * Get statsCompareOption
     *
     * @return string
     */
    public function getStatsCompareOption()
    {
        return $this->statsCompareOption;
    }

    /**
     * Set preselectDateRange
     *
     * @param string $preselectDateRange
     *
     * @return Employee
     */
    public function setPreselectDateRange($preselectDateRange)
    {
        $this->preselectDateRange = $preselectDateRange;

        return $this;
    }

    /**
     * Get preselectDateRange
     *
     * @return string
     */
    public function getPreselectDateRange()
    {
        return $this->preselectDateRange;
    }

    /**
     * Set boColor
     *
     * @param string $boColor
     *
     * @return Employee
     */
    public function setBoColor($boColor)
    {
        $this->boColor = $boColor;

        return $this;
    }

    /**
     * Get boColor
     *
     * @return string
     */
    public function getBoColor()
    {
        return $this->boColor;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Employee
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set optin
     *
     * @param string $optin
     *
     * @return Employee
     */
    public function setOptin($optin)
    {
        $this->optin = $optin;

        return $this;
    }

    /**
     * Get optin
     *
     * @return string
     */
    public function getOptin()
    {
        return $this->optin;
    }

    /**
     * Set idLastOrder
     *
     * @param string $idLastOrder
     *
     * @return Employee
     */
    public function setIdLastOrder($idLastOrder)
    {
        $this->idLastOrder = $idLastOrder;

        return $this;
    }

    /**
     * Get idLastOrder
     *
     * @return string
     */
    public function getIdLastOrder()
    {
        return $this->idLastOrder;
    }

    /**
     * Set idLastCustomerMessage
     *
     * @param string $idLastCustomerMessage
     *
     * @return Employee
     */
    public function setIdLastCustomerMessage($idLastCustomerMessage)
    {
        $this->idLastCustomerMessage = $idLastCustomerMessage;

        return $this;
    }

    /**
     * Get idLastCustomerMessage
     *
     * @return string
     */
    public function getIdLastCustomerMessage()
    {
        return $this->idLastCustomerMessage;
    }

    /**
     * Set idLastCustomer
     *
     * @param string $idLastCustomer
     *
     * @return Employee
     */
    public function setIdLastCustomer($idLastCustomer)
    {
        $this->idLastCustomer = $idLastCustomer;

        return $this;
    }

    /**
     * Get idLastCustomer
     *
     * @return string
     */
    public function getIdLastCustomer()
    {
        return $this->idLastCustomer;
    }

    /**
     * Set lastConnectionDate
     *
     * @param string $lastConnectionDate
     *
     * @return Employee
     */
    public function setLastConnectionDate($lastConnectionDate)
    {
        $this->lastConnectionDate = $lastConnectionDate;

        return $this;
    }

    /**
     * Get lastConnectionDate
     *
     * @return string
     */
    public function getLastConnectionDate()
    {
        return $this->lastConnectionDate;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Employee
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
}
