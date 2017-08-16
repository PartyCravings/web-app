<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customizer
 *
 * @ORM\Table(name="customizer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomizerRepository")
 */
class Customizer
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="EventCr", type="string", length=255)
     */
    private $eventCr;

    /**
     * @var string
     *
     * @ORM\Column(name="Drinks", type="string", length=255)
     */
    private $drinks;


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
     * Set name
     *
     * @param string $name
     *
     * @return Customizer
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
     * Set eventCr
     *
     * @param string $eventCr
     *
     * @return Customizer
     */
    public function setEventCr($eventCr)
    {
        $this->eventCr = $eventCr;

        return $this;
    }

    /**
     * Get eventCr
     *
     * @return string
     */
    public function getEventCr()
    {
        return $this->eventCr;
    }

    /**
     * Set drinks
     *
     * @param string $drinks
     *
     * @return Customizer
     */
    public function setDrinks($drinks)
    {
        $this->drinks = $drinks;

        return $this;
    }

    /**
     * Get drinks
     *
     * @return string
     */
    public function getDrinks()
    {
        return $this->drinks;
    }
}

