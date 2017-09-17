<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'ss',
        ]);
    }
}
