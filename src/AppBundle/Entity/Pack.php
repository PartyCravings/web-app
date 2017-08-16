<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PackRepository")
 */
class Pack
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
     * @ORM\Column(name="id_product_item", type="string", length=255)
     */
    private $idProductItem;

    /**
     * @var string
     *
     * @ORM\Column(name="id_service_attribute_item", type="string", length=255)
     */
    private $idServiceAttributeItem;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;


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
     * Set idProductItem
     *
     * @param string $idProductItem
     *
     * @return Pack
     */
    public function setIdProductItem($idProductItem)
    {
        $this->idProductItem = $idProductItem;

        return $this;
    }

    /**
     * Get idProductItem
     *
     * @return string
     */
    public function getIdProductItem()
    {
        return $this->idProductItem;
    }

    /**
     * Set idServiceAttributeItem
     *
     * @param string $idServiceAttributeItem
     *
     * @return Pack
     */
    public function setIdServiceAttributeItem($idServiceAttributeItem)
    {
        $this->idServiceAttributeItem = $idServiceAttributeItem;

        return $this;
    }

    /**
     * Get idServiceAttributeItem
     *
     * @return string
     */
    public function getIdServiceAttributeItem()
    {
        return $this->idServiceAttributeItem;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Pack
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

