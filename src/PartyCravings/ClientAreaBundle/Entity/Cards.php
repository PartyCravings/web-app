<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards
 *
 * @ORM\Table(name="cards")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CardsRepository")
 */
class Cards
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
     * @var string
     *
     * @ORM\Column(name="card_data", type="string", length=255)
     */
    private $cardData;

    /**
     * @ORM\OneToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\CardsProperties", inversedBy="cardId")
     * @ORM\JoinColumn(name="cardsProperties",referencedColumnName="id")
    */
    private $cardsProperties;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255)
     */
    private $uri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified", type="datetime")
     */
    private $lastModified;

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=255)
     */
    private $etag;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;


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
     * @return Cards
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
     * Set cardData
     *
     * @param string $cardData
     *
     * @return Cards
     */
    public function setCardData($cardData)
    {
        $this->cardData = $cardData;

        return $this;
    }

    /**
     * Get cardData
     *
     * @return string
     */
    public function getCardData()
    {
        return $this->cardData;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return Cards
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return Cards
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return Cards
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Cards
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getCardsProperties()
    {
        return $this->cardsProperties;
    }

    /**
     * @param mixed $cardsProperties
     */
    public function setCardsProperties($cardsProperties)
    {
        $this->cardsProperties = $cardsProperties;
    }
}

