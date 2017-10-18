<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Risk
 *
 * @ORM\Table(name="risk")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RiskRepository")
 */
class Risk
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
     * @ORM\Column(name="percent", type="string", length=255)
     */
    private $percent;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255)
     */
    private $lang;


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
     * Set percent
     *
     * @param string $percent
     *
     * @return Risk
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Risk
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Risk
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }
}
