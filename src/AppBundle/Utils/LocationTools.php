<?php

namespace AppBundle\Utils;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Utils\Sorter;
use AppBundle\Entity\Location;
use AppBundle\Entity\Address;

class LocationTools
{
    /**
     * @var EntityManagerInterface
     */
    private $em;


    /*
     * @param EntityManagerInterface $em
     *
     **/
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function buildLocationTree(Address $address) : ?Location
    {
        $address = $address->getAddress();
        
        /**
         * @var $sanitizedString contains the sanitized sting from the sorter
         * @var $locationTree contains the tree built in reverse order
         * with most significant location first
         */
        $sanitizedString = Sorter::sanitizeString($address);
        $locationTree = array_reverse(Sorter::buildTree($sanitizedString));

        $parent = false;
        foreach ($locationTree as $location) {
            if (
                $place = $this->em
                    ->getRepository(Location::class)
                    ->findLocationByParent($location, $parent)
                ) {
                $parent = $place;
            } else {
                $place = (new Location())
                    ->setName($location);
                (!$parent) ?: $place->setParent($parent);
                $parent = $place;
                $this->em->persist($parent);
            }
        }
        return $parent;
    }
}
