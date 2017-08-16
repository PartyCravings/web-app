<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectMembers
 *
 * @ORM\Table(name="object_members")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectMembersRepository")
 */
class ObjectMembers
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
     * @ORM\Column(name="object_id", type="integer")
     */
    private $objectId;

    /**
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_optimization", type="boolean")
     */
    private $isOptimization;


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
     * Set objectId
     *
     * @param integer $objectId
     *
     * @return ObjectMembers
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return ObjectMembers
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set isOptimization
     *
     * @param boolean $isOptimization
     *
     * @return ObjectMembers
     */
    public function setIsOptimization($isOptimization)
    {
        $this->isOptimization = $isOptimization;

        return $this;
    }

    /**
     * Get isOptimization
     *
     * @return bool
     */
    public function getIsOptimization()
    {
        return $this->isOptimization;
    }
}

