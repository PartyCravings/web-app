<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateRange
 *
 * @ORM\Table(name="date_range")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DateRangeRepository")
 */
class DateRange
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
     * @ORM\Column(name="time_start", type="string", length=255)
     */
    private $timeStart;

    /**
     * @var string
     *
     * @ORM\Column(name="time_end", type="string", length=255)
     */
    private $timeEnd;


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
     * Set timeStart
     *
     * @param string $timeStart
     *
     * @return DateRange
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    /**
     * Get timeStart
     *
     * @return string
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * Set timeEnd
     *
     * @param string $timeEnd
     *
     * @return DateRange
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

    /**
     * Get timeEnd
     *
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }
}

