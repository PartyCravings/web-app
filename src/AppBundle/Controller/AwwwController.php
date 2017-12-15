<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class AwwwController extends AbstractController //Purposely named to match first
{
    /**
     * @Route("/sitemap.xml", name="sitemap", host="www.%hostname%", defaults={"page": "1", "_format"="xml"})
     * @ParamConverter("countries", class="AppBundle:Country", options={"id"="_country", "repository_method"= "findAll"})
     * @Template(":default:sitemap.xml.twig", vars={"countries"})
     * @Cache(smaxage=86400)
     */
    public function sitemapAction() :void
    {
    }

    /**
     * @Route("/{req}", name="redirect", requirements={"req": ".+"})
     * @Template(":default:countries.html.twig")
     */
    public function redirectAction(Request $request, EntityManagerInterface $em) :void
    {
        $path = $request->getBasePath();
        $countryName = $request->headers->get('HTTP_CF_IPCOUNTRY');
        /*if ('XX' == $countryName || empty($countryName)) {
            $countryName = geoip_country_code_by_name($request->getClientIp());
        }*/
        $country = $em->getRepository(Country::class)->findByName($country);
        if ($country) {
            $uri = $request->getScheme().'://'.$country->hostname ?: $country->subdomain.'/'.$path;
            $this->redirect($uri);
        }
    }

    /**
     * @Route("/offline" , name="offline")
     * @Template(":fragments:_offline.html.twig")
     * @Cache(smaxage=2592000)
     */
    public function offlineAction() :void
    {
    }
}
