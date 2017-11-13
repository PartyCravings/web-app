<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use AppBundle\Entity\Country;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 *
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
class DefaultController extends AbstractController
{
    /**
     * @Route(
                "/",
                name="homepage"
            )
     * @ParamConverter(
                    "campaigns",
                    class="AppBundle:Campaigns",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "getHomeCampaigns"
                    }
                )
     * @ParamConverter(
                    "posts",
                    class="AppBundle:Post",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "findHomePosts"
                    }
                )
     * @Cache(smaxage=0)
     * @Template(
                    ":default:index.html.twig",
                    vars= {
                            "campaigns",
                            "posts"
                        }
            )
     * @param array $campaigns
     * @param array $posts
     */
    public function indexAction(array $campaigns, array $posts, Breadcrumbs $breadcrumbs) :void
    {
        $breadcrumbs->prependRouteItem("Home", "homepage");
    }

    /**
     * @Route(
                "/header",
                name="sitewide_header"
            )
     * @ParamConverter(
                    "categories",
                    class="AppBundle:Category",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "findHeaderCategories"
                    }
                )
     * @Template(
                    ":fragments:_header.html.twig",
                     vars={"categories"}
            )
     * @Cache(
                smaxage=300,
                vary={"PHPSESSID"}
            )
     * @param EntityManagerInterface $em
     * @return array
     */
    public function headerAction(array $categories) :void
    {
    }

    /**
     * @Route(
                "/footer" ,
                name="sitewide_footer"
            )
     * @Template(
                    ":fragments:_footer.html.twig",
                    vars={"_country"}
            )
     * @Cache(
                smaxage=300,
                lastmodified="_country.getUpdated()",
                etag="'Country' ~ _country.getId() ~ _country.getUpdated().format('Y-m-d')"
            )
     * @param \AppBundle\Entity\Country $_country
     * @return array
     */
    public function footerAction(Country $_country) :void
    {
    }
}
