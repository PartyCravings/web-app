<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compare
 *
 * @ORM\Table(name="compare")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompareRepository")
 */
class Compare
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
     * @ORM\Column(name="id_customer", type="string", length=255)
     */
    private $idCustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=255)
     */
    private $product;


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
     * Set idCustomer
     *
     * @param string $idCustomer
     *
     * @return Compare
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return string
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set product
     *
     * @param string $product
     *
     * @return Compare
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }
}

