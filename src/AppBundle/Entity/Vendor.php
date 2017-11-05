<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Vendor
 *
 * @ORM\Table(name="vendor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VendorRepository")
 */
class Vendor
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
     * @Assert\NotBlank(message="vendor.blank_name")
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="vendor.blank_description")
     * @Assert\Length(
     *     min=5,
     *     minMessage="vendor.description.too_short",
     *     max=1000,
     *     maxMessage="vendor.description.too_long"
     * )
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $account;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(type="boolean")
     */
    private $isEnabled =  true;

    /**
     * @var Service
     *
     * @ORM\OneToMany(targetEntity="Service", mappedBy="vendor")
     */
    private $services;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;
}
