<?php

namespace AppBundle\Controller\Services;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use AppBundle\Utils\LocationTools;
use AppBundle\Utils\Sorter;
use AppBundle\Entity\Service;
use AppBundle\Entity\Country;
use AppBundle\Entity\Category;
use AppBundle\Entity\Location;

/**
 * Class ServiceController
 * @package AppBundle\Controller
 *
 * @Route("services")
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
class ServiceController extends AbstractController
{

    /**
     * @Route(
                 "/{slug}",
                 name="site_services_show"
             )
     * @ParamConverter(
                         "service",
                         class="AppBundle:Service",
                         options=
                         {
                             "id" ="slug",
                             "repository_method" = "findBySlug"
                         }
                     )
     * @Template(
                     ":services:show.html.twig",
                     vars={"service"}
                 )
     * @Cache(
                smaxage=0,
                lastmodified="service.updated",
                etag="'Service' ~ service.id ~ service.serviceDescriptions.updated.format('Y-m-d')"
            )
     */
    public function showAction(Service $service, Breadcrumbs $breadcrumbs) :void
    {
        $location = $service->getLocation();
        $breadcrumbs->prependRouteItem($service->getName(), 'site_services_show', ['slug'=>$service->getSlug()]);
        $breadcrumbs->prependRouteItem($location->getName(), 'site_location_listing', ['slug'=>$location->getSlug()]);
        $node = $service->getCategory();
        while ($node) {
            $breadcrumbs->prependRouteItem($node->getTitle(), 'site_services_categories', ['slug'=>$node->getSlug()]);
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem("Services", "site_services_index");
        $breadcrumbs->prependRouteItem("Home", "homepage");
    }
}
