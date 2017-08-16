<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageViewed
 *
 * @ORM\Table(name="page_viewed")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageViewedRepository")
 */
class PageViewed
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
     * @ORM\Column(name="id_vendor_group", type="string", length=255)
     */
    private $idVendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor", type="string", length=255)
     */
    private $idVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_date_range", type="string", length=255)
     */
    private $idDateRange;

    /**
     * @var string
     *
     * @ORM\Column(name="counter", type="string", length=255)
     */
    private $counter;


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
     * Set idVendorGroup
     *
     * @param string $idVendorGroup
     *
     * @return PageViewed
     */
    public function setIdVendorGroup($idVendorGroup)
    {
        $this->idVendorGroup = $idVendorGroup;

        return $this;
    }

    /**
     * Get idVendorGroup
     *
     * @return string
     */
    public function getIdVendorGroup()
    {
        return $this->idVendorGroup;
    }

    /**
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return PageViewed
     */
    public function setIdVendor($idVendor)
    {
        $this->idVendor = $idVendor;

        return $this;
    }

    /**
     * Get idVendor
     *
     * @return string
     */
    public function getIdVendor()
    {
        return $this->idVendor;
    }

    /**
     * Set idDateRange
     *
     * @param string $idDateRange
     *
     * @return PageViewed
     */
    public function setIdDateRange($idDateRange)
    {
        $this->idDateRange = $idDateRange;

        return $this;
    }

    /**
     * Get idDateRange
     *
     * @return string
     */
    public function getIdDateRange()
    {
        return $this->idDateRange;
    }

    /**
     * Set counter
     *
     * @param string $counter
     *
     * @return PageViewed
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return string
     */
    public function getCounter()
    {
        return $this->counter;
    }
}

