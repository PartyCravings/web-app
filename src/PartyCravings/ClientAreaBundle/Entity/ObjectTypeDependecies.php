<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectTypeDependecies
 *
 * @ORM\Table(name="object_type_dependecies")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectTypeDependeciesRepository")
 */
class ObjectTypeDependecies
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
     * @ORM\Column(name="object_type_id", type="integer")
     */
    private $objectTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="dependant_object_type_id", type="integer")
     */
    private $dependantObjectTypeId;


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
     * Set objectTypeId
     *
     * @param integer $objectTypeId
     *
     * @return ObjectTypeDependecies
     */
    public function setObjectTypeId($objectTypeId)
    {
        $this->objectTypeId = $objectTypeId;

        return $this;
    }

    /**
     * Get objectTypeId
     *
     * @return int
     */
    public function getObjectTypeId()
    {
        return $this->objectTypeId;
    }

    /**
     * Set dependantObjectTypeId
     *
     * @param integer $dependantObjectTypeId
     *
     * @return ObjectTypeDependecies
     */
    public function setDependantObjectTypeId($dependantObjectTypeId)
    {
        $this->dependantObjectTypeId = $dependantObjectTypeId;

        return $this;
    }

    /**
     * Get dependantObjectTypeId
     *
     * @return int
     */
    public function getDependantObjectTypeId()
    {
        return $this->dependantObjectTypeId;
    }
}

