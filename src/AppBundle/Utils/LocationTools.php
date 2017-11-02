<?php

namespace AppBundle\Utils;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Utils\Sorter;
use AppBundle\Entity\Location;

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

    public function buildLocationTree(string $address) : ?Location
    {
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
                    ->findLocationByNameParent($location, $parent)
                ) {
                $parent = $place;
            } else {
                $places[$location] = (new Location())
                    ->setName($location);
                if ($parent) {
                    $places[$location]->setParent($parent);
                }
                $parent = $places[$location];
            }
        }
        $this->em->persist($places);
        $this->$em->flush();
        return $parent;
    }
}
