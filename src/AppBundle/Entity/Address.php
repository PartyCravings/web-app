<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string")
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_number", type="string")
     */
    private $vatNumber;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
    * @var Country
    *
    * @ORM\ManyToOne(targetEntity="Country")
    */
    private $country;

    /**
     * @var Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     */
    private $location;
}
