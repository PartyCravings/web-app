<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advice
 *
 * @ORM\Table(name="advice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdviceRepository")
 */
class Advice
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
     * @ORM\Column(name="id_ps_advice", type="string", length=255)
     */
    private $idPsAdvice;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tab", type="string", length=255)
     */
    private $idTab;

    /**
     * @var string
     *
     * @ORM\Column(name="validated", type="string", length=255)
     */
    private $validated;

    /**
     * @var string
     *
     * @ORM\Column(name="ids_tab", type="string", length=255)
     */
    private $idsTab;

    /**
     * @var string
     *
     * @ORM\Column(name="hide", type="string", length=255)
     */
    private $hide;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="selector", type="string", length=255)
     */
    private $selector;

    /**
     * @var string
     *
     * @ORM\Column(name="start_day", type="string", length=255)
     */
    private $startDay;

    /**
     * @var string
     *
     * @ORM\Column(name="stop_day", type="string", length=255)
     */
    private $stopDay;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="user_group", type="string", length=255)
     */
    private $userGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;


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
     * Set idPsAdvice
     *
     * @param string $idPsAdvice
     *
     * @return Advice
     */
    public function setIdPsAdvice($idPsAdvice)
    {
        $this->idPsAdvice = $idPsAdvice;

        return $this;
    }

    /**
     * Get idPsAdvice
     *
     * @return string
     */
    public function getIdPsAdvice()
    {
        return $this->idPsAdvice;
    }

    /**
     * Set idTab
     *
     * @param string $idTab
     *
     * @return Advice
     */
    public function setIdTab($idTab)
    {
        $this->idTab = $idTab;

        return $this;
    }

    /**
     * Get idTab
     *
     * @return string
     */
    public function getIdTab()
    {
        return $this->idTab;
    }

    /**
     * Set validated
     *
     * @param string $validated
     *
     * @return Advice
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return string
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Set idsTab
     *
     * @param string $idsTab
     *
     * @return Advice
     */
    public function setIdsTab($idsTab)
    {
        $this->idsTab = $idsTab;

        return $this;
    }

    /**
     * Get idsTab
     *
     * @return string
     */
    public function getIdsTab()
    {
        return $this->idsTab;
    }

    /**
     * Set hide
     *
     * @param string $hide
     *
     * @return Advice
     */
    public function setHide($hide)
    {
        $this->hide = $hide;

        return $this;
    }

    /**
     * Get hide
     *
     * @return string
     */
    public function getHide()
    {
        return $this->hide;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Advice
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set selector
     *
     * @param string $selector
     *
     * @return Advice
     */
    public function setSelector($selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * Get selector
     *
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Set startDay
     *
     * @param string $startDay
     *
     * @return Advice
     */
    public function setStartDay($startDay)
    {
        $this->startDay = $startDay;

        return $this;
    }

    /**
     * Get startDay
     *
     * @return string
     */
    public function getStartDay()
    {
        return $this->startDay;
    }

    /**
     * Set stopDay
     *
     * @param string $stopDay
     *
     * @return Advice
     */
    public function setStopDay($stopDay)
    {
        $this->stopDay = $stopDay;

        return $this;
    }

    /**
     * Get stopDay
     *
     * @return string
     */
    public function getStopDay()
    {
        return $this->stopDay;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Advice
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set userGroup
     *
     * @param string $userGroup
     *
     * @return Advice
     */
    public function setUserGroup($userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return string
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Advice
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

