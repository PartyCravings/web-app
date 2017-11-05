<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imports
 *
 * @ORM\Table(name="imports")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImportsRepository")
 */
class Imports
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="model_id", type="integer")
     */
    private $modelId;

    /**
     * @var string
     *
     * @ORM\Column(name="model_type", type="string")
     */
    private $modelType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

}
