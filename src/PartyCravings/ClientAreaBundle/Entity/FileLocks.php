<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileLocks
 *
 * @ORM\Table(name="file_locks")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\FileLocksRepository")
 */
class FileLocks
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
     * @var bool
     *
     * @ORM\Column(name="_lock", type="boolean")
     */
    private $lock;

    /**
     * @var string
     *
     * @ORM\Column(name="_key", type="string", length=255)
     */
    private $key;

    /**
     * @var int
     *
     * @ORM\Column(name="ttl", type="integer")
     */
    private $ttl;


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
     * Set lock
     *
     * @param boolean $lock
     *
     * @return FileLocks
     */
    public function setLock($lock)
    {
        $this->lock = $lock;

        return $this;
    }

    /**
     * Get lock
     *
     * @return bool
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return FileLocks
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set ttl
     *
     * @param integer $ttl
     *
     * @return FileLocks
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * Get ttl
     *
     * @return int
     */
    public function getTtl()
    {
        return $this->ttl;
    }
}

