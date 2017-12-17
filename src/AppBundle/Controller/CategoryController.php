<?php

namespace AppBundle\Controller;

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
 * @Route("category")
 * @ParamConverter("countries", class="AppBundle:Country", options={"id"="_country", "repository_method"= "findAll"})
*/
class CategoryController extends AbstractController
{
    /**
     * @Route("", name="category_index")
     * @Template(":service:index.html.twig")
     * @Cache(smaxage=0)
     */
    public function indexAction(
        Country $_country,
        Request $request,
        EntityManagerInterface $em,
        Breadcrumbs $breadcrumbs,
        LocationTools $locationTools,
        Sorter $sorter
    ) :array {
        $page = $request->get('page', 1);

        $categoryTree = '';
        $categories =  $em->getRepository(Category::class)
                ->findAllByCountry(
                    $_country,
                    $page
                );
        foreach ($categories as $category) {
            $categoryTree .= $sorter->buildHtmlCategoryHierarchy($category);
        }

        $services = $em->getRepository(Service::class)
                ->findAllByCountry(
                    $_country,
                    $page
                );
        // Pass route name without any parameters
        $breadcrumbs->addRouteItem('Category', 'category_index');
        $breadcrumbs->prependRouteItem('Home', 'homepage');

        return  array(
                    'services'=> $services,
                    'category'=> @((array)$categories->getIterator()[0]) ?: false,
                    'tree'=> $categoryTree,
                    'locationtree'=> $locationTools->generateLocationTree($request->get('location', !null)),
                    'map'=> $locationTools->generateMap($services)
                );
    }

    /**
     * @Route("/{slug}",
            name="category_show")
     * @ParamConverter(
            "category",
            class="AppBundle:Category",
            options=
            {
                "id" = "slug",
                "repository_method" = "findBySlug"
            }
        )
     * @Template(":service:index.html.twig")
     * @Cache(smaxage=86400)
     *
     */
    public function categoryLocationAction(
        Category $category,
        Breadcrumbs $breadcrumbs,
        Request $request,
        EntityManagerInterface $em,
        LocationTools $locationTools,
        Sorter $sorter
    ) {
        $location = $request->get('location', !null);
        $breadcrumbs->prependRouteItem($location, 'site_location_listing', ['slug'=>$location]);
        $node = $category;
        while ($node) {
            $breadcrumbs->prependRouteItem($node->getTitle(), 'category_show', ['slug'=>$node->getSlug()]);
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem('Category', 'category_index');
        $breadcrumbs->prependRouteItem('Home', 'homepage');

        $services = $em->getRepository(Service::class)->findAllByCategoryLocation($category, $location, $request->get('page', 1));
        

        return array(
                    'services'=> $services,
                    'category'=> $category,
                    'tree'=> $sorter->buildHtmlCategoryHierarchy($category),
                    'locationtree'=> $locationTools->generateLocationTree($location),
                    'map'=> $locationTools->generateMap($services)
                );
    }
}
