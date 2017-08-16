<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermissionGroups
 *
 * @ORM\Table(name="permission_groups")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\PermissionGroupsRepository")
 */
class PermissionGroups
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
     * @ORM\Column(name="permission_group_id", type="integer")
     */
    private $permissionGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_context", type="boolean")
     */
    private $isContext;

    /**
     * @var int
     *
     * @ORM\Column(name="plugin_id", type="integer")
     */
    private $pluginId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set permissionGroupId
     *
     * @param integer $permissionGroupId
     *
     * @return PermissionGroups
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
     * Set name
     *
     * @param string $name
     *
     * @return PermissionGroups
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return PermissionGroups
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
     * Set isContext
     *
     * @param boolean $isContext
     *
     * @return PermissionGroups
     */
    public function setIsContext($isContext)
    {
        $this->isContext = $isContext;

        return $this;
    }

    /**
     * Get isContext
     *
     * @return bool
     */
    public function getIsContext()
    {
        return $this->isContext;
    }

    /**
     * Set pluginId
     *
     * @param integer $pluginId
     *
     * @return PermissionGroups
     */
    public function setPluginId($pluginId)
    {
        $this->pluginId = $pluginId;

        return $this;
    }

    /**
     * Get pluginId
     *
     * @return int
     */
    public function getPluginId()
    {
        return $this->pluginId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return PermissionGroups
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return PermissionGroups
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

