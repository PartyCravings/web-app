<?php

namespace AppBundle\Controller\Category;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use Pagerfanta\Pagerfanta;
use AppBundle\Entity\Category;
use AppBundle\Entity\Country;

/**
 * Class CategoryController
 * @package AppBundle\Controller
 *
 * @Route("/category")
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
class CategoryController extends AbstractController
{
    /*
     * @Route("", name="site_category_index")
     * @Template(":category:index.html.twig")
     * @Cache(smaxage=0)
     */
    public function indexAction(Country $_country, Breadcrumbs $breadcrumbs, EntityManagerInterface $em) :Pagerfanta
    {
        // Pass "_demo" route name without any parameters
        $breadcrumbs->addRouteItem("Category", "site_category_index");
        $breadcrumbs->prependRouteItem("Home", "homepage");

        return $em->getRepository(Category::class)
                ->findAllByCountry(
                    $_country,
                    $request->get('page', 1)
                );
    }

    /**
     * @Route("/{slug}", name="site_category_listing")
     * @Template(":category:sub-index.html.twig")
     * @ParamConverter(
            "parent",
            class="AppBundle:Category",
            options=
            {
                "id" = "slug",
                "repository_method" = "findBySlug"
            }
        )
     * @Cache(smaxage=0)
     */
    public function childAction(Request $request, Category $parent, Breadcrumbs $breadcrumbs, EntityManagerInterface $em) :array
    {
        $node = $parent;
        while ($node) {
            $breadcrumbs->prependRouteItem($node->getTitle(), 'site_category_listing', ['slug'=>$node->getSlug()]);
            $node = $node->getParent();
        }
        $breadcrumbs->prependRouteItem("Home", "homepage");

        $categories = $em->getRepository(Category::class)
                    ->findAllByParent(
                        $parent,
                        $request->get('page', 1)
                    );
        return array(
            'categories'=> $categories,
            'parent' => $parent
        );
    }
}
