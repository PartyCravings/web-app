<?php

namespace AppBundle\Utils;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Utils\Sorter;
use AppBundle\Entity\Location;
use AppBundle\Entity\Address;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;
use Ivory\GoogleMap\Overlay\Marker;
use Ivory\GoogleMap\Overlay\MarkerShape;
use Ivory\GoogleMap\Overlay\MarkerShapeType;
use Ivory\GoogleMap\Overlay\Symbol;
use Ivory\GoogleMap\Overlay\SymbolPath;

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

    public function generateLocationTree($location) :array
    {
        $locationTree = array();

        if (is_string($location)) {
            $location = $this->em->getRepository(Location::class)->findBySlug($location);
            while ($parent = $location->getParent()) {
                $locationTree[] = $parent;
            }
        }
        return $locationTree;
    }

    public function generateMap($services) :Map
    {
        $map = new Map();
        $map->setAutoZoom(true);
        foreach ($services as $service) {
            $marker = new Marker(
                new Coordinate(),
                Animation::BOUNCE,
                new Icon(),
                new Symbol(SymbolPath::CIRCLE),
                new MarkerShape(MarkerShapeType::CIRCLE, [1.1, 2.1, 1.4]),
                ['clickable' => true]
            );

            $marker->setOption('location', $service->getAddress() ?: $service->getVendor()->getAddress() ?: null);
            $map->getOverlayManager()->addMarker($marker);
        }
        $map->setStylesheetOptions(
                array(
                    'display' => 'block',
                    'width' => '100%',
                    'height' => '85vh'
                )
            );
        return $map;
    }
}
