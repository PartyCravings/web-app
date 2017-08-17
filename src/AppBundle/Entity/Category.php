<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="id_parent", type="string", length=255)
     */
    private $idParent;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor_default", type="string", length=255)
     */
    private $idVendorDefault;


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
     * Set idParent
     *
     * @param string $idParent
     *
     * @return Category
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return string
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set idVendorDefault
     *
     * @param string $idVendorDefault
     *
     * @return Category
     */
    public function setIdVendorDefault($idVendorDefault)
    {
        $this->idVendorDefault = $idVendorDefault;

        return $this;
    }

    /**
     * Get idVendorDefault
     *
     * @return string
     */
    public function getIdVendorDefault()
    {
        return $this->idVendorDefault;
    }
}

