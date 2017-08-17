<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperatingSystem
 *
 * @ORM\Table(name="operating_system")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OperatingSystemRepository")
 */
class OperatingSystem
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

