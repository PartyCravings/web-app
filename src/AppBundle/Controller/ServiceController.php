<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use AppBundle\Entity\Service;

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
                 name="service_show"
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
    public function showAction(Service $service, Breadcrumbs $breadcrumbs, EntityManagerInterface $em) :array
    {
        $address = $service->getAddress() ?: $service->getVendor()->getAddress();
        $breadcrumbs->prependRouteItem(
                        $service->getName(),
                        'service_show',
                            array(
                                'slug'=>$service->getSlug()
                    )
                );
        $breadcrumbs->prependRouteItem(
                        $address->getLocation(),
                        'site_location_listing',
                            array(
                                'slug'=>$location->getSlug()
                            )
                        );
        $node = $service->getCategory();
        while ($node) {
            $breadcrumbs->prependRouteItem(
                        $node->getTitle(),
                        'service_category',
                array('slug'=>$node->getSlug()
                    )
                );
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem('Services', 'service_index');
        $breadcrumbs->prependRouteItem('Home', 'homepage');

        $recentParties = $em->getRepository('AppBundle:Party')->findPartiesByService($service);

        return array('service' => $service, 'recentParties' => $recentParties);
    }
}
