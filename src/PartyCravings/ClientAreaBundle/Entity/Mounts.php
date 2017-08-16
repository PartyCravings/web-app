<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mounts
 *
 * @ORM\Table(name="mounts")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\MountsRepository")
 */
class Mounts
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
     * @ORM\Column(name="storage_id", type="integer")
     */
    private $storageId;

    /**
     * @var int
     *
     * @ORM\Column(name="root_id", type="integer")
     */
    private $rootId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="mount_point", type="string", length=255)
     */
    private $mountPoint;

    /**
     * @var int
     *
     * @ORM\Column(name="mount_id", type="integer")
     */
    private $mountId;


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
     * Set storageId
     *
     * @param integer $storageId
     *
     * @return Mounts
     */
    public function setStorageId($storageId)
    {
        $this->storageId = $storageId;

        return $this;
    }

    /**
     * Get storageId
     *
     * @return int
     */
    public function getStorageId()
    {
        return $this->storageId;
    }

    /**
     * Set rootId
     *
     * @param integer $rootId
     *
     * @return Mounts
     */
    public function setRootId($rootId)
    {
        $this->rootId = $rootId;

        return $this;
    }

    /**
     * Get rootId
     *
     * @return int
     */
    public function getRootId()
    {
        return $this->rootId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Mounts
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set mountPoint
     *
     * @param string $mountPoint
     *
     * @return Mounts
     */
    public function setMountPoint($mountPoint)
    {
        $this->mountPoint = $mountPoint;

        return $this;
    }

    /**
     * Get mountPoint
     *
     * @return string
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
    }

    /**
     * Set mountId
     *
     * @param integer $mountId
     *
     * @return Mounts
     */
    public function setMountId($mountId)
    {
        $this->mountId = $mountId;

        return $this;
    }

    /**
     * Get mountId
     *
     * @return int
     */
    public function getMountId()
    {
        return $this->mountId;
    }
}

