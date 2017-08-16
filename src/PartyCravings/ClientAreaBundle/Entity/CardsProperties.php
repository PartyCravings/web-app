<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardsProperties
 *
 * @ORM\Table(name="cards_properties")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CardsPropertiesRepository")
 */
class CardsProperties
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
     * @ORM\Column(name="addressbook_id", type="integer")
     */
    private $addressbookId;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\Cards", mappedBy="cardsProperties")
     */
    private $cardId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="preferred", type="integer")
     */
    private $preferred;


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
     * Set addressbookId
     *
     * @param integer $addressbookId
     *
     * @return CardsProperties
     */
    public function setAddressbookId($addressbookId)
    {
        $this->addressbookId = $addressbookId;

        return $this;
    }

    /**
     * Get addressbookId
     *
     * @return int
     */
    public function getAddressbookId()
    {
        return $this->addressbookId;
    }

    /**
     * Set cardId
     *
     * @param integer $cardId
     *
     * @return CardsProperties
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CardsProperties
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
     * Set value
     *
     * @param string $value
     *
     * @return CardsProperties
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
     * Set preferred
     *
     * @param integer $preferred
     *
     * @return CardsProperties
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;

        return $this;
    }

    /**
     * Get preferred
     *
     * @return int
     */
    public function getPreferred()
    {
        return $this->preferred;
    }
}

