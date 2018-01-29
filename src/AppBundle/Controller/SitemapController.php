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

/**
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
class SitemapController extends AbstractController
{
    const MAX_NO_URLS = 50000;

    /**
     * @Route("/sitemap.xml", name="sitemap_country", defaults={"_format"="xml"})
     * @Template(":sitemap:country.xml.twig")
     * @Cache(smaxage=7200)
     */
    public function countrySitemapAction(Country $_country, EntityManagerInterface $em): array
    {
        $cpages = $em->getRepository('AppBundle:Category')->findAllByCountry($_country, $page, self::MAX_NO_URLS)->getNbPages();
        $spages = $em->getRepository('AppBundle:Service')->findAllByCountry($_country, $page, self::MAX_NO_URLS)->getNbPages();
        $infpages = $em->getRepository('AppBundle:Pages')->findAllByCountry($_country, $page, self::MAX_NO_URLS)->getNbPages();

        return ['catpages' => $cpages, 'serpages' => $spages, 'infpages' => $infpages, 'country' => $_country];
    }

    /**
     * @Route("/categories/{page}/sitemap.xml", defaults={"_format"="xml"}, requirements={"page": "[1-9]\d*"}, name="sitemap_categories")
     * @Template(":sitemap:categories.xml.twig")
     * @Cache(smaxage=7200)
     */
    public function categorySitemapAction(Country $_country, int $page, EntityManagerInterface $em): array
    {
        $categories = $em->getRepository('AppBundle:Category')->findAllByCountry($_country, $page, self::MAX_NO_URLS);

        return ['categories' => $categories, 'country' => $_country];
    }

    /**
     * @Route("/services/{page}/sitemap.xml", defaults={"_format"="xml"}, requirements={"page": "[1-9]\d*"}, name="sitemap_services")
     * @Template(":sitemap:services.xml.twig")
     * @Cache(smaxage=7200)
     */
    public function serviceSitemapAction(Country $_country, int $page, EntityManagerInterface $em): array
    {
        $services = $em->getRepository('AppBundle:Service')->findAllByCountry($_country, $page, self::MAX_NO_URLS);

        return ['services' => $services, 'country' => $_country];
    }

    /**
     * @Route("/pages/{page}/sitemap.xml", defaults={"_format"="xml"}, requirements={"page": "[1-9]\d*"}, name="sitemap_pages")
     * @Template(":sitemap:pages.xml.twig")
     * @Cache(smaxage=7200)
     */
    public function pageSitemapAction(Country $_country, int $page, EntityManagerInterface $em): array
    {
        $pages = $em->getRepository('AppBundle:Pages')->findAllByCountry($_country, $page, self::MAX_NO_URLS);

        return ['pages' => $pages, 'country' => $_country];
    }
}
