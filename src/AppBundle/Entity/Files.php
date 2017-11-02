<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use rs\GaufretteBrowserBundle\Entity\File as GaufretteFile;

/**
 * Files
 *
 * @ORM\Table(name="files")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilesRepository")
 */
class Files extends GaufretteFile
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
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="string", length=255)
     */
    private $contents;

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string", length=32)
     */
    private $mimeType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_stamp", type="datetime")
     */
    private $tStamp;

    /**
     * @var Accounts
     *
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $uploadedBy;


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
     * Set filename
     *
     * @param string $filename
     *
     * @return Files
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set contents
     *
     * @param string $contents
     *
     * @return Files
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set tStamp
     *
     * @param \DateTime $tStamp
     *
     * @return Files
     */
    public function setTStamp($tStamp)
    {
        $this->tStamp = $tStamp;

        return $this;
    }

    /**
     * Get tStamp
     *
     * @return \DateTime
     */
    public function getTStamp()
    {
        return $this->tStamp;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Files
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return Files
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set uploadedBy
     *
     * @param \AppBundle\Entity\Accounts $uploadedBy
     *
     * @return Files
     */
    public function setUploadedBy(\AppBundle\Entity\Accounts $uploadedBy = null)
    {
        $this->uploadedBy = $uploadedBy;

        return $this;
    }

    /**
     * Get uploadedBy
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }
}
