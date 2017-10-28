<?php

namespace AppBundle\Controller\Services;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

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
class CategoryController extends AbstractController
{
    /*
     * @Route(
                 "/category",
                 name="site_show_categories"
             )
     * @ParamConverter(
                         "categories",
                         class="AppBundle:Category",
                         options=
                         {
                             "id"="country",
                             "repository_method"="findAllByCountry"
                         }
                     )
     * @Template(
                     ":services:category_listing.html.twig",
                     vars={"categories"}
                 )
     * @Cache(smaxage=0)
     */
    public function indexAction(array $categories) :void
    {
    }

    /**
     * @Route(
                 "/category/{slug}",
                 name="site_category_child"
             )
     * @ParamConverter(
                         "categories",
                         class="AppBundle:Category",
                         options=
                         {
                             "id"={"slug","country"},
                             "repository_method"="findChildByParent"
                         }
                     )
     * @Template(
                     ":services:category_listing.html.twig",
                     vars={"categories"}
                 )
     * @Cache(smaxage=0)
     */
    public function childAction(array $categories) :void
    {
    }
}
