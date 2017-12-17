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
     * @Template(":awww:sitemap.xml.twig", vars={"countries"})
     * @Cache(smaxage=86400)
     */
    public function sitemapAction() :void
    {
    }

    /**
     * @Route("/{req}", name="redirect", host="www.%hostname%", requirements={"req": ".+"})
     * @Template(":awww:countries.html.twig")
     */
    public function redirectAction(Request $request, EntityManagerInterface $em) :array
    {
        $path = $request->getBasePath();
        $countryName = $request->server->get('HTTP_CF_IPCOUNTRY');
        /*if ('XX' == $countryName || empty($countryName)) {
            $countryName = geoip_country_code_by_name($request->getClientIp());
        }*/
        $country = $em->getRepository(Country::class)->findByName($countryName);
        if ($country) {
            $uri = $request->getScheme().'://'.$country->hostname ?: $country->subdomain.'/'.$path;
            $this->redirect($uri);
        }
        return array('countries' => $em->getRepository(Country::class)->findAll());
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
