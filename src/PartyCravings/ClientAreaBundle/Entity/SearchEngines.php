<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchEngines
 *
 * @ORM\Table(name="search_engines")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\SearchEnginesRepository")
 */
class SearchEngines
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
     * @ORM\Column(name="domain", type="string", length=255)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="cookie_send", type="string", length=255)
     */
    private $cookieSend;

    /**
     * @var int
     *
     * @ORM\Column(name="no_of_results_page", type="integer")
     */
    private $noOfResultsPage;

    /**
     * @var bool
     *
     * @ORM\Column(name="start", type="boolean")
     */
    private $start;

    /**
     * @var int
     *
     * @ORM\Column(name="start_offset", type="integer")
     */
    private $startOffset;

    /**
     * @var int
     *
     * @ORM\Column(name="max_results", type="integer")
     */
    private $maxResults;

    /**
     * @var string
     *
     * @ORM\Column(name="regex", type="string", length=255)
     */
    private $regex;

    /**
     * @var string
     *
     * @ORM\Column(name="form_pattern", type="string", length=255)
     */
    private $formPattern;

    /**
     * @var string
     *
     * @ORM\Column(name="to_pattern", type="string", length=255)
     */
    private $toPattern;

    /**
     * @var int
     *
     * @ORM\Column(name="url_index", type="integer")
     */
    private $urlIndex;

    /**
     * @var int
     *
     * @ORM\Column(name="title_index", type="integer")
     */
    private $titleIndex;

    /**
     * @var int
     *
     * @ORM\Column(name="description_index", type="integer")
     */
    private $descriptionIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="encoding", type="string", length=255)
     */
    private $encoding;

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
     * Set domain
     *
     * @param string $domain
     *
     * @return SearchEngines
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return SearchEngines
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
     * Set cookieSend
     *
     * @param string $cookieSend
     *
     * @return SearchEngines
     */
    public function setCookieSend($cookieSend)
    {
        $this->cookieSend = $cookieSend;

        return $this;
    }

    /**
     * Get cookieSend
     *
     * @return string
     */
    public function getCookieSend()
    {
        return $this->cookieSend;
    }

    /**
     * Set noOfResultsPage
     *
     * @param integer $noOfResultsPage
     *
     * @return SearchEngines
     */
    public function setNoOfResultsPage($noOfResultsPage)
    {
        $this->noOfResultsPage = $noOfResultsPage;

        return $this;
    }

    /**
     * Get noOfResultsPage
     *
     * @return int
     */
    public function getNoOfResultsPage()
    {
        return $this->noOfResultsPage;
    }

    /**
     * Set start
     *
     * @param boolean $start
     *
     * @return SearchEngines
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return bool
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set startOffset
     *
     * @param integer $startOffset
     *
     * @return SearchEngines
     */
    public function setStartOffset($startOffset)
    {
        $this->startOffset = $startOffset;

        return $this;
    }

    /**
     * Get startOffset
     *
     * @return int
     */
    public function getStartOffset()
    {
        return $this->startOffset;
    }

    /**
     * Set maxResults
     *
     * @param integer $maxResults
     *
     * @return SearchEngines
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;

        return $this;
    }

    /**
     * Get maxResults
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * Set regex
     *
     * @param string $regex
     *
     * @return SearchEngines
     */
    public function setRegex($regex)
    {
        $this->regex = $regex;

        return $this;
    }

    /**
     * Get regex
     *
     * @return string
     */
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * Set formPattern
     *
     * @param string $formPattern
     *
     * @return SearchEngines
     */
    public function setFormPattern($formPattern)
    {
        $this->formPattern = $formPattern;

        return $this;
    }

    /**
     * Get formPattern
     *
     * @return string
     */
    public function getFormPattern()
    {
        return $this->formPattern;
    }

    /**
     * Set toPattern
     *
     * @param string $toPattern
     *
     * @return SearchEngines
     */
    public function setToPattern($toPattern)
    {
        $this->toPattern = $toPattern;

        return $this;
    }

    /**
     * Get toPattern
     *
     * @return string
     */
    public function getToPattern()
    {
        return $this->toPattern;
    }

    /**
     * Set urlIndex
     *
     * @param integer $urlIndex
     *
     * @return SearchEngines
     */
    public function setUrlIndex($urlIndex)
    {
        $this->urlIndex = $urlIndex;

        return $this;
    }

    /**
     * Get urlIndex
     *
     * @return int
     */
    public function getUrlIndex()
    {
        return $this->urlIndex;
    }

    /**
     * Set titleIndex
     *
     * @param integer $titleIndex
     *
     * @return SearchEngines
     */
    public function setTitleIndex($titleIndex)
    {
        $this->titleIndex = $titleIndex;

        return $this;
    }

    /**
     * Get titleIndex
     *
     * @return int
     */
    public function getTitleIndex()
    {
        return $this->titleIndex;
    }

    /**
     * Set descriptionIndex
     *
     * @param integer $descriptionIndex
     *
     * @return SearchEngines
     */
    public function setDescriptionIndex($descriptionIndex)
    {
        $this->descriptionIndex = $descriptionIndex;

        return $this;
    }

    /**
     * Get descriptionIndex
     *
     * @return int
     */
    public function getDescriptionIndex()
    {
        return $this->descriptionIndex;
    }

    /**
     * Set encoding
     *
     * @param string $encoding
     *
     * @return SearchEngines
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Get encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return SearchEngines
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

