<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Posts;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Campaigns;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @Cache(smaxage=100)
     * @Template(":default:index.html.twig")
     * @param EntityManagerInterface $em
     * @return array
     */
    public function indexAction(EntityManagerInterface $em) :array
    {
        $campaigns = $em->getRepository(Campaigns::class)->getHomeCampaigns();
        $posts = $em->getRepository(Posts::class)->findBy(['isApproved'=> true], ["publishedAt" => "DESC"], 6);
        return array('campaigns' => $campaigns, 'posts'=> $posts);
    }

    /**
     * @Template(":default:_header.html.twig")
     * @Cache(smaxage=300, vary={"Cookie"})
     * @param EntityManagerInterface $em
     * @return array
     */
    public function headerAction(EntityManagerInterface $em) :array
    {
        $categories = $em->getRepository(Category::class)->getHeaderCategories();
        return array('categories' => $categories);
    }

    /**
     * @Template(":default:_footer.html.twig")
     * @Cache(smaxage=10)
     * @param EntityManagerInterface $em
     * @return array
     */
    public function footerAction(EntityManagerInterface $em) :array
    {
        //$siteInfo = $em->getRepository()
        return array();
    }
}
