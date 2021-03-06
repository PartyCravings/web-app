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
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as VichFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Files.
 *
 * @ORM\Table(name="files")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilesRepository")
 * @Vich\Uploadable
 */
class Files extends VichFile
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="service_files", fileNameProperty="name", size="size", mimeType="mimeType", originalName="originalName")
     *
     * @var File
     */
    private $actualFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $silhouette;

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|UploadedFile $image
     */
    public function setActualFile(File $file = null)
    {
        $this->actualFile = $file;

        if ($file) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updated = new \DateTimeImmutable();
        }
    }

    /**
     * @return File|null
     */
    public function getActualFile()
    {
        return $this->actualFile;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return Files
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set silhouette.
     *
     * @param string $silhouette
     *
     * @return Files
     */
    public function setSilhouette($silhouette)
    {
        $this->silhouette = $silhouette;

        return $this;
    }

    /**
     * Get silhouette.
     *
     * @return string
     */
    public function getSilhouette()
    {
        return $this->silhouette;
    }
}
