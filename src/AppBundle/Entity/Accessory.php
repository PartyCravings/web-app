<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accessory
 *
 * @ORM\Table(name="accessory")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccessoryRepository")
 */
class Accessory
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
     * @ORM\Column(name="id_service_1", type="string", length=255)
     */
    private $idService1;

    /**
     * @var string
     *
     * @ORM\Column(name="id_service_2", type="string", length=255)
     */
    private $idService2;

    /**
     * @var string
     *
     * @ORM\Column(name="id_service_3", type="string", length=255)
     */
    private $idService3;

    /**
     * @var string
     *
     * @ORM\Column(name="id_service_4", type="string", length=255)
     */
    private $idService4;

    /**
     * @var string
     *
     * @ORM\Column(name="id_service_5", type="string", length=255)
     */
    private $idService5;


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
     * Set idService1
     *
     * @param string $idService1
     *
     * @return Accessory
     */
    public function setIdService1($idService1)
    {
        $this->idService1 = $idService1;

        return $this;
    }

    /**
     * Get idService1
     *
     * @return string
     */
    public function getIdService1()
    {
        return $this->idService1;
    }

    /**
     * Set idService2
     *
     * @param string $idService2
     *
     * @return Accessory
     */
    public function setIdService2($idService2)
    {
        $this->idService2 = $idService2;

        return $this;
    }

    /**
     * Get idService2
     *
     * @return string
     */
    public function getIdService2()
    {
        return $this->idService2;
    }

    /**
     * Set idService3
     *
     * @param string $idService3
     *
     * @return Accessory
     */
    public function setIdService3($idService3)
    {
        $this->idService3 = $idService3;

        return $this;
    }

    /**
     * Get idService3
     *
     * @return string
     */
    public function getIdService3()
    {
        return $this->idService3;
    }

    /**
     * Set idService4
     *
     * @param string $idService4
     *
     * @return Accessory
     */
    public function setIdService4($idService4)
    {
        $this->idService4 = $idService4;

        return $this;
    }

    /**
     * Get idService4
     *
     * @return string
     */
    public function getIdService4()
    {
        return $this->idService4;
    }

    /**
     * Set idService5
     *
     * @param string $idService5
     *
     * @return Accessory
     */
    public function setIdService5($idService5)
    {
        $this->idService5 = $idService5;

        return $this;
    }

    /**
     * Get idService5
     *
     * @return string
     */
    public function getIdService5()
    {
        return $this->idService5;
    }
}

