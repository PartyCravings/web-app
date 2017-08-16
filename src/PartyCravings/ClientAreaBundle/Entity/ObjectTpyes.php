<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectTpyes
 *
 * @ORM\Table(name="object_tpyes")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectTpyesRepository")
 */
class ObjectTpyes
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="handler_class", type="string", length=255)
     */
    private $handlerClass;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=255)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var int
     *
     * @ORM\Column(name="plugin_id", type="integer")
     */
    private $pluginId;

    /**
     * @var int
     *
     * @ORM\Column(name="uses_order", type="integer")
     */
    private $usesOrder;


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
     * @return ObjectTpyes
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
     * Set name
     *
     * @param string $name
     *
     * @return ObjectTpyes
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
     * Set handlerClass
     *
     * @param string $handlerClass
     *
     * @return ObjectTpyes
     */
    public function setHandlerClass($handlerClass)
    {
        $this->handlerClass = $handlerClass;

        return $this;
    }

    /**
     * Get handlerClass
     *
     * @return string
     */
    public function getHandlerClass()
    {
        return $this->handlerClass;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     *
     * @return ObjectTpyes
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ObjectTpyes
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

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return ObjectTpyes
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set pluginId
     *
     * @param integer $pluginId
     *
     * @return ObjectTpyes
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
     * Set usesOrder
     *
     * @param integer $usesOrder
     *
     * @return ObjectTpyes
     */
    public function setUsesOrder($usesOrder)
    {
        $this->usesOrder = $usesOrder;

        return $this;
    }

    /**
     * Get usesOrder
     *
     * @return int
     */
    public function getUsesOrder()
    {
        return $this->usesOrder;
    }
}

