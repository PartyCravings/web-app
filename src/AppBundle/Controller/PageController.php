<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Entity\Pages;

/**
 * @Route("page")
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
 class PageController extends AbstractController
 {
     /**
      * @Route("/{slug}", name="page_show")
      * @Template(":pages:page.html.twig")
      * @ParamConverter("page", class="AppBundle:Pages", options={"id" = "slug", "repository_method" = "findBySlug"})
      * @Cache(smaxage=0, lastmodified="page.getUpdatedAt()", etag="'Page' ~ page.getId() ~ page.getUpdatedAt().format('Y-m-d')")
      */
     public function showAction(Pages $page) :void
     {
     }
 }
