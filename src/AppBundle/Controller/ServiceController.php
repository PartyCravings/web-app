<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Country;
use AppBundle\Entity\Service;
use AppBundle\Utils\LocationTools;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;

/**
 * @Route("service")
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
class ServiceController extends AbstractController
{
    /**
     * @Route("/{slug}", name="service_show")
     * @ParamConverter("service", class="AppBundle:Service", options={"id" ="slug","repository_method" = "findBySlug"})
     * @Template( ":service:show.html.twig", vars={"service"})
     * @Cache(smaxage=0, lastmodified="service.getServiceDescriptions().getUpdated()", etag="'Service' ~ service.getId() ~ service.getServiceDescriptions().getUpdated().format('Y-m-d')")
     */
    public function showAction(Country $_country, Service $service, Breadcrumbs $breadcrumbs, LocationTools $locationTools, EntityManagerInterface $em): array
    {
        $address = $service->getAddress() ?: $service->getVendor()->getAddress();
        $breadcrumbs->prependRouteItem($service->getName(), 'service_show', ['slug' => $service->getSlug()]);
        $breadcrumbs->prependRouteItem($address->getLocation(), 'site_location_listing', ['slug' => $address->getLocation()->getSlug()]);
        $node = $service->getCategory();
        while ($node) {
            $breadcrumbs->prependRouteItem($node->getTitle(), 'category_show', ['slug' => $node->getSlug()]);
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem('Category', 'category_index');
        $breadcrumbs->prependRouteItem('Home', 'homepage');

        $recentParties = $em->getRepository('AppBundle:Party')->findPartiesByService($service);
        $similarServices = $em->getRepository(Service::class)->findBySearchQuery($service->getName(), $service->getCategory());

        return ['service' => $service, 'recentParties' => $recentParties, 'map' => $locationTools->generateMap(
            [$service]
        ), 'likeServices' => $similarServices];
    }
}
