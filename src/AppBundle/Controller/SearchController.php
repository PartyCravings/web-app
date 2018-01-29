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
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;

/**
 * @Route("search")
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
class SearchController extends AbstractController
{
    /**
     * @Route("", name="search")
     * @Cache(smaxage=0)
     * @Template(":search:search.html.twig")
     */
    public function searchAction(Request $request, EntityManagerInterface $em, Country $country, Breadcrumbs $breadcrumbs)
    {
        // Pass "_demo" route name without any parameters
        $breadcrumbs->addRouteItem('Search', 'search');
        $breadcrumbs->prependRouteItem('Home', 'homepage');

        $results = [];
        $services = $em->getRepository('AppBundle:Service')
            ->findBySearchQuery(
                    $request->get('query', ''),
                    $request->get('category', !null),
                    $country,
                    $request->get('page', 1)
        );

        foreach ($services as $service) {
            $results[] = [
                'name' => htmlspecialchars($service->getName()),
                'date' => $service->getCreated()->format('M d, Y'),
                'vendor' => htmlspecialchars($service->getVendor()->getName()),
                'rating' => $service->getAverageRating(),
                'summary' => htmlspecialchars($service->getserviceDescriptions()->getDescription()),
                'url' => $this->generateUrl('site_services_show', ['slug' => $service->getSlug()]),
                    ];
        }

        return $request->isXmlHttpRequest() ? $this->json($results) : [
            'services' => $services,
            ];
    }

    /**
     * @Route("/opensearch.xml", name="search_description",	defaults={"_format":"xml"})
     * @Cache(smaxage=2592000)
     * @Template(":search:opensearch.xml.twig")
     */
    public function describeAction(): void
    {
    }
}
