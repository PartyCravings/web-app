<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UrlAliases
 *
 * @ORM\Table(name="url_aliases")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\UrlAliasesRepository")
 */
class UrlAliases
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
     * @ORM\Column(name="url_alias_id", type="integer")
     */
    private $urlAliasId;

    /**
     * @var string
     *
     * @ORM\Column(name="query", type="string", length=255)
     */
    private $query;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255)
     */
    private $keyword;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;


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
     * Set urlAliasId
     *
     * @param integer $urlAliasId
     *
     * @return UrlAliases
     */
    public function setUrlAliasId($urlAliasId)
    {
        $this->urlAliasId = $urlAliasId;

        return $this;
    }

    /**
     * Get urlAliasId
     *
     * @return int
     */
    public function getUrlAliasId()
    {
        return $this->urlAliasId;
    }

    /**
     * Set query
     *
     * @param string $query
     *
     * @return UrlAliases
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return UrlAliases
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return UrlAliases
     */
    public function setLangId($langId)
    {
        $this->langId = $langId;

        return $this;
    }

    /**
     * Get langId
     *
     * @return int
     */
    public function getLangId()
    {
        return $this->langId;
    }
}

