<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectContactPermissions
 *
 * @ORM\Table(name="object_contact_permissions")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectContactPermissionsRepository")
 */
class ObjectContactPermissions
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
     * @ORM\Column(name="rel_object_id", type="integer")
     */
    private $relObjectId;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_read", type="boolean")
     */
    private $canRead;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_write", type="boolean")
     */
    private $canWrite;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_delete", type="boolean")
     */
    private $canDelete;


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
     * Set relObjectId
     *
     * @param integer $relObjectId
     *
     * @return ObjectContactPermissions
     */
    public function setRelObjectId($relObjectId)
    {
        $this->relObjectId = $relObjectId;

        return $this;
    }

    /**
     * Get relObjectId
     *
     * @return int
     */
    public function getRelObjectId()
    {
        return $this->relObjectId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return ObjectContactPermissions
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
     * Set canRead
     *
     * @param boolean $canRead
     *
     * @return ObjectContactPermissions
     */
    public function setCanRead($canRead)
    {
        $this->canRead = $canRead;

        return $this;
    }

    /**
     * Get canRead
     *
     * @return bool
     */
    public function getCanRead()
    {
        return $this->canRead;
    }

    /**
     * Set canWrite
     *
     * @param boolean $canWrite
     *
     * @return ObjectContactPermissions
     */
    public function setCanWrite($canWrite)
    {
        $this->canWrite = $canWrite;

        return $this;
    }

    /**
     * Get canWrite
     *
     * @return bool
     */
    public function getCanWrite()
    {
        return $this->canWrite;
    }

    /**
     * Set canDelete
     *
     * @param boolean $canDelete
     *
     * @return ObjectContactPermissions
     */
    public function setCanDelete($canDelete)
    {
        $this->canDelete = $canDelete;

        return $this;
    }

    /**
     * Get canDelete
     *
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }
}

