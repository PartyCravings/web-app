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
     * @Assert\NotBlank(message="party.title.blank")
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
     * @var Account[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Account")
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
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Account")
     */
    private $updatedBy;

    /**
     * @var EmbeddedFile[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Files", cascade={"persist"})
     */
    private $uploadedFiles;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
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
     * Set title
     *
     * @param string $title
     *
     * @return Party
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Party
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set isPreregistered
     *
     * @param boolean $isPreregistered
     *
     * @return Party
     */
    public function setIsPreregistered($isPreregistered)
    {
        $this->isPreregistered = $isPreregistered;

        return $this;
    }

    /**
     * Get isPreregistered
     *
     * @return boolean
     */
    public function getIsPreregistered()
    {
        return $this->isPreregistered;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Party
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Party
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Party
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Party
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Add order
     *
     * @param \AppBundle\Entity\Orders $order
     *
     * @return Party
     */
    public function addOrder(\AppBundle\Entity\Orders $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \AppBundle\Entity\Orders $order
     */
    public function removeOrder(\AppBundle\Entity\Orders $order)
    {
        $this->orders->removeElement($order);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\PartyCategory $category
     *
     * @return Party
     */
    public function setCategory(\AppBundle\Entity\PartyCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\PartyCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add preRegistration
     *
     * @param \AppBundle\Entity\PreRegistration $preRegistration
     *
     * @return Party
     */
    public function addPreRegistration(\AppBundle\Entity\PreRegistration $preRegistration)
    {
        $this->preRegistration[] = $preRegistration;

        return $this;
    }

    /**
     * Remove preRegistration
     *
     * @param \AppBundle\Entity\PreRegistration $preRegistration
     */
    public function removePreRegistration(\AppBundle\Entity\PreRegistration $preRegistration)
    {
        $this->preRegistration->removeElement($preRegistration);
    }

    /**
     * Get preRegistration
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPreRegistration()
    {
        return $this->preRegistration;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Party
     */
    public function setAddress(\AppBundle\Entity\Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add rsvp
     *
     * @param \AppBundle\Entity\Account $rsvp
     *
     * @return Party
     */
    public function addRsvp(\AppBundle\Entity\Account $rsvp)
    {
        $this->rsvp[] = $rsvp;

        return $this;
    }

    /**
     * Remove rsvp
     *
     * @param \AppBundle\Entity\Account $rsvp
     */
    public function removeRsvp(\AppBundle\Entity\Account $rsvp)
    {
        $this->rsvp->removeElement($rsvp);
    }

    /**
     * Get rsvp
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRsvp()
    {
        return $this->rsvp;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\Account $createdBy
     *
     * @return Party
     */
    public function setCreatedBy(\AppBundle\Entity\Account $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\Account
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\Account $updatedBy
     *
     * @return Party
     */
    public function setUpdatedBy(\AppBundle\Entity\Account $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \AppBundle\Entity\Account
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Party
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add uploadedFile
     *
     * @param \AppBundle\Entity\Files $uploadedFile
     *
     * @return Party
     */
    public function addUploadedFile(\AppBundle\Entity\Files $uploadedFile)
    {
        $this->uploadedFiles[] = $uploadedFile;

        return $this;
    }

    /**
     * Remove uploadedFile
     *
     * @param \AppBundle\Entity\Files $uploadedFile
     */
    public function removeUploadedFile(\AppBundle\Entity\Files $uploadedFile)
    {
        $this->uploadedFiles->removeElement($uploadedFile);
    }

    /**
     * Get uploadedFiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }
}
