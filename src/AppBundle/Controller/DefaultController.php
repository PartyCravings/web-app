<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;

/**
 * Class DefaultController
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
                        "id" = "country",
                        "repository_method" = "getHomeCampaigns"
                    }
                )
     * @ParamConverter(
                    "posts",
                    class="AppBundle:Posts",
                    options=
                    {
                        "id" = "country",
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
                        "repository_method" = "findHeaderCategories"
                    }
                )
     * @Template(
                    ":fragments:_header.html.twig",
                     vars={"categories"}
            )
     * @Cache(
                smaxage=0,
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
                    vars={"country"}
            )
     * @Cache(
                smaxage=0,
                lastmodified="country.getUpdated()",
                etag="'Country' ~ country.getId() ~ country.getUpdated().format('Y-m-d')"
            )
     * @param \AppBundle\Entity\Country $country
     * @return array
     */
    public function footerAction(\AppBundle\Entity\Country $country) :void
    {
    }
}
