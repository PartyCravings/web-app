<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * _Range
 *
 * @ORM\Table(name="__range")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\_RangeRepository")
 */
class _Range
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
     * @var string
     *
     * @ORM\Column(name="id_carrier", type="string", length=255)
     */
    private $idCarrier;

    /**
     * @var string
     *
     * @ORM\Column(name="delimiter1", type="string", length=255)
     */
    private $delimiter1;

    /**
     * @var string
     *
     * @ORM\Column(name="delimiter2", type="string", length=255)
     */
    private $delimiter2;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight;


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
     * Set idCarrier
     *
     * @param string $idCarrier
     *
     * @return _Range
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return string
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set delimiter1
     *
     * @param string $delimiter1
     *
     * @return _Range
     */
    public function setDelimiter1($delimiter1)
    {
        $this->delimiter1 = $delimiter1;

        return $this;
    }

    /**
     * Get delimiter1
     *
     * @return string
     */
    public function getDelimiter1()
    {
        return $this->delimiter1;
    }

    /**
     * Set delimiter2
     *
     * @param string $delimiter2
     *
     * @return _Range
     */
    public function setDelimiter2($delimiter2)
    {
        $this->delimiter2 = $delimiter2;

        return $this;
    }

    /**
     * Get delimiter2
     *
     * @return string
     */
    public function getDelimiter2()
    {
        return $this->delimiter2;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return _Range
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

