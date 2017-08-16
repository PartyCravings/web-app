<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Criteria
 *
 * @ORM\Table(name="criteria")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CriteriaRepository")
 */
class Criteria
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
     * @ORM\Column(name="criteria_id", type="integer")
     */
    private $criteriaId;

    /**
     * @var string
     *
     * @ORM\Column(name="model_type", type="string", length=255)
     */
    private $modelType;

    /**
     * @var string
     *
     * @ORM\Column(name="model_field", type="string", length=255)
     */
    private $modelField;

    /**
     * @var string
     *
     * @ORM\Column(name="model_value", type="string", length=255)
     */
    private $modelValue;

    /**
     * @var string
     *
     * @ORM\Column(name="comparison_operator", type="string", length=255)
     */
    private $comparisonOperator;

    /**
     * @var string
     *
     * @ORM\Column(name="users", type="string", length=255)
     */
    private $users;

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
     * Set criteriaId
     *
     * @param integer $criteriaId
     *
     * @return Criteria
     */
    public function setCriteriaId($criteriaId)
    {
        $this->criteriaId = $criteriaId;

        return $this;
    }

    /**
     * Get criteriaId
     *
     * @return int
     */
    public function getCriteriaId()
    {
        return $this->criteriaId;
    }

    /**
     * Set modelType
     *
     * @param string $modelType
     *
     * @return Criteria
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;

        return $this;
    }

    /**
     * Get modelType
     *
     * @return string
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * Set modelField
     *
     * @param string $modelField
     *
     * @return Criteria
     */
    public function setModelField($modelField)
    {
        $this->modelField = $modelField;

        return $this;
    }

    /**
     * Get modelField
     *
     * @return string
     */
    public function getModelField()
    {
        return $this->modelField;
    }

    /**
     * Set modelValue
     *
     * @param string $modelValue
     *
     * @return Criteria
     */
    public function setModelValue($modelValue)
    {
        $this->modelValue = $modelValue;

        return $this;
    }

    /**
     * Get modelValue
     *
     * @return string
     */
    public function getModelValue()
    {
        return $this->modelValue;
    }

    /**
     * Set comparisonOperator
     *
     * @param string $comparisonOperator
     *
     * @return Criteria
     */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->comparisonOperator = $comparisonOperator;

        return $this;
    }

    /**
     * Get comparisonOperator
     *
     * @return string
     */
    public function getComparisonOperator()
    {
        return $this->comparisonOperator;
    }

    /**
     * Set users
     *
     * @param string $users
     *
     * @return Criteria
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return string
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Criteria
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

