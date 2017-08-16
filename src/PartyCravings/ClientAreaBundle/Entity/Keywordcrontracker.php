<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keywordcrontracker
 *
 * @ORM\Table(name="keywordcrontracker")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\KeywordcrontrackerRepository")
 */
class Keywordcrontracker
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
     * @ORM\Column(name="keyword_id", type="integer")
     */
    private $keywordId;

    /**
     * @var int
     *
     * @ORM\Column(name="searchengine_id", type="integer")
     */
    private $searchengineId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;


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
     * Set keywordId
     *
     * @param integer $keywordId
     *
     * @return Keywordcrontracker
     */
    public function setKeywordId($keywordId)
    {
        $this->keywordId = $keywordId;

        return $this;
    }

    /**
     * Get keywordId
     *
     * @return int
     */
    public function getKeywordId()
    {
        return $this->keywordId;
    }

    /**
     * Set searchengineId
     *
     * @param integer $searchengineId
     *
     * @return Keywordcrontracker
     */
    public function setSearchengineId($searchengineId)
    {
        $this->searchengineId = $searchengineId;

        return $this;
    }

    /**
     * Get searchengineId
     *
     * @return int
     */
    public function getSearchengineId()
    {
        return $this->searchengineId;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Keywordcrontracker
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }
}

