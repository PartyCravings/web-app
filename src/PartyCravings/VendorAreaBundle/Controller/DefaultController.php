<?php

namespace PartyCravings\VendorAreaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('PartyCravingsVendorAreaBundle:Default:index.html.twig');
    }
}
