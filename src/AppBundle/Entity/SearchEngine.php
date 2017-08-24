<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchEngine
 *
 * @ORM\Table(name="search_engine")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SearchEngineRepository")
 */
class SearchEngine
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
     * @ORM\Column(name="server", type="string", length=255)
     */
    private $server;

    /**
     * @var string
     *
     * @ORM\Column(name="getvar", type="string", length=255)
     */
    private $getvar;


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
     * Set server
     *
     * @param string $server
     *
     * @return SearchEngine
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set getvar
     *
     * @param string $getvar
     *
     * @return SearchEngine
     */
    public function setGetvar($getvar)
    {
        $this->getvar = $getvar;

        return $this;
    }

    /**
     * Get getvar
     *
     * @return string
     */
    public function getGetvar()
    {
        return $this->getvar;
    }
}
