<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tax
 *
 * @ORM\Table(name="tax")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxRepository")
 */
class Tax
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
     * @ORM\Column(name="rate", type="string", length=255)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="rule", type="string", length=255)
     */
    private $rule;

    /**
     * @var string
     *
     * @ORM\Column(name="rules_group", type="string", length=255)
     */
    private $rulesGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="rules_group_vendor", type="string", length=255)
     */
    private $rulesGroupVendor;


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
     * Set rate
     *
     * @param string $rate
     *
     * @return Tax
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Tax
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
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Tax
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
     * Set lang
     *
     * @param string $lang
     *
     * @return Tax
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set rule
     *
     * @param string $rule
     *
     * @return Tax
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
     * Set rulesGroup
     *
     * @param string $rulesGroup
     *
     * @return Tax
     */
    public function setRulesGroup($rulesGroup)
    {
        $this->rulesGroup = $rulesGroup;

        return $this;
    }

    /**
     * Get rulesGroup
     *
     * @return string
     */
    public function getRulesGroup()
    {
        return $this->rulesGroup;
    }

    /**
     * Set rulesGroupVendor
     *
     * @param string $rulesGroupVendor
     *
     * @return Tax
     */
    public function setRulesGroupVendor($rulesGroupVendor)
    {
        $this->rulesGroupVendor = $rulesGroupVendor;

        return $this;
    }

    /**
     * Get rulesGroupVendor
     *
     * @return string
     */
    public function getRulesGroupVendor()
    {
        return $this->rulesGroupVendor;
    }
}

