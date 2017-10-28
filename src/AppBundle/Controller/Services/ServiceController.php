<?php

namespace AppBundle\Controller\Services;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class PageController
 * @package AppBundle\Controller
 *
 * @ParamConverter(
                    "country",
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
                 "/services/{slug}",
                 name="site_show_service"
             )
     * @ParamConverter(
                         "service",
                         class="AppBundle:Service",
                         options=
                         {
                             "id" ={"slug", "country"},
                             "repository_method" = "findBySlugCountry"
                         }
                     )
     * @Template(
                     ":services:show.html.twig",
                     vars={"service"}
                 )
     * @Cache(
                smaxage=0,
                lastmodified="service.getUpdatedAt()",
                etag="'Service' ~ service.getId() ~ service.getUpdatedAt().format('Y-m-d')"
            )
     */
    public function showAction(\AppBundle\Entity\Service $service) :void
    {
    }

    /**
     * @Route(
                 "/search",
                 name="site_wide_search"
             )
     * @Cache(smaxage=0)
     * @Template(":services:search.html.twig")
     */
    public function searchAction(
        Request $request,
        EntityManagerInterface $em,
        \AppBundle\Entity\Country $country
    ) {
        $services = $em->getRepository('AppBundle:Service')
            ->findBySearchQuery(
                    $request->get('query', ''),
                    $request->get('category', !null),
                    $country,
                    $request->get('page', 1)
        );
        return $request->isXmlHttpRequest() ? $this->json(
            function () use ($services) {
                $results = array();
                foreach ($services as $service) {
                    $results[] = array(
                    'name' => htmlspecialchars($service->getName()),
                    'date' => $service->getDateAdd()->format('M d, Y'),
                    'vendor' => htmlspecialchars($service->getVendor()->getName()),
                    'summary' => htmlspecialchars($service->getserviceDescriptions()->getDescription()),
                    'url' => $this->generateUrl('site_show_service', ['slug' => $service->getSlug()])
                        );
                }
                return $results;
            }
        ) : $services;
    }
}
