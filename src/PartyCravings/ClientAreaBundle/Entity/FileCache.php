<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileCache
 *
 * @ORM\Table(name="file_cache")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\FileCacheRepository")
 */
class FileCache
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
     * @ORM\Column(name="file_id", type="integer")
     */
    private $fileId;

    /**
     * @var int
     *
     * @ORM\Column(name="storage", type="integer")
     */
    private $storage;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="path_hash", type="string", length=255)
     */
    private $pathHash;

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer")
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="mimetype", type="integer")
     */
    private $mimetype;

    /**
     * @var int
     *
     * @ORM\Column(name="mimepart", type="integer")
     */
    private $mimepart;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mtime", type="datetime")
     */
    private $mtime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="storage_mtime", type="datetime")
     */
    private $storageMtime;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_encrytpted", type="boolean")
     */
    private $isEncrytpted;

    /**
     * @var bool
     *
     * @ORM\Column(name="unencrypted_size", type="boolean")
     */
    private $unencryptedSize;

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=255)
     */
    private $etag;

    /**
     * @var int
     *
     * @ORM\Column(name="permissions", type="integer")
     */
    private $permissions;

    /**
     * @var string
     *
     * @ORM\Column(name="checksum", type="string", length=255)
     */
    private $checksum;


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
     * Set fileId
     *
     * @param integer $fileId
     *
     * @return FileCache
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get fileId
     *
     * @return int
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Set storage
     *
     * @param integer $storage
     *
     * @return FileCache
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return int
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return FileCache
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set pathHash
     *
     * @param string $pathHash
     *
     * @return FileCache
     */
    public function setPathHash($pathHash)
    {
        $this->pathHash = $pathHash;

        return $this;
    }

    /**
     * Get pathHash
     *
     * @return string
     */
    public function getPathHash()
    {
        return $this->pathHash;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return FileCache
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return FileCache
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mimetype
     *
     * @param integer $mimetype
     *
     * @return FileCache
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    /**
     * Get mimetype
     *
     * @return int
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Set mimepart
     *
     * @param integer $mimepart
     *
     * @return FileCache
     */
    public function setMimepart($mimepart)
    {
        $this->mimepart = $mimepart;

        return $this;
    }

    /**
     * Get mimepart
     *
     * @return int
     */
    public function getMimepart()
    {
        return $this->mimepart;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return FileCache
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set mtime
     *
     * @param \DateTime $mtime
     *
     * @return FileCache
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;

        return $this;
    }

    /**
     * Get mtime
     *
     * @return \DateTime
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Set storageMtime
     *
     * @param \DateTime $storageMtime
     *
     * @return FileCache
     */
    public function setStorageMtime($storageMtime)
    {
        $this->storageMtime = $storageMtime;

        return $this;
    }

    /**
     * Get storageMtime
     *
     * @return \DateTime
     */
    public function getStorageMtime()
    {
        return $this->storageMtime;
    }

    /**
     * Set isEncrytpted
     *
     * @param boolean $isEncrytpted
     *
     * @return FileCache
     */
    public function setIsEncrytpted($isEncrytpted)
    {
        $this->isEncrytpted = $isEncrytpted;

        return $this;
    }

    /**
     * Get isEncrytpted
     *
     * @return bool
     */
    public function getIsEncrytpted()
    {
        return $this->isEncrytpted;
    }

    /**
     * Set unencryptedSize
     *
     * @param boolean $unencryptedSize
     *
     * @return FileCache
     */
    public function setUnencryptedSize($unencryptedSize)
    {
        $this->unencryptedSize = $unencryptedSize;

        return $this;
    }

    /**
     * Get unencryptedSize
     *
     * @return bool
     */
    public function getUnencryptedSize()
    {
        return $this->unencryptedSize;
    }

    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return FileCache
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set permissions
     *
     * @param integer $permissions
     *
     * @return FileCache
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Get permissions
     *
     * @return int
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set checksum
     *
     * @param string $checksum
     *
     * @return FileCache
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;

        return $this;
    }

    /**
     * Get checksum
     *
     * @return string
     */
    public function getChecksum()
    {
        return $this->checksum;
    }
}

