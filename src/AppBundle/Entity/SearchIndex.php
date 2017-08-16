<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchIndex
 *
 * @ORM\Table(name="search_index")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SearchIndexRepository")
 */
class SearchIndex
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
     * @ORM\Column(name="id_product", type="string", length=255)
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="id_word", type="string", length=255)
     */
    private $idWord;

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
     * Set idProduct
     *
     * @param string $idProduct
     *
     * @return SearchIndex
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return string
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idWord
     *
     * @param string $idWord
     *
     * @return SearchIndex
     */
    public function setIdWord($idWord)
    {
        $this->idWord = $idWord;

        return $this;
    }

    /**
     * Get idWord
     *
     * @return string
     */
    public function getIdWord()
    {
        return $this->idWord;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return SearchIndex
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

