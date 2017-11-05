<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Party
 *
 * @ORM\Table(name="party")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartyRepository")
 */
class Party
{
    /**
     * Hook SoftDeleteable behavior
     * updates deletedAt field
     */
    use SoftDeleteableEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @Gedmo\Translatable
     * @Assert\NotBlank(message="party.blank_title")
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @Gedmo\Slug(fields={"title", "created"})
     * @ORM\Column(type="string", unique=true)
     */
    private $slug;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_preregistered", type="boolean")
     */
    private $isPreregistered = false;

    /**
     * @var Orders[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="party")
     */
    private $orders;

    /**
     * @var PartyCategory
     *
     * @ORM\ManyToOne(targetEntity="PartyCategory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @Assert\Length(
     *     min=10,
     *     minMessage="party.description.too_short",
     *     max=5000,
     *     maxMessage="party.description.too_long"
     * )
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var PreRegistration[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="PreRegistration")
     */
    private $preRegistration;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;

    /**
     * @var Accounts[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Accounts")
     */
    private $rsvp;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $updatedBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = true;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }
}
