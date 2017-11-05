<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use rs\GaufretteBrowserBundle\Entity\File as GaufretteFile;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Files
 *
 * @ORM\Table(name="files")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilesRepository")
 */
class Files extends GaufretteFile
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
     * @var string
     *
     * @Assert\NotBlank(message="file.name.blank")
     * @ORM\Column(name="filename", type="string", nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @Assert\NotBlank(message="file.size.blank")
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="string", nullable=true)
     */
    private $contents;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="file.mimetype.blank")
     * @ORM\Column(name="mime_type", type="string", nullable=true)
     */
    private $mimeType;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="t_stamp", type="datetime")
     */
    private $tStamp;

    /**
     * @var Account
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $uploadedBy;

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Files
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
     * Set uploadedBy
     *
     * @param \AppBundle\Entity\Account $uploadedBy
     *
     * @return Files
     */
    public function setUploadedBy(\AppBundle\Entity\Account $uploadedBy = null)
    {
        $this->uploadedBy = $uploadedBy;

        return $this;
    }

    /**
     * Get uploadedBy
     *
     * @return \AppBundle\Entity\Account
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }
}
