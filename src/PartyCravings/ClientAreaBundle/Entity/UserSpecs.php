<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSpecs
 *
 * @ORM\Table(name="user_specs")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\UserSpecsRepository")
 */
class UserSpecs
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
     * @ORM\Column(name="user_type_id", type="integer")
     */
    private $userTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="spec_column", type="string", length=255)
     */
    private $specColumn;

    /**
     * @var int
     *
     * @ORM\Column(name="spec_value", type="integer")
     */
    private $specValue;


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
     * Set userTypeId
     *
     * @param integer $userTypeId
     *
     * @return UserSpecs
     */
    public function setUserTypeId($userTypeId)
    {
        $this->userTypeId = $userTypeId;

        return $this;
    }

    /**
     * Get userTypeId
     *
     * @return int
     */
    public function getUserTypeId()
    {
        return $this->userTypeId;
    }

    /**
     * Set specColumn
     *
     * @param string $specColumn
     *
     * @return UserSpecs
     */
    public function setSpecColumn($specColumn)
    {
        $this->specColumn = $specColumn;

        return $this;
    }

    /**
     * Get specColumn
     *
     * @return string
     */
    public function getSpecColumn()
    {
        return $this->specColumn;
    }

    /**
     * Set specValue
     *
     * @param integer $specValue
     *
     * @return UserSpecs
     */
    public function setSpecValue($specValue)
    {
        $this->specValue = $specValue;

        return $this;
    }

    /**
     * Get specValue
     *
     * @return int
     */
    public function getSpecValue()
    {
        return $this->specValue;
    }
}

