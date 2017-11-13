<?php

namespace AppBundle\Controller\Location;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use Pagerfanta\Pagerfanta;
use AppBundle\Entity\Location;
use AppBundle\Entity\Country;

/**
 * Class LocationController
 * @package AppBundle\Controller
 *
 * @Route("/location")
 * @ParamConverter(
                    "_country",
                    class="AppBundle:Country",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "findByName"
                    }
                )
*/
class LocationController extends AbstractController
{
    /*
     * @Route("", name="site_location_index")
     * @Template(":location:index.html.twig")
     * @Cache(smaxage=0)
     */
    public function indexAction(Country $_country, Breadcrumbs $breadcrumbs, EntityManagerInterface $em) :Pagerfanta
    {
        // Pass "_demo" route name without any parameters
        $breadcrumbs->addRouteItem("Location", "site_location_index");
        $breadcrumbs->prependRouteItem("Home", "homepage");

        return $em->getRepository(Location::class)
                ->findAllByCountry(
                    $_country,
                    $request->get('page', 1)
                );
    }

    /**
     * @Route("/{slug}", name="site_location_listing")
     * @Template(":location:sub-index.html.twig")
     * @ParamConverter(
            "parent",
            class="AppBundle:Location",
            options=
            {
                "id" = "slug",
                "repository_method" = "findBySlug"
            }
        )
     * @Cache(smaxage=0)
     */
    public function childAction(Request $request, Location $parent, Breadcrumbs $breadcrumbs, EntityManagerInterface $em) :array
    {
        $node = $parent;
        while ($node) {
            $breadcrumbs->prependRouteItem($node->getTitle(), 'site_location_listing', ['slug'=>$node->getSlug()]);
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem("Home", "homepage");

        $locations = $em->getRepository(Location::class)
                    ->findAllByParent(
                        $parent,
                        $request->get('page', 1)
                    );
        return array(
            'locations'=> $locations,
            'parent' => $parent
        );
    }
}
