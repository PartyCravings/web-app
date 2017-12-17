<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use AppBundle\Entity\Country;

/**
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @ParamConverter("campaigns", class="AppBundle:Campaigns", options={"id"="_country", "repository_method"= "getHomeCampaigns"})
     * @ParamConverter("posts", class="AppBundle:Post", options={"id"="_country", "repository_method" = "findHomePosts"})
     * @ParamConverter("parties", class="AppBundle:Party", options={"id" = "_country", "repository_method" = "findHomeParties"})
     * @Cache(smaxage=86400)
     * @Template(":default:index.html.twig", vars={"campaigns","posts","parties"})
     */
    public function indexAction(array $campaigns, array $posts, Breadcrumbs $breadcrumbs) :void
    {
        $breadcrumbs->prependRouteItem('Home', 'homepage');
    }

    /**
     * @Route("/header", name="header")
     * @ParamConverter("categories", class="AppBundle:Category", options={"id"="_country","repository_method" = "findHeaderCategories"})
     * @Template(":fragments:_header.html.twig")
     * @Cache(smaxage=86400)
     */
    public function headerAction(Request $request, Country $_country, array $categories, EntityManagerInterface $em, UrlGeneratorInterface $generator) :array
    {
        $tree = $em->getRepository('AppBundle:Category')->childrenHierarchy(
            null,
            false,
            array(
                'decorate' => true,
                'rootOpen' => function ($tree) {
                    if (count($tree) && ($tree[0]['lvl'] == 0)) {
                        return '<li class="item">';
                    }
                },
                'rootClose' => function ($child) {
                    if (count($child) && ($child[0]['lvl'] == 0)) {
                        return '</li>';
                    }
                },
                'childOpen' => '',
                'childClose' => '',
                'nodeDecorator' => function ($node) use (&$generator) {
                    if ($node['lvl'] == 1 || $node['isVisibleOnHome']) {
                        $link = $generator->generate('category_show', array('slug' => $node['slug']), UrlGeneratorInterface::ABSOLUTE_PATH);
                        $name = ucfirst($node['title']);
                        return "<a href=\"$link\">{$name}</a>";
                    }
                }
                )
        );

        return array('tree'=> $tree, 'categories'=> $categories, '_country'=> $_country);
    }

    /**
     * @Route("/footer" , name="footer")
     * @Template(":fragments:_footer.html.twig")
     * @ParamConverter("similarCountries", class="AppBundle:Country", options={"id"="_country", "repository_method"= "findSimilarCountries"})
     * @Cache(smaxage=86400, lastmodified="_country.getUpdated()", etag="'Country' ~ _country.getId() ~ _country.getUpdated().format('Y-m-d')")
     */
    public function footerAction(Country $_country, array $similarCountries) :array
    {
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
