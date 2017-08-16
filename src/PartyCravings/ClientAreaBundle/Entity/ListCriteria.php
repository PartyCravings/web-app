<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListCriteria
 *
 * @ORM\Table(name="list_criteria")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ListCriteriaRepository")
 */
class ListCriteria
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
     * @var int
     *
     * @ORM\Column(name="list_id", type="integer")
     */
    private $listId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute", type="string", length=255)
     */
    private $attribute;

    /**
     * @var string
     *
     * @ORM\Column(name="comparison", type="string", length=255)
     */
    private $comparison;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


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
     * @return ListCriteria
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
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListCriteria
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ListCriteria
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
     * Set attribute
     *
     * @param string $attribute
     *
     * @return ListCriteria
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Set comparison
     *
     * @param string $comparison
     *
     * @return ListCriteria
     */
    public function setComparison($comparison)
    {
        $this->comparison = $comparison;

        return $this;
    }

    /**
     * Get comparison
     *
     * @return string
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return ListCriteria
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ListCriteria
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
}

