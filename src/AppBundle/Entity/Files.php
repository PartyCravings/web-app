<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use rs\GaufretteBrowserBundle\Entity\File as GaufretteFile;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @ORM\Column(name="filename", type="string")
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
     * @ORM\Column(name="contents", type="string")
     */
    private $contents;

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string")
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
     * @var Accounts
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $uploadedBy;
}
