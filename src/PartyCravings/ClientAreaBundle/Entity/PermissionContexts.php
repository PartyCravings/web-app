<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermissionContexts
 *
 * @ORM\Table(name="permission_contexts")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\PermissionContextsRepository")
 */
class PermissionContexts
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
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var int
     *
     * @ORM\Column(name="permission_group_id", type="integer")
     */
    private $permissionGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer")
     */
    private $memberId;


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
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return PermissionContexts
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set permissionGroupId
     *
     * @param integer $permissionGroupId
     *
     * @return PermissionContexts
     */
    public function setPermissionGroupId($permissionGroupId)
    {
        $this->permissionGroupId = $permissionGroupId;

        return $this;
    }

    /**
     * Get permissionGroupId
     *
     * @return int
     */
    public function getPermissionGroupId()
    {
        return $this->permissionGroupId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return PermissionContexts
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
}

