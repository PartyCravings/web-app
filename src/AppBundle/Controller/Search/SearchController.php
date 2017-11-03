<?php

namespace AppBundle\Controller\Search;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use AppBundle\Entity\Country;

/**
 * Class SearchController
 * @package AppBundle\Controller
 *
 * @Route("search")
 * @ParamConverter(
                    "country",
                    class="AppBundle:Country",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "findByName"
                    }
                )
 *
 */
class SearchController extends AbstractController
{
    /**
     * @Route("", name="site_wide_search")
     * @Cache(smaxage=0)
     * @Template(":search:search.html.twig")
     */
    public function searchAction(Request $request, EntityManagerInterface $em, Country $country, Breadcrumbs $breadcrumbs)
    {
        // Pass "_demo" route name without any parameters
        $breadcrumbs->addRouteItem("Search", "site_wide_search");
        $breadcrumbs->prependRouteItem("Home", "homepage");

        $results = array();
        $services = $em->getRepository('AppBundle:Service')
            ->findBySearchQuery(
                    $request->get('query', ''),
                    $request->get('category', !null),
                    $country,
                    $request->get('page', 1)
        );
        
        foreach ($services as $service) {
            $results[] = array(
                'name' => htmlspecialchars($service->getName()),
                'date' => $service->getCreated()->format('M d, Y'),
                'vendor' => htmlspecialchars($service->getVendor()->getName()),
                'summary' => htmlspecialchars($service->getserviceDescriptions()->getDescription()),
                'url' => $this->generateUrl('site_services_show', ['slug' => $service->getSlug()])
                    );
        }
        return $request->isXmlHttpRequest() ? $this->json($results) : array(
            'services' => $services,
            );
    }

    /**
     * @Route(
     			"/opensearch.xml",
     			name="site_wide_search_description",
     			defaults={"_format":"xml"}
     		)
     * @Cache(smaxage=0)
     * @Template(":search:opensearch.xml.twig")
     */
    public function describeAction()
    {
    }
}
