<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Imports.
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
     * @ORM\Column(name="model_id", type="integer", nullable=true)
     */
    private $modelId;

    /**
     * @var string
     *
     * @ORM\Column(name="model_type", type="string", nullable=true)
     */
    private $modelType;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="t_stamp", type="datetime")
     */
    private $tStamp;

    public function __toString()
    {
        return $this->modelId;
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modelId.
     *
     * @param int $modelId
     *
     * @return Imports
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId.
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set modelType.
     *
     * @param string $modelType
     *
     * @return Imports
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;

        return $this;
    }

    /**
     * Get modelType.
     *
     * @return string
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * Set tStamp.
     *
     * @param \DateTime $tStamp
     *
     * @return Imports
     */
    public function setTStamp($tStamp)
    {
        $this->tStamp = $tStamp;

        return $this;
    }

    /**
     * Get tStamp.
     *
     * @return \DateTime
     */
    public function getTStamp()
    {
        return $this->tStamp;
    }
}
