<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Searchresultdetails
 *
 * @ORM\Table(name="searchresultdetails")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\SearchresultdetailsRepository")
 */
class Searchresultdetails
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
     * @ORM\Column(name="searchresult_id", type="integer")
     */
    private $searchresultId;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set searchresultId
     *
     * @param integer $searchresultId
     *
     * @return Searchresultdetails
     */
    public function setSearchresultId($searchresultId)
    {
        $this->searchresultId = $searchresultId;

        return $this;
    }

    /**
     * Get searchresultId
     *
     * @return int
     */
    public function getSearchresultId()
    {
        return $this->searchresultId;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Searchresultdetails
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
     * Set title
     *
     * @param string $title
     *
     * @return Searchresultdetails
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
     * @return Searchresultdetails
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
}

