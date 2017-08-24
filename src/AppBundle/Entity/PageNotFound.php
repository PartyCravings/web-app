<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageNotFound
 *
 * @ORM\Table(name="page_not_found")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageNotFoundRepository")
 */
class PageNotFound
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
     * @ORM\Column(name="id_shop", type="string", length=255)
     */
    private $idShop;

    /**
     * @var string
     *
     * @ORM\Column(name="id_shop_group", type="string", length=255)
     */
    private $idShopGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="request_uri", type="string", length=255)
     */
    private $requestUri;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer", type="string", length=255)
     */
    private $httpReferer;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;


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
     * Set idShop
     *
     * @param string $idShop
     *
     * @return PageNotFound
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return string
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idShopGroup
     *
     * @param string $idShopGroup
     *
     * @return PageNotFound
     */
    public function setIdShopGroup($idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    /**
     * Get idShopGroup
     *
     * @return string
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * Set requestUri
     *
     * @param string $requestUri
     *
     * @return PageNotFound
     */
    public function setRequestUri($requestUri)
    {
        $this->requestUri = $requestUri;

        return $this;
    }

    /**
     * Get requestUri
     *
     * @return string
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * Set httpReferer
     *
     * @param string $httpReferer
     *
     * @return PageNotFound
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    /**
     * Get httpReferer
     *
     * @return string
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return PageNotFound
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }
}
