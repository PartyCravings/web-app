<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referrer
 *
 * @ORM\Table(name="referrer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReferrerRepository")
 */
class Referrer
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
     * @ORM\Column(name="passwd", type="string", length=255)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer_regexp", type="string", length=255)
     */
    private $httpRefererRegexp;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer_like", type="string", length=255)
     */
    private $httpRefererLike;

    /**
     * @var string
     *
     * @ORM\Column(name="request_uri_regexp", type="string", length=255)
     */
    private $requestUriRegexp;

    /**
     * @var string
     *
     * @ORM\Column(name="request_uri_like", type="string", length=255)
     */
    private $requestUriLike;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer_regexp_not", type="string", length=255)
     */
    private $httpRefererRegexpNot;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer_like_not", type="string", length=255)
     */
    private $httpRefererLikeNot;

    /**
     * @var string
     *
     * @ORM\Column(name="request_uri_regexp_not", type="string", length=255)
     */
    private $requestUriRegexpNot;

    /**
     * @var string
     *
     * @ORM\Column(name="request_uri_like_not", type="string", length=255)
     */
    private $requestUriLikeNot;

    /**
     * @var string
     *
     * @ORM\Column(name="base_fee", type="string", length=255)
     */
    private $baseFee;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_fee", type="string", length=255)
     */
    private $percentFee;

    /**
     * @var string
     *
     * @ORM\Column(name="click_fee", type="string", length=255)
     */
    private $clickFee;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="cache", type="string", length=255)
     */
    private $cache;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=255)
     */
    private $service;


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
     * @return Referrer
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
     * Set passwd
     *
     * @param string $passwd
     *
     * @return Referrer
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set httpRefererRegexp
     *
     * @param string $httpRefererRegexp
     *
     * @return Referrer
     */
    public function setHttpRefererRegexp($httpRefererRegexp)
    {
        $this->httpRefererRegexp = $httpRefererRegexp;

        return $this;
    }

    /**
     * Get httpRefererRegexp
     *
     * @return string
     */
    public function getHttpRefererRegexp()
    {
        return $this->httpRefererRegexp;
    }

    /**
     * Set httpRefererLike
     *
     * @param string $httpRefererLike
     *
     * @return Referrer
     */
    public function setHttpRefererLike($httpRefererLike)
    {
        $this->httpRefererLike = $httpRefererLike;

        return $this;
    }

    /**
     * Get httpRefererLike
     *
     * @return string
     */
    public function getHttpRefererLike()
    {
        return $this->httpRefererLike;
    }

    /**
     * Set requestUriRegexp
     *
     * @param string $requestUriRegexp
     *
     * @return Referrer
     */
    public function setRequestUriRegexp($requestUriRegexp)
    {
        $this->requestUriRegexp = $requestUriRegexp;

        return $this;
    }

    /**
     * Get requestUriRegexp
     *
     * @return string
     */
    public function getRequestUriRegexp()
    {
        return $this->requestUriRegexp;
    }

    /**
     * Set requestUriLike
     *
     * @param string $requestUriLike
     *
     * @return Referrer
     */
    public function setRequestUriLike($requestUriLike)
    {
        $this->requestUriLike = $requestUriLike;

        return $this;
    }

    /**
     * Get requestUriLike
     *
     * @return string
     */
    public function getRequestUriLike()
    {
        return $this->requestUriLike;
    }

    /**
     * Set httpRefererRegexpNot
     *
     * @param string $httpRefererRegexpNot
     *
     * @return Referrer
     */
    public function setHttpRefererRegexpNot($httpRefererRegexpNot)
    {
        $this->httpRefererRegexpNot = $httpRefererRegexpNot;

        return $this;
    }

    /**
     * Get httpRefererRegexpNot
     *
     * @return string
     */
    public function getHttpRefererRegexpNot()
    {
        return $this->httpRefererRegexpNot;
    }

    /**
     * Set httpRefererLikeNot
     *
     * @param string $httpRefererLikeNot
     *
     * @return Referrer
     */
    public function setHttpRefererLikeNot($httpRefererLikeNot)
    {
        $this->httpRefererLikeNot = $httpRefererLikeNot;

        return $this;
    }

    /**
     * Get httpRefererLikeNot
     *
     * @return string
     */
    public function getHttpRefererLikeNot()
    {
        return $this->httpRefererLikeNot;
    }

    /**
     * Set requestUriRegexpNot
     *
     * @param string $requestUriRegexpNot
     *
     * @return Referrer
     */
    public function setRequestUriRegexpNot($requestUriRegexpNot)
    {
        $this->requestUriRegexpNot = $requestUriRegexpNot;

        return $this;
    }

    /**
     * Get requestUriRegexpNot
     *
     * @return string
     */
    public function getRequestUriRegexpNot()
    {
        return $this->requestUriRegexpNot;
    }

    /**
     * Set requestUriLikeNot
     *
     * @param string $requestUriLikeNot
     *
     * @return Referrer
     */
    public function setRequestUriLikeNot($requestUriLikeNot)
    {
        $this->requestUriLikeNot = $requestUriLikeNot;

        return $this;
    }

    /**
     * Get requestUriLikeNot
     *
     * @return string
     */
    public function getRequestUriLikeNot()
    {
        return $this->requestUriLikeNot;
    }

    /**
     * Set baseFee
     *
     * @param string $baseFee
     *
     * @return Referrer
     */
    public function setBaseFee($baseFee)
    {
        $this->baseFee = $baseFee;

        return $this;
    }

    /**
     * Get baseFee
     *
     * @return string
     */
    public function getBaseFee()
    {
        return $this->baseFee;
    }

    /**
     * Set percentFee
     *
     * @param string $percentFee
     *
     * @return Referrer
     */
    public function setPercentFee($percentFee)
    {
        $this->percentFee = $percentFee;

        return $this;
    }

    /**
     * Get percentFee
     *
     * @return string
     */
    public function getPercentFee()
    {
        return $this->percentFee;
    }

    /**
     * Set clickFee
     *
     * @param string $clickFee
     *
     * @return Referrer
     */
    public function setClickFee($clickFee)
    {
        $this->clickFee = $clickFee;

        return $this;
    }

    /**
     * Get clickFee
     *
     * @return string
     */
    public function getClickFee()
    {
        return $this->clickFee;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Referrer
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

    /**
     * Set cache
     *
     * @param string $cache
     *
     * @return Referrer
     */
    public function setCache($cache)
    {
        $this->cache = $cache;

        return $this;
    }

    /**
     * Get cache
     *
     * @return string
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return Referrer
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }
}

