<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberRestrictions
 *
 * @ORM\Table(name="member_restrictions")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\MemberRestrictionsRepository")
 */
class MemberRestrictions
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
     * @ORM\Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var int
     *
     * @ORM\Column(name="restricted_member_id", type="integer")
     */
    private $restrictedMemberId;

    /**
     * @var string
     *
     * @ORM\Column(name="sort_order", type="string", length=255)
     */
    private $sortOrder;


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
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return MemberRestrictions
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
     * Set restrictedMemberId
     *
     * @param integer $restrictedMemberId
     *
     * @return MemberRestrictions
     */
    public function setRestrictedMemberId($restrictedMemberId)
    {
        $this->restrictedMemberId = $restrictedMemberId;

        return $this;
    }

    /**
     * Get restrictedMemberId
     *
     * @return int
     */
    public function getRestrictedMemberId()
    {
        return $this->restrictedMemberId;
    }

    /**
     * Set sortOrder
     *
     * @param string $sortOrder
     *
     * @return MemberRestrictions
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}

