<?php

namespace AppBundle\Controller\Web;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class PartyWelcomeController extends Controller
 {
   /**
      * @Route("/a", name="homepage")
      */
      public function welcomeAction()
     {
         $cache = new FilesystemAdapter();
         $placeholder = $cache->getItem('welcome_controller_lists');
         if (!$placeholder->isHit()){
             $list1 = $this->getEntityManager()->getRepository('AppBundle:LinkSettings')->getLinkSettings();
             $list2 = $this->getEntityManager()->getRepository('AppBundle:SeoSettings')->getSeoSettings();
             $list3 = $this->getEntityManager()->getRepository('AppBundle:Customer')->findOneBy(['firstname' => 'john']);
             $placeholder->set(['linksetting' => $list1,
                        'seosetting' => $list2,
                        'testvariable' => $list3,
                 ]);
             $placeholder->expiresAfter(60);
             $cache->save($placeholder);}
         $value = $placeholder->get();
         $cat =
             $this->render('default/index.html.twig', $value);
         $cat->setSharedMaxAge(60);
         return $cat;
     }

    /**
     * @Route("/contact-us", name="contact_us_page")
     */
    public function contactAction()
    {
        $list1 = $this->getEntityManager()->getRepository('AppBundle:LinkSettings')->getLinkSettings();
        $list2 = $this->getEntityManager()->getRepository('AppBundle:SeoSettings')->getSeoSettings();
        $list3 = $this->getEntityManager()->getRepository('AppBundle:ContactSettings')->getContactSettings();
        return $this->render('default/index.html.twig', [
            'linksetting' => $list1,
            'seosetting' => $list2,
            'contactsetting' => $list3])->setSharedMaxAge(60);
    }
    /**
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        return $this->get('doctrine.orm.entity_manager');
    }
}