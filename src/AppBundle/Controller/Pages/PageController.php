<?php

namespace AppBundle\Controller\Pages;

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
 class PageController extends AbstractController
 {
     /**
      * @Route(
                  "/pages/{slug}",
                   name="site_show_page"
              )
      * @Template(":pages:page.html.twig")
      * @ParamConverter(
                          "page",
                          class="AppBundle:Pages",
                          options=
                          {
                              "id" = {"slug", "country"},
                              "repository_method" = "findByCountry"
                          }
                      )
      * @Cache(
                 smaxage=0,
                 lastmodified="page.getUpdatedAt()",
                 etag="'Page' ~ page.getId() ~ page.getUpdatedAt().format('Y-m-d')"
             )
      */
     public function showAction(\AppBundle\Entity\Pages $page) :void
     {
     }
 }
