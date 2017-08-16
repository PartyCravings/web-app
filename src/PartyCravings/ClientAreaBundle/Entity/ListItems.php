<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListItems
 *
 * @ORM\Table(name="list_items")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ListItemsRepository")
 */
class ListItems
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
     * @ORM\Column(name="email_address", type="string", length=255)
     */
    private $emailAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\Lists", mappedBy="items")
     */
    private $listId;

    /**
     * @var int
     *
     * @ORM\Column(name="unique_id", type="integer")
     */
    private $uniqueId;

    /**
     * @var int
     *
     * @ORM\Column(name="sent", type="integer")
     */
    private $sent;

    /**
     * @var int
     *
     * @ORM\Column(name="opened", type="integer")
     */
    private $opened;


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
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return ListItems
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return ListItems
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
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListItems
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
     * Set uniqueId
     *
     * @param integer $uniqueId
     *
     * @return ListItems
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * Get uniqueId
     *
     * @return int
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Set sent
     *
     * @param integer $sent
     *
     * @return ListItems
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return int
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set opened
     *
     * @param integer $opened
     *
     * @return ListItems
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Get opened
     *
     * @return int
     */
    public function getOpened()
    {
        return $this->opened;
    }
}

