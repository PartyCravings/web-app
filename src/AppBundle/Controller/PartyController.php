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

use AppBundle\Entity\Category;
use AppBundle\Entity\Country;
use AppBundle\Entity\Service;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;

/**
 * @Route("party")
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
class PartyController extends AbstractController
{
    /**
     * @Route("", name="party_index")
     * @Template(":services:index.html.twig")
     * @Cache(smaxage=0)
     */
    public function indexAction(Country $_country, Request $request, EntityManagerInterface $em, Breadcrumbs $breadcrumbs): array
    {
        $page = $request->get('page', 1);

        $categories = $em->getRepository(Category::class)
                ->findAllByCountry(
                    $_country,
                    $page
                );
        $services = $em->getRepository(Service::class)
                ->findAllByCountry(
                    $_country,
                    $page
                );
        // Pass route name without any parameters
        $breadcrumbs->addRouteItem('Services', 'site_services_index');
        $breadcrumbs->prependRouteItem('Home', 'homepage');

        return  ['services' => $services, 'categories' => $categories];
    }

    /**
     * @Route(
                 "/{slug}",
                 name="party_show"
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
    public function showAction(Service $service, Breadcrumbs $breadcrumbs): void
    {
        $location = $service->getLocation();
        $breadcrumbs->prependRouteItem($service->getName(), 'service_show', ['slug' => $service->getSlug()]);
        $breadcrumbs->prependRouteItem($location->getName(), 'site_location_listing', ['slug' => $location->getSlug()]);
        $node = $service->getCategory();
        while ($node) {
            $breadcrumbs->prependRouteItem($node->getTitle(), 'category_show', ['slug' => $node->getSlug()]);
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem('Services', 'category_index');
        $breadcrumbs->prependRouteItem('Home', 'homepage');
    }
}
