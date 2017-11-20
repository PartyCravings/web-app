<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
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
     * @Cache(smaxage=1)
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
                    ":fragments:_header.html.twig"
                    )
     * @Cache(
                smaxage=1,
                vary={"PHPSESSID"}
            )
     * @param EntityManagerInterface $em
     * @return array
     */
    public function headerAction(Country $_country, array $categories, EntityManagerInterface $em) :array
    {
        $controller = $this;
        $tree = $em->getRepository('AppBundle:Category')->childrenHierarchy(null,false,array('decorate' => true,
            'rootOpen' => function($tree) {
                if(count($tree) && ($tree[0]['lvl'] == 0)){
                        return '<div class="item">';
                }
            },
            'rootClose' => function($child) {
                if(count($child) && ($child[0]['lvl'] == 0)){
                                return '</div>';
                }
             },
            'childOpen' => '',
            'childClose' => '',
            'nodeDecorator' => function($node) use (&$controller) {
                if($node['lvl'] == 1) {
                    return '<h3>'.ucfirst($node['title']).'</h3>';
                }elseif($node["isVisibleOnHome"]) {
                    return '<a href="'.$controller->generateUrl("site_services_categories",array("slug"=>$node['slug'])).'">'.$node['title'].'</a>&nbsp;';
                }
            }
        ));

        return array('tree'=> $tree, 'categories'=> $categories, '_country'=> $_country);
    }

    /**
     * @Route(
                "/footer" ,
                name="sitewide_footer"
            )
     * @Template(
                    ":fragments:_footer.html.twig"
            )
     * @Cache(
                smaxage=86400,
                lastmodified="_country.getUpdated()",
                etag="'Country' ~ _country.getId() ~ _country.getUpdated().format('Y-m-d')"
            )
     * @param \AppBundle\Entity\Country $_country
     * @return array
     */
    public function footerAction(Country $_country, EntityManagerInterface $em) :array
    {
        $similarCountries = $em->getRepository(Country::class)->findSimilarCountries($_country);
        $form = $this->createFormBuilder(null, array('csrf_protection' => false))
            ->setAction($this->generateUrl('notification_newsletter_register'))
            ->setMethod('POST')
            ->add('email', EmailType::class, array('label'=> false))
            ->getForm('success', '');

        return array(
            'newsletter'=> $form->createView(),
            '_country' => $_country,
            'similarCountries'=> $similarCountries
        );
    }
}
