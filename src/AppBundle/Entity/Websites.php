<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Websites
 *
 * @ORM\Table(name="websites")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WebsitesRepository")
 */
class Websites
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_name", type="string", length=255)
     */
    private $ownerName;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_email", type="string", length=255)
     */
    private $ownerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="title2", type="string", length=255)
     */
    private $title2;

    /**
     * @var string
     *
     * @ORM\Column(name="title3", type="string", length=255)
     */
    private $title3;

    /**
     * @var string
     *
     * @ORM\Column(name="title4", type="string", length=255)
     */
    private $title4;

    /**
     * @var string
     *
     * @ORM\Column(name="title5", type="string", length=255)
     */
    private $title5;

    /**
     * @var string
     *
     * @ORM\Column(name="description2", type="string", length=255)
     */
    private $description2;

    /**
     * @var string
     *
     * @ORM\Column(name="description3", type="string", length=255)
     */
    private $description3;

    /**
     * @var string
     *
     * @ORM\Column(name="description4", type="string", length=255)
     */
    private $description4;

    /**
     * @var string
     *
     * @ORM\Column(name="description5", type="string", length=255)
     */
    private $description5;

    /**
     * @var string
     *
     * @ORM\Column(name="reciprocal_url", type="string", length=255)
     */
    private $reciprocalUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set name
     *
     * @param string $name
     *
     * @return Websites
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
     * Set url
     *
     * @param string $url
     *
     * @return Websites
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set ownerName
     *
     * @param string $ownerName
     *
     * @return Websites
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Get ownerName
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Set ownerEmail
     *
     * @param string $ownerEmail
     *
     * @return Websites
     */
    public function setOwnerEmail($ownerEmail)
    {
        $this->ownerEmail = $ownerEmail;

        return $this;
    }

    /**
     * Get ownerEmail
     *
     * @return string
     */
    public function getOwnerEmail()
    {
        return $this->ownerEmail;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Websites
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Websites
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
     * Set description
     *
     * @param string $description
     *
     * @return Websites
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Websites
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set title2
     *
     * @param string $title2
     *
     * @return Websites
     */
    public function setTitle2($title2)
    {
        $this->title2 = $title2;

        return $this;
    }

    /**
     * Get title2
     *
     * @return string
     */
    public function getTitle2()
    {
        return $this->title2;
    }

    /**
     * Set title3
     *
     * @param string $title3
     *
     * @return Websites
     */
    public function setTitle3($title3)
    {
        $this->title3 = $title3;

        return $this;
    }

    /**
     * Get title3
     *
     * @return string
     */
    public function getTitle3()
    {
        return $this->title3;
    }

    /**
     * Set title4
     *
     * @param string $title4
     *
     * @return Websites
     */
    public function setTitle4($title4)
    {
        $this->title4 = $title4;

        return $this;
    }

    /**
     * Get title4
     *
     * @return string
     */
    public function getTitle4()
    {
        return $this->title4;
    }

    /**
     * Set title5
     *
     * @param string $title5
     *
     * @return Websites
     */
    public function setTitle5($title5)
    {
        $this->title5 = $title5;

        return $this;
    }

    /**
     * Get title5
     *
     * @return string
     */
    public function getTitle5()
    {
        return $this->title5;
    }

    /**
     * Set description2
     *
     * @param string $description2
     *
     * @return Websites
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;

        return $this;
    }

    /**
     * Get description2
     *
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Set description3
     *
     * @param string $description3
     *
     * @return Websites
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;

        return $this;
    }

    /**
     * Get description3
     *
     * @return string
     */
    public function getDescription3()
    {
        return $this->description3;
    }

    /**
     * Set description4
     *
     * @param string $description4
     *
     * @return Websites
     */
    public function setDescription4($description4)
    {
        $this->description4 = $description4;

        return $this;
    }

    /**
     * Get description4
     *
     * @return string
     */
    public function getDescription4()
    {
        return $this->description4;
    }

    /**
     * Set description5
     *
     * @param string $description5
     *
     * @return Websites
     */
    public function setDescription5($description5)
    {
        $this->description5 = $description5;

        return $this;
    }

    /**
     * Get description5
     *
     * @return string
     */
    public function getDescription5()
    {
        return $this->description5;
    }

    /**
     * Set reciprocalUrl
     *
     * @param string $reciprocalUrl
     *
     * @return Websites
     */
    public function setReciprocalUrl($reciprocalUrl)
    {
        $this->reciprocalUrl = $reciprocalUrl;

        return $this;
    }

    /**
     * Get reciprocalUrl
     *
     * @return string
     */
    public function getReciprocalUrl()
    {
        return $this->reciprocalUrl;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Websites
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
     * Set status
     *
     * @param integer $status
     *
     * @return Websites
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}
